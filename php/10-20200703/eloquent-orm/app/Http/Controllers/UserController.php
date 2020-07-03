<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        // $products = DB::table('products')->get();
        // dd($users);
        
        return view(
            'users.index',
            [
            'tatCaNguoiDung' => $users,
            // 'products' => $products
            ]
        );
    }
}