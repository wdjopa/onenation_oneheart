<?php

namespace App\Filament\Widgets;

use App\Models\Donation;
use App\Models\Orphanage;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AppOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Nb. de visites', 0)
                ->icon('heroicon-o-eye'),
            Stat::make('Bénévoles', function () {
                return User::count();
            })->icon('heroicon-o-user'),
            Stat::make('Orphelinats', function () {
                return Orphanage::count();
            })->icon('heroicon-o-home'),
            Stat::make('Dons', function () {
                return Donation::query()
                        ->where('status', true)
                        ->sum('amount') . " FCFA";
            })->icon('heroicon-o-currency-dollar'),
        ];
    }
}
