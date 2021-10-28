<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class Users extends ResourceController
{
    protected $modelName = 'App\Models\UserModel';
    protected $format    = 'json';
    public function index()
    {
        $data['content'] = view('user');
        return view("welcome", $data);
    }
    public function read()
    {
        return $this->respond($this->model->findAll());
    }
    public function readbyid($id=null)
    {
        //
    }
    public function post()
    {
        $data = $this->request->getJSON();
        $this->model->insert($data);
        $data->id = $this->model->getInsertID();
        return $this->respond($data);


    }
    public function put($id=null)
    {
        $data = $this->request->getJSON();
        $sresult = $this->model->update($id, $data);
        return $this->respond($sresult);


    }
    public function delete($id=null)
    {
        return $this->respond($this->model->delete($id));
    }
}
