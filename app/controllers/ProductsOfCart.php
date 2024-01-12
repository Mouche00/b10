<?php

class ProductsOfCart extends Controller{
    private $model;
    private $service;
    
    public function __construct(){
        $this->model = $this->model('ProductOfCart');
        $this->service = $this->service('ProductOfCartServiceImp');
    }

    public function display($id){
        $ProductsOfCarts = $this->service->read($id);
        
        echo json_encode($ProductsOfCarts);
    }

    public function add(){
        $ProductOfCart = new $this->model();
        $ProductOfCart->setIdProduct($_POST['prodId']);
        $ProductOfCart->setIdCart($_POST['cartId']);

        $this->service->create($ProductOfCart);
        
    }

    public function edit(){
        $ProductOfCart = new $this->model();
        $ProductOfCart->setIdProduct($_POST['idProduct']);
        $ProductOfCart->setIdCart($_POST['idCart']);

        $this->service->create($ProductOfCart);
    }

    public function get($id){
        $ProductOfCart = $this->service->fetch($id);

        echo json_encode($ProductOfCart);
    }

    public function remove($id){

        $this->service->delete($id);
    }
}


?>