<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Title;

class titleplacard extends Component
{
    public function __construct()
    {
        $this->titles = $this->getTitle();
    }

    private function getTitle()
    {
        return Title::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.titleplacard', [
            'titles' => $this->titles,    
        ]);
    }
}
