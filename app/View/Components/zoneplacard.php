<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Zone;

class zoneplacard extends Component
{
    public function __construct()
    {
        $this->zones = $this->getZone();
    }

    private function getZone()
    {
        return Zone::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.zoneplacard', [
            'zones' => $this->zones,
            
        ]);
    }
}
