<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Artwork;

class artworkplacard extends Component
{
    public function __construct()
    {
        $this->artworks = $this->getArtwork();
    }

    private function getArtwork()
    {
        return Artwork::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.artworkplacard', [
            'artworks' => $this->artworks,
            
        ]);
    }
}
