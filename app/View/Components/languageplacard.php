<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Language;

class languageplacard extends Component
{
    public function __construct()
    {
        $this->languages = $this->getLanguage();
    }

    private function getLanguage()
    {
        return Language::orderBy('nama', 'asc')->get(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.languageplacard', [
            'languages' => $this->languages,    
        ]);
    }
}
