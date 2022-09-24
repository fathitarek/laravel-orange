<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $x=5;
        $arr=[1,"hassan",4];
        // return $x;
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        return view('read_index')->with('x',$x)->with('arr',$arr)->with('age',$age);
    }
}
