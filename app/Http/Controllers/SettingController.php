<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::first();

        return view('admin.setting.index', ['data' => $data]);
    }

    public function store(Request $request)
    {

        $post = $request->all();

        if(Setting::exists()) {
            $data = Setting::first();

            $data->update($request->all());
        } else {
            $data = Setting::create($request->all());
        }

        return Redirect::route('setting')->with('success', 'Data Berhasil di Update');
    }
}
