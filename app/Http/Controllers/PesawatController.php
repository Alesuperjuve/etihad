<?php

namespace App\Http\Controllers;

use App\Models\Pesawat;
use App\Models\Maskapai;
use App\Models\TipeAvion;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    public function index()
    {
        $maskapai   = Maskapai::all();
        $pesawat    = Pesawat::orderBy('nama', 'asc')->get();
        $tipe       = TipeAvion::orderBy('tipe', 'asc')->get();

        return view('pesawat.index', compact('pesawat','maskapai','tipe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
