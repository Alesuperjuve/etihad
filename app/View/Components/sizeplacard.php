<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Size;

class sizeplacard extends Component
{
    public function __construct()
    {
        $this->sizes = $this->getSize();
    }

    private function getSize()
    {
        return Size::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.sizeplacard', [
            'sizes' => $this->sizes,
            
        ]);
    }
}
