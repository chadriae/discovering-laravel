<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function getUsersEmail($username)
    {
        // return 'test';
        // $email = \DB::table('users')->where('username', $username)->first();

        $email = Users::where('username', $username)->firstOrFail();

        return view('user', ['user' => $email]);
    }

    public function getAllUsers()
    {
        $data = Users::all();
        // return view('users', compact($data));

        return view('users', ['users' => $data]);
    }
}
