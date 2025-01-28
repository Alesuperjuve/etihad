<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnumber;

class PartnumberController extends Controller
{
    public function index()
    {
        $partnumber = Partnumber::orderBy('nama', 'asc')->get();
        
        return view('partnumber.index', compact('partnumber'));
    }
    
    
    
}
