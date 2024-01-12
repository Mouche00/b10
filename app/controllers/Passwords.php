<?php

class Passwords extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->service = $this->service('LoginServiceImp');
    }

    public function update($id)
    {
        $data = $id;
        $this->view('client/updatePassword', $data);
    }

    public function get($email)
    {
        $row = $this->service->fetch($email);
        echo json_encode($row);
    }
}