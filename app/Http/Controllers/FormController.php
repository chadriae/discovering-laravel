<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function loadForm()
    {
        return view('form');
    }

    public function getData(Request $request)

    {
        $validated = $request->validate([
            'first-name' => 'bail|required|unique:posts|max:255'
        ]);

        return $request->input();
    }
}
