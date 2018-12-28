<?php

namespace App\Http\Controllers;

use App\Moxing;

class KongzhiqiController extends  Controller
{
    public function index()
    {
        return Moxing::a();
        /*return view('ceshi/ceshi',
            ['name'=>'zhangsan','age'=>18]);*/
        //return $id;
        //return route('kzq');
    }

}