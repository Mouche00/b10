<?php

interface ClientService
{
    public function create(Client $client);
    public function read();
    public function update(Client $client);
    public function delete($id);
    public function fetch($id);
}

?>