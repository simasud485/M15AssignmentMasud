<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        // Declare variables
        $name ="Donal Trump";
        $age = "75";

        //create data as an associative array.
        $data = [
            'id'=>$id,
            'name'=>$name,
            'age'=>$age
        ];

        //setup the cookie
        $cookie = cookie('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true); 

        // Return the data as JSON response with status-code `200` and the cookie
        return response()->json($data, 200)->withCookie($cookie);
    }
}
