<?php

interface AdminService
{
    public function create(Admin $admin);
    public function read();
    public function update(Admin $admin);
    public function delete($id);
    public function fetch($id);
}

?>