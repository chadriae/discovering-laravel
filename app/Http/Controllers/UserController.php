<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = Users::all();
        return view('users', compact('users'));
    }

    public function getUsersInfo($username)
    {
        $user = Users::where('username', $username)->firstOrFail();
        return view('user', compact('user'));
    }

    public function deleteUser($username)
    {
        $user = Users::where('username', $username)->firstOrFail();
        $user->delete();
        return back()->with('success', "User deleted successfully.");
    }
}
