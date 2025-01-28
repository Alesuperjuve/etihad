<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Body;

class bodyplacard extends Component
{
    public function __construct()
    {
        $this->bodys = $this->getBodys();
    }

    private function getBodys()
    {
        return Body::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.bodyplacard', [
            'bodys' => $this->bodys,
            
        ]);
    }
}
