<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataTables\UsersDataTable;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return view('admin.users.index', [
            'datas' => DB::table('users')->paginate(15)
        ]);

    }
}
