<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mahasiswas extends BaseController
{
    public function index()
    {
        $data['content'] =  view('mahasiswa');

        return view("welcome", $data);
    }
}
