<?php


interface LoginService
{
    public function fetch($email);
    public function fetchAdmin($id);
    public function fetchClient($id);
}


?>