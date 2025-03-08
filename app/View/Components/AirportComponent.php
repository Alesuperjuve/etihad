<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Airport;


class AirportComponent extends Component
{
    public $airport;

    public function __construct()
    {
        // Ambil semua data dari MongoDB, urutkan berdasarkan DATE
        $this->airport = AIRPORT::orderBy('NAME', 'asc')->get();
    }

    public function render()
    {
        return view('components.airport-component');
    }
}