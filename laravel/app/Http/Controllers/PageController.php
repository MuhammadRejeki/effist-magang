<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Yajra\DataTables\Facades\Datatables;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $company = Company::withCount('user')->orderBy('user_count', 'desc')->limit(5)->get();
        $transfer = [
            'menu' => 'dashboard',
            'company' => $company
        ];
        return view('home', $transfer);
        // return view('default-template', $transfer);
    }

    public function data_users()
    {
        $model = User::where('id', '!=', "1");
        // $model = User::query();
        return Datatables::of($model)->make(true);
    }
}
