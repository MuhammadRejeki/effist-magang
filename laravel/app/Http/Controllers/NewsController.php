<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;

class NewsController extends Controller
{
    public function index()
    {
        $transfer = [
            'menu' => 'news'
        ];
        return view('news', $transfer);
    }

    public function list()
    {
        $model = News::query();
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
            'data' => News::find($request->post('id'))
        ];
        return json_encode($output);
    }

    public function save_data(Request $request)
    {

        News::where('id', $request->post('id'))->update([
            'title' => $request->post('title'),
            'content' => $request->post('content')
        ]);
        $output = [
            'status' => '1',
            'error' => ''
        ];
        return json_encode($output);
    }

    public function hapus(Request $request)
    {

        News::where('id', $request->post('id'))->update([
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

        News::create([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
            'user_id' => auth()->user()->id
        ]);

        return back()->with('success', 'Data berhasil ditambahkan.');
    }
}
