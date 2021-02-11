<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use App\Models\Form;
use DB;
use App\Models\User;


class FormController extends Controller
{
    // create form
    public function createUserForm()
    {
        return view('register');
    }

    // store form data in database
    public function validateForm(Request $request)
    {
        // form validate
        $this->validate(
            $request,
            [
                'username' => 'required|min:4|max:12',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password'
            ],
            [
                'username.required' => 'A username is required.',
                'email.required' => 'A valid email is required.',
                'password.required' => 'A password is required.',
                'confirm_password.same' => "Passwords don't match."
            ]
        );
    }

    public function addUser(Request $request)
    {
        // \DB::table('users')->insert([
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return back()->with('success', "User created successfully.");
    }
}
