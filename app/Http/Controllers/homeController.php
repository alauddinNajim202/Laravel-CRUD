<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    public function store(Request $request){
        $password =  Hash::make($request->password);
        echo $password;
    }
}
