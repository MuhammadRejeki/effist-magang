<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Company;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;

class CompanyController extends Controller
{
    public function index()
    {
        $transfer = [
            'menu' => 'company'
        ];
        return view('company', $transfer);
    }

    public function list()
    {
        $model = Company::query();
        return Datatables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a onclick="$.fn.edit(' . $row->id . ')" class="btn btn-sm btn-info mb-1"><i class="bi bi-pencil"></i></a>';
                $btn = $btn . ' <a onclick="$.fn.delete(' . $row->id . ')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function data(Request $request)
    {
        $output = [
            'status' => '1',
            'data' => Company::find($request->post('id'))
        ];
        return json_encode($output);
    }

    public function save_data(Request $request)
    {

        Company::where('id', $request->post('id'))->update([
            'name' => $request->post('name')
        ]);
        $output = [
            'status' => '1',
            'error' => ''
        ];
        return json_encode($output);
    }

    public function hapus(Request $request)
    {

        Company::where('id', $request->post('id'))->update([
            'deleted_at' => Date('Y-m-d H:i:s')
        ]);
        $output = [
            'status' => '1',
            'error' => ''
        ];
        return json_encode($output);
    }

    public function tambah(Request $request)
    {

        Company::create([
            'name' => $request->post('name')
        ]);

        return back()->with('success', 'Data berhasil ditambahkan.');
    }
}
