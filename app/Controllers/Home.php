<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Home";
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = "";
        return view("layout/welcome", $data);
    }
}
