<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Partnumber;

class partnumberplacard extends Component
{
    public $partnumbers;
    
    public function __construct()
    {
        $this->partnumbers = $this->getPartnumber();
    }

    private function getPartnumber()
    {
        return Partnumber::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.partnumber', [
            'partnumbers' => $this->partnumbers,
            
        ]);
    }
}
