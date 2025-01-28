<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Height;

class heightplacard extends Component
{
    public function __construct()
    {
        $this->heights = $this->getHeight();
    }

    private function getHeight()
    {
        return Height::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.heightplacard', [
            'heights' => $this->heights,
            
        ]);
    }
}
