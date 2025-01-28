<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Data\PlacardDropdown;
use App\Models\Font;

class tabplacard extends Component
{
    public $dropdownplacard;
    
    
    

    public function __construct()
    {
        $this->dropdownplacard    = $this->getOrderedDropdown();
        
        
    }

    private function getOrderedDropdown()
    {
        $dropdown = PlacardDropdown::getMenuDD();
        usort($dropdown, function ($a, $b) {
            return strcmp($a['nama'], $b['nama']);
        });
        return $dropdown;
    }

    public function render(): View|Closure|string
    {
        return view('components.tabplacard');
    }
}
