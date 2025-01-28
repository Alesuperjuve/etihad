<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Material;

class materialplacard extends Component
{
    public function __construct()
    {
        $this->materials = $this->getMaterial();
    }

    private function getMaterial()
    {
        return Material::orderBy('nama', 'asc')->get(); // Ambil semua data dari tabel material
    }

    public function render(): View|Closure|string
    {
        return view('components.materialplacard', [
            'materials' => $this->materials,    
        ]);
    }
}
