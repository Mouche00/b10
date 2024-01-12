<?php

interface OrderServiceInterface {
    public function create(order $order);
    public function read();
    public function update(order $order);
    public function delete($id);
    public function fetch($id);
}

?>