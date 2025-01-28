<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Data\MainMenu;

class navhorizon extends Component
{
    public $menu;
    public $level;

    public function __construct($level = 'all')
    {
        $this->level    = $level;
        $this->menu     = $this->filterMenu(MainMenu::getAll(), $level);
    }

    private function filterMenu(array $menus, $level)
    {
        return array_filter($menus, function ($menu) use ($level) {
            return $menu['aktif'] == '1' && ($level === 'all' || $menu['level'] == $level);
        });
    }

    public function render(): View|Closure|string
    {
        return view('components.navhorizon');
    }
}
