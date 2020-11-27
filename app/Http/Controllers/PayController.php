<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
      $user=auth()->user()->name;
      print "{{$user}},Successfuly paid";
    }
}
