<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Peminjaman;

class Getpeminjamanan extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('total peminjaman', Peminjaman::count())
        ];
    }
}
