<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample(){

        // echo "<h1>Test controller</h1>";
        return view("sample-view", [

            "name"=> "laravel learner",
            "email"=> "test@gmail.com"

        ]);

    }
}
