<?php

class OrderLine {
    private $idOrderLine;
    private $qty;
    private $idProduct;
    private $idBill;
    private $idOrder;

    public function __construct(){
        
    }

    // get and set orderLine Id
    public function getIdOrderLine(){
        return $this->idOrderLine;
    }

    public function setIdOrderLine($idOrderLine){
        $this->idOrderLine = $idOrderLine;
    }

      // get and set quantity
      public function getQty(){
        return $this->qty;
    }

    public function setQty($qty){
        $this->qty = $qty;
    }

     // get and set Product id
     public function getIdProduct(){
        return $this->idProduct;
    }

    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }

      // get and set Bill id
      public function getIdBill(){
        return $this->idBill;
    }

    public function setIdBill($idBill){
        $this->idBill = $idBill;
    }

       // get and set order id
       public function getIdOrder(){
        return $this->idOrder;
    }

    public function setIdOrder($idOrder){
        $this->idOrder = $idOrder;
    }
}



?>