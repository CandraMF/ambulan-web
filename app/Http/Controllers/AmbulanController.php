<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmbulanCreateRequest;
use App\Http\Requests\AmbulanUpdateRequest;
use App\Models\Ambulan;
use App\Models\FotoAmbulan;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AmbulanController extends Controller
{
    protected $allowedFileExtensions = [
        'png',
        'jpg',
        'jpeg',
    ];

    protected function isAllowedFile( UploadedFile $file ) {
        return in_array(
            $file->getClientOriginalExtension(),
            $this->allowedFileExtensions
        );
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ambulan::with('foto')->orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.ambulan.index', [
            'datas' => $data
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

        $foto = $data['foto'];

        $ambulan = Ambulan::create($data);

        foreach ($foto as $key => $value) {
            if ($this->isAllowedFile($value)) {
                $filePath = Storage::disk('public')->put('images/ambulan', $value);

                $foto = FotoAmbulan::create([
                    "ambulan_id" => $ambulan->id,
                    "foto" => $filePath,
                    "status" => 0
                ]);

            } else {

            }
        }



        return Redirect::route('ambulan')->with('success', 'Ambulan Berhasil Ditambahkan');
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
    public function edit($id)
    {
        $data = Ambulan::with('foto')->find($id);

        return view('admin.ambulan.update', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AmbulanUpdateRequest $request, $id)
    {
        $data = $request->validated();

        $data["status"] = 1;

        $ambulan = Ambulan::find($id);
        $ambulan->update($data);

        if(isset($data['foto'])) {
            $foto = $data['foto'];

            foreach ($foto as $key => $value) {
                if ($this->isAllowedFile($value)) {
                    $filePath = Storage::disk('public')->put('images/ambulan', $value);

                    $foto = FotoAmbulan::create([
                        "ambulan_id" => $id,
                        "foto" => $filePath,
                        "status" => 0
                    ]);

                } else {

                }
            }

            return Redirect::back()->with('success', 'Foto Berhasil Ditambah');
        }

        return Redirect::route('ambulan')->with('success', 'Ambulan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Ambulan::find($id);
        $data->delete();

        return Redirect::route('ambulan')->with('success', 'Data Berhasil Dihapus');
    }
}
