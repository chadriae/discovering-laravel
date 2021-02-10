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

        $email = Users::where('username', $username)->first();

        return view('users', [
            'email' => $email
        ]);
    }

    public function getAllUsers()
    {
        $data = Users::all();

        // return $users;

        return view('users', ['users' => $data]);
    }
}
