<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $transfer = [
            'menu' => 'users'
        ];
        return view('users', $transfer);
    }
}
