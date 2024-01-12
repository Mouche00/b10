<?php

class Login extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->service = $this->service('LoginServiceImp');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $row = $this->service->fetch($email);
        $adminCheck = $this->service->fetchAdmin($row->idUser);
        $clientCheck = $this->service->fetchClient($row->idUser);

        if ($row && password_verify($password, $row->password)){

            $_SESSION['id'] = $row->idUser;
            $_SESSION['username'] = $row->username;

            if($adminCheck){
                $_SESSION['admin'] = 1;
                echo "1";

            } else if($clientCheck){
                echo "0";

            }
        }
    }

    public function logout() 
    {
        session_unset();
        // session_destroy();
    }
}