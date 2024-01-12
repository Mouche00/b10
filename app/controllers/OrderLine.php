<?php

class OrderLines extends Controller {
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('ProductOfCart');
        $this->service = $this->service('ProductOfCartServiceImp');
    }

    public function read(){
        $OrderLines = $this->service->read();

        echo json_encode($OrderLines);
    }

    public function add(){
        $orderline = new $this->model();
        $orderline->setIdOrderLine(uniqid(mt_rand(), true));
        $orderline->setQty($_POST['qty']);
        $orderline->setIdProduct($_POST['idProduct']);
        $orderline->setIdBill($_POST['idBill']);
        $orderline->setIdOrder($_POST['idOrder']);

        $this->service->create($orderline);
    }

    public function edit(){
        $orderline = new $this->model();
        $orderline->setIdOrderLine($_POST['idOrderLine']);
        $orderline->setQty($_POST['qty']);
        $orderline->setIdProduct($_POST['idProduct']);
        $orderline->setIdBill($_POST['idBill']);
        $orderline->setIdOrder($_POST['idOrder']);

        $this->service->update($orderline);
    }
     
    public function get($id){

        $orderline = $this->service->fetch($id);

        echo json_encode($orderline);

    }

    public function remove($id){
        $this->service->delete($id);
    }
}



?>