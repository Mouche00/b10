<?php

interface BillService
 {

    public function create(Bill $Bill);
    public function read();
    public function update(Bill $Bill);
    public function delete($id);
    public function fetch($id);
}


?>