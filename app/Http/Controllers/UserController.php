<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }
    // フォーム表示
    public function create()
    {
        return view('users_create');
    }

    // 保存処理
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password') // 仮
        ]);

        return redirect('/users');
    }
}
