<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return "hello";
    }

    public function hello($a){
        dump($a);
        return "hello world".$a;
    }
}
