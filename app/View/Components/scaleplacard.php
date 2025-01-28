<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Scale;

class scaleplacard extends Component
{
    public function __construct()
    {
        $this->scales = $this->getScale();
    }

    private function getScale()
    {
        return Scale::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.scaleplacard', [
            'scales' => $this->scales,
            
        ]);
    }
}
