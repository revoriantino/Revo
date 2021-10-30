<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Topik extends ResourceController
{
    protected $modelName = "App\Models\TopiksModel";
    protected $format = "json";


    public function index()
    {
        $data['title'] = "Topiks";
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("topik");
        return view("layout/welcome", $data);
    }
    
    public function read()
    {
        $data = $this->model->select();
        return $this->respond($data);
    }

    public function post()
    {
        try {
            $data = $this->request->getJSON();
            $this->model->save($data);
            $data->id = $this->model->getInsertID();
            return $this->respond($data);
            //code...
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
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
