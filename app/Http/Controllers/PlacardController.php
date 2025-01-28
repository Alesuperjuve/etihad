<?php

namespace App\Http\Controllers;

use App\Models\Placard;
use App\Models\Font;
use App\Data\PlacardDropdown;
use Illuminate\Http\Request;

class PlacardController extends Controller
{
    public function index()
    {
        $placards = Placard::all();
        $fonts = Font::all();

        $dropdownplacard = PlacardDropdown::getMenuDD();
        
        return view('placard.index', compact('placards','fonts','dropdownplacard'));
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
