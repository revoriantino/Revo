<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Tahapan extends ResourceController
{
    
    protected $modelName = "App\Models\TahapansModel";
    protected $format = "json";


    public function index()
    {
        $data['title'] = "Tahapans";
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("tahapan");
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
