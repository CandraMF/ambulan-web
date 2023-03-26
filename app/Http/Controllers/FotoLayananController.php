<?php

namespace App\Http\Controllers;

use App\Models\FotoLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FotoLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(FotoLayanan $fotoLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoLayanan $fotoLayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FotoLayanan $fotoLayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = FotoLayanan::find($id);
        $data->delete();

        return Redirect::back()->with('success', 'Data Berhasil Dihapus');
    }
}
