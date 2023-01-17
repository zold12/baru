<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user')->with ('user',$user);
    }

    public function profile()
    {
        return view('profile');
    }

    public function add()
    {
        return view('user-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:user|max:100',
            'password' => 'required',
            'status' => 'required',
            'role' => 'required',
        ]);

        $category = User::create($request->all());
        return redirect('user')->with('status', 'Category Data Successfully Added');
    }
}
