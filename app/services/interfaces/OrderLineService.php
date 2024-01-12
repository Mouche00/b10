<?php


interface OrderLineService
{
    public function create(OrderLine $OrderLine);
    public function read();
    public function update(OrderLine $OrderLine);
    public function delete($id);
    public function fetch($id);
}


?>