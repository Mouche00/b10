<?php

class Bill {
    private $idBill;
    private $date;
    private $lineItems;
    private $totalAmount;
    private $refferences;
    private $idClient;

    public function __construct () {

    }

    #getter method

    public function getIdBill () {
        return $this->idBill;
    }
    public function getDate () {
        return $this->date;
    }

    public function getLineItems () {
        return $this->lineItems;
    }

    public function getTotalAmount () {
        return $this->totalAmount;
    }

    public function getRefferences () {
        return $this->refferences;
    }

    public function getIdClient () {
        return $this->idClient;
    }

    #setter method

    public function setIdBill ($idBill) {
        $this->idBill = $idBill;
    }
    public function setDate ($date) {
        $this->date = $date;
    }

    public function setLineItems ($lineItems) {
        $this->lineItems = $lineItems;
    }

    public function setTotalAmount ($totalAmount) {
        $this->totalAmount = $totalAmount;
    }

    public function setRefferences ($refferences) {
        $this->refferences = $refferences;
    }

    public function setIdClient ($idClient) {
        $this->idClient = $idClient;
    }

}