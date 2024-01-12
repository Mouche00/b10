<?php

interface CategoryService
{
    public function create(category $category);
    public function read();
    public function update(category $category);
    public function delete($id);
    public function fetch($id);
}

?>