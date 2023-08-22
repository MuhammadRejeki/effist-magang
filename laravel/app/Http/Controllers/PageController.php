<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $transfer = [
            'menu' => 'dashboard'
        ];
        return view('home', $transfer);
    }
}
