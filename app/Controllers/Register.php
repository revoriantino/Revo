<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $data['title'] = "register";
        return view("register", $data);
    }
}