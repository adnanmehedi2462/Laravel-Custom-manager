<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\phone;
use App\user;


class InfoController extends Controller
{
    public function index(){
    $info=info::all();

      return view('number',compact('info'));

    }
}
