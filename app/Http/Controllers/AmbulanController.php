<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmbulanCreateRequest;
use App\Models\Ambulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AmbulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ambulan.index', [
            'datas' => DB::table('ambulans')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ambulan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmbulanCreateRequest $request)
    {
        $data = $request->validated();
        $data["status"] = 1;

        $ambulan = Ambulan::create($data);

        return Redirect::route('ambulan')->with('status', 'ambulan created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ambulan $ambulan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ambulan $ambulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ambulan $ambulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ambulan $ambulan)
    {
        //
    }
}
