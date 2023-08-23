<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Company;
use App\Models\EmployementStatus;
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
        $grp_status = EmployementStatus::withCount('user')->get();
        $hub        = ['single', 'married'];
        $grp_hub    = [];
        foreach ($hub as $l) {
            $grp_hub[] = [
                'name' => $l,
                'jumlah' => User::where('marital_status', $l)->count()
            ];
        };
        $gender        = ['male', 'female'];
        $grp_gender    = [];
        foreach ($gender as $l) {
            $grp_gender[] = [
                'name' => $l,
                'jumlah' => User::where('gender', $l)->count()
            ];
        };
        $transfer = [
            'menu' => 'dashboard',
            'company' => $company,
            'news' => $news,
            'grp_agama' => collect($grp_agama),
            'grp_status' => $grp_status,
            'grp_gender' => $grp_gender,
            'grp_hub' => $grp_hub

        ];
        return view('home', $transfer);
    }

    public function data_users()
    {
        $model = User::where('id', '!=', "1");
        // $model = User::query();
        return Datatables::of($model)->make(true);
    }



    public function view(Request $request, $id)
    {
        $transfer = [
            'data' => News::find($id),
            'menu' => 'dashboard'
        ];
        return view('news_view', $transfer);
    }
}
