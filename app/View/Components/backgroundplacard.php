<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Background;

class backgroundplacard extends Component
{
    
    public function __construct()
    {
        $this->backgrounds = $this->getBackground();
    }

    private function getBackground()
    {
        return Background::orderBy('nama', 'asc')->get(); // Ambil semua data dari tabel background
    }

    public function render(): View|Closure|string
    {
        return view('components.backgroundplacard', [
            'backgrounds' => $this->backgrounds,    
        ]);
    }
}
