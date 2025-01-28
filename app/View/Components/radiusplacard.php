<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Radius;

class radiusplacard extends Component
{
    public function __construct()
    {
        $this->radiuss = $this->getRadius();
    }

    private function getRadius()
    {
        return Radius::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.radiusplacard', [
            'radiuss' => $this->radiuss,
            
        ]);
    }
}
