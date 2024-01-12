<?php

interface ProductService
{
    public function create(product $product);
    public function read();
    public function update(product $product);
    public function delete($id);
    public function fetch($id);
}

?>