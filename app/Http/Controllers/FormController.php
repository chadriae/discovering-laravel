<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;

class FormController extends Controller
{
    // create form
    public function createUserForm(Request $request)
    {
        return view('form');
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

        // encrypt password
        // $this->bcrypt(['password']);

        // store data in database
        Form::create($request->all());

        return back()->with('success', 'User created successfully.');
    }
}
