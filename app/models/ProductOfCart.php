<?php

class ProductOfCart{
    private $idProduct;
    private $idCart;

    public function __construct(){
        
    }

    // get and set id product
    
    public function getIdProduct(){
        return $this->idProduct;
    }
    
    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }

    // get and set id client
    public function getIdCart(){
        return $this->idCart;
    }
    
    public function setIdCart($idCart){
        $this->idCart = $idCart;
    }
}



?>