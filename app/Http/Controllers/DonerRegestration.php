<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonerRegestration extends Controller
{
    public function index(){
//        return 'In doner regest';
        return view('doner.donerRegs');
    }
}
