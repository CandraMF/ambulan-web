<?php

namespace App\Http\Controllers;

use App\Models\Ambulan;
use App\Models\Layanan;
use App\Models\Setting;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {

        $layanan = Layanan::with('foto')->whereStatus(1)->get();
        $ambulan = Ambulan::with('foto')->orderBy('nama', 'desc')->whereStatus(1)->get();
        $setting = Setting::first();

        return view('landing', ['layanan' => $layanan, 'ambulan' => $ambulan, 'setting' => $setting]);
    }
}
