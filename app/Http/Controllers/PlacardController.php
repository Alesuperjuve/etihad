<?php

namespace App\Http\Controllers;

use App\Models\Placard;
use App\Models\Font;
use App\Models\Artwork;
use App\Models\Background;
use App\Models\Body;
use App\Models\Desc;
use App\Models\Height;
use App\Models\Language;
use App\Models\Material;
use App\Models\Radius;
use App\Models\Scale;
use App\Models\Size;
use App\Models\Tolerance;

use App\Data\PlacardDropdown;
use Illuminate\Http\Request;

class PlacardController extends Controller
{
    public function index()
    {
        $placards = Placard::all();
        $fonts = Font::all();

        $artworks = Artwork::all();
        $backgrounds = Background::all();
        $bodys = Body::all();
        $descs = Desc::all();
        $heights = Height::all();
        $languages = Language::all();
        $materials = Material::all();
        $radiuss = Radius::all();
        $scales = Scale::all();
        $sizes = Size::all();
        $tolerances = Tolerance::all();

        $dropdownplacard = PlacardDropdown::getMenuDD();
        
        return view('placard.index', compact('placards','fonts','artworks','backgrounds','bodys','descs','heights','languages','materials','radiuss','scales','sizes','tolerances','dropdownplacard'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
       
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
