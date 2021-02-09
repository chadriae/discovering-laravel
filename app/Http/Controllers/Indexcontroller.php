<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function returnName()
    {
        return view('index', ['name' => 'Christophe']);
    }
}
