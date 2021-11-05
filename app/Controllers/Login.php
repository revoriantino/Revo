<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Login extends ResourceController
{
    protected $session;
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('login', $data);
    }

    public function login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/login')->withInput()->with('validation', $validation);
        } else {
            $rest = new Rest();
            $username = $this->request->getPost('username');
            $pass = $this->request->getPost('password');
            $data = $rest->login($username, $pass);
            $id = $data->data->id_mahasiswa;
            $result = $rest->check("biodata", "GET", "param=id_mahasiswa&value='$id'");
            $this->session->set((array)$result->data[0]);
            if ($data->data->role == "Mahasiswa") {
                return redirect()->to(base_url('mahasiswa/home'));
            } else {
                return redirect()->to(base_url('admin/home'));
            }
            return $this->respond($data);
        }
    }
}