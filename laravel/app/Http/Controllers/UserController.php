<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\Datatables;

class UserController extends Controller
{
    public function index()
    {
        $transfer = [
            'menu' => 'users'
        ];
        return view('users', $transfer);
    }

    public function list()
    {
        $model = User::query();
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

    public function hapus(Request $request)
    {

        User::where('id', $request->post('id'))->update([
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

        User::create([
            'company_id' => '1',
            'employement_status_id' => '1',
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'gender' => $request->post('gender'),
            'marital_status' => $request->post('marital_status'),
            'religion' => $request->post('religion')
        ]);

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function data(Request $request)
    {
        $output = [
            'status' => '1',
            'data' => User::find($request->post('id'))
        ];
        return json_encode($output);
    }

    public function save_data(Request $request)
    {

        User::where('id', $request->post('id'))->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'gender' => $request->post('gender'),
            'marital_status' => $request->post('marital_status'),
            'religion' => $request->post('religion')
        ]);
        $output = [
            'status' => '1',
            'error' => ''
        ];
        return json_encode($output);
    }
}
