<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTest extends Controller
{
    public function test()
    {
        return response()->json([
            array("nama"=>"Nama"),
        ]);
    }
}
