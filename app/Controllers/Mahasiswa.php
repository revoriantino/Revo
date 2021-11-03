<?php

namespace App\Controllers;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{
    protected $modelName = "App\Models\MahasiswaModel";
    protected $format = "json";

    protected $rest;

    function __construct() {
        $this->rest = new Rest();
    }

    public function index()
    {
        $mahasiswaskripsi = $this->rest->callRest('mahasiswaskripsi');

        $data['title'] = "Mahasiswas";
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("mahasiswa");
        $data['mahasiswaskripsi']= $mahasiswaskripsi;
        return view("layout/welcome", $data);
    }
    
    public function read()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }

    public function post()
    {
        $data = $this->request->getJSON();
        $this->model->insert($data);
        $data->id = $this->model->getInsertID();
        return $this->respond($data);
    }
    public function put($id = null)
    {
        $data = $this->request->getJSON();
        try {
            $result = $this->model->update($id, $data);
            return $this->respond($result);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
    
    public function delete($id = null)
    {
        try {
            return $this->respond($this->model->delete($id));
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
        
    }
}
