<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestContr extends Controller
{
    public function test($name)
    {
        $var = $name;
        return view('asd', array('test' => $var));
    }
}
