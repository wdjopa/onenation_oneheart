<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $donations = Donation::all();
        return view("admin.donations.index", compact("donations"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $donation = new Donation;
        $donation->amount = $request->amount;
        $donation->status = 0;
        $datas = [
            "name" => $request->name,
            "email" => $request->email,
            "tel" => $request->tel,
            "payment_mode" => $request->payment_mode,
        ];
        $donation->datas = $datas;
        
        if($request->orphanage_id)
        $donation->orphanage_id = $request->orphanage_id;
        
        $donation->save();

        return redirect()->back()->with("success", "Votre don a bien été enregistré. Nous vous recontacterons afin de finaliser le paiement");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    public function update_status(Request $request)
    {
        $donation = Donation::find($request->donation_id);
        $donation->status = $request->status;
        $donation->save();
        return redirect()->back()->with("success", "Le don a bien été modifié");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $datas = $donation->datas;
        if ($request->amount) {
            $donation->amount = $request->amount;
        }

        if ($request->status) {
            $donation->status = $request->status;
        }

        if ($request->name) {
            $datas["name"] = $request->name;
        }

        if ($request->email) {
            $datas["email"] = $request->email;
        }

        if ($request->tel) {
            $datas["tel"] = $request->tel;
        }

        if ($request->payment_mode) {
            $datas["payment_mode"] = $request->payment_mode;
        }
        $donation->datas = $datas;
        $donation->save();

        return redirect()->back()->with("success", "Ce don a bien été modifié.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request
     * @return \Illuminate\Http\Response
     */
    public function multipleDestroy(Request $request)
    {
        if ($request->ids) {
            $ids = $request->ids;
            foreach ($ids as $id) {
                $donations = Donation::find($id);
                //ActivityLogger::activity("Suppression de l'équipe ID:".$client->id.' par l\'utilisateur ID:'.Auth::id());
                $donations->delete();
            }
            $message = sizeof($ids) . ' don(s) supprimé(s) avec succès';
        } else {
            $message = "Aucun don n'a été supprimé";
        }
        return redirect()->route("donations.index")->with('success', $message);
    }
}
