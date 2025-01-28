<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Tolerance;

class toleranceplacard extends Component
{
    public function __construct()
    {
        $this->tolerances = $this->getTolerance();
    }

    private function getTolerance()
    {
        return Tolerance::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.toleranceplacard', [
            'tolerances' => $this->tolerances,
            
        ]);
    }
}
