<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Font;

class fontplacard extends Component
{
    public function __construct()
    {
        $this->fonts = $this->getFonts();
    }

    private function getFonts()
    {
        return Font::all(); // Ambil semua data dari tabel fonts
    }

    public function render(): View|Closure|string
    {
        return view('components.fontplacard', [
            'fonts' => $this->fonts,
            
        ]);
    }
}
