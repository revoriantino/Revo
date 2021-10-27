<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titel' => 'Home'
        ];
        return view('welcome',$data);
    }
}
