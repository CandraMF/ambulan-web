<?php

namespace App\Http\Controllers;

use App\Http\Requests\LayananCreateRequest;
use App\Http\Requests\LayananUpdateRequest;
use App\Models\FotoLayanan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
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
        $data = Layanan::with('foto')->orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.layanan.index', [
            'datas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LayananCreateRequest $request)
    {
        $data = $request->validated();
        $data["status"] = 1;

        $foto = $data['foto'];

        $layanan = Layanan::create($data);

        foreach ($foto as $key => $value) {
            if ($this->isAllowedFile($value)) {
                $filePath = Storage::disk('public')->put('images/layanan', $value);

                $foto = FotoLayanan::create([
                    "layanan_id" => $layanan->id,
                    "foto" => $filePath,
                    "status" => 1
                ]);

            } else {

            }
        }


        return Redirect::route('layanan')->with('success', 'Layanan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Layanan::with('foto')->find($id);

        return view('admin.layanan.update', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LayananUpdateRequest $request, $id)
    {
        $data = $request->validated();

        $data["status"] = 1;

        $layanan = Layanan::find($id);
        $layanan->update($data);

        if(isset($data['foto'])) {
            $foto = $data['foto'];

            foreach ($foto as $key => $value) {
                if ($this->isAllowedFile($value)) {
                    $filePath = Storage::disk('public')->put('images/layanan', $value);

                    $foto = FotoLayanan::create([
                        "layanan_id" => $id,
                        "foto" => $filePath,
                        "status" => 1
                    ]);

                } else {

                }
            }

            return Redirect::back()->with('success', 'Foto Berhasil Ditambah');
        }

        return Redirect::route('layanan')->with('success', 'Layanan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Layanan::find($id);
        $data->delete();

        return Redirect::route('layanan')->with('success', 'Data Berhasil Dihapus');
    }
}
