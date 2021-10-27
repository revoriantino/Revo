<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Matakuliahs extends BaseController
{
    public function index()
    {
        $data['content'] =  view('matakuliah');
        return view("welcome", $data);
    }
}
