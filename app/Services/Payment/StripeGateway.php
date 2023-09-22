<?php


namespace App\Services\Payment;

use App\Models\Donation;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;

class StripeGateway implements BaseGateway
{
    public function pay(Donation $donation) : string
    {
        $key = env("STRIPE_SECRET");

        $stripe = new StripeClient($key);

        $session = $stripe->checkout->sessions->create([
            'success_url' => $donation->orphanage_id ? route('public.orphanages.details', $donation->orphanage->slug)."?success=true" : route('public.home')."?success=true",
            'cancel_url' => $donation->orphanage_id ? route('public.orphanages.details', $donation->orphanage->slug)."?success=false" : route('public.home')."?success=false",
            'currency' => 'XAF',
            'metadata' => [
                'donation_id' => $donation->id
            ],
            'mode' => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'XAF',
                    'product_data' => [
                        'name' => 'Donation'
                    ],
                    'unit_amount' => $donation->amount
                ],
                'quantity' => 1
            ]]
        ]);

        return $session->url;
    }

    public function callback(Request $request) 
    {
        $stripe = new StripeClient(env("STRIPE_SECRET"));

        $session = $stripe->checkout->sessions->retrieve($request->data['object']['id']);

        if ( $session != null && $session->status == 'complete') {
            $donation = Donation::find($session->metadata->donation_id);
            $donation->status = 1;
            $donation->save();
        }
    }
}
