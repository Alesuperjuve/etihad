<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Desc;

class descplacard extends Component
{
    public function __construct()
    {
        $this->descs = $this->getDesc();
    }

    private function getDesc()
    {
        return Desc::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.descplacard', [
            'descs' => $this->descs,
            
        ]);
    }
}
