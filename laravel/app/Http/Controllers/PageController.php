<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;

class PageController extends Controller
{
    public function index()
    {
        $company    = Company::withCount('user')->orderBy('user_count', 'desc')->limit(5)->get();
        $news       = News::orderBy('created_at', 'desc')->limit(5)->get();
        $agama      = ['islam', 'kristen', 'protestan', 'katholik', 'budha', 'hindu'];
        $grp_agama  = [];
        foreach ($agama as $l) {
            $grp_agama[] = [
                'name' => $l,
                'jumlah' => User::where('religion', $l)->count()
            ];
        };
        // echo "<pre>";
        // print_r($grp_agama);
        // exit;
        $transfer = [
            'menu' => 'dashboard',
            'company' => $company,
            'news' => $news,
            'grp_agama' => collect($grp_agama),

        ];
        return view('home', $transfer);
    }

    public function data_users()
    {
        $model = User::where('id', '!=', "1");
        // $model = User::query();
        return Datatables::of($model)->make(true);
    }
}
