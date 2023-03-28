<?php

namespace App\Http\Controllers;

use App\Models\FotoAmbulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FotoAmbulanController extends Controller
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
    public function show(FotoAmbulan $fotoAmbulan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoAmbulan $fotoAmbulan)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $foto = FotoAmbulan::find($id);

        $clearPin = FotoAmbulan::whereAmbulanId($foto->ambulan->id);

        $clearPin->update([
            'status' => 1
        ]);
        $foto->update($request->all());

        return Redirect::back()->with('success', 'Foto Berhasil Di Pin');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = FotoAmbulan::find($id);
        $data->delete();

        return Redirect::back()->with('success', 'Data Berhasil Dihapus');
    }
}
