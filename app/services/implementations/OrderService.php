<?php

class OrderService implements OrderServiceInterface {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function create (Order $order) {
        $idOrder = $order->getIdOrder();
        $idClient = $order->getIdClient();

        $this->db->query("INSERT INTO order VALUES (:idOrder, :idClient)");
        $this->db->bind(":idOrder", $idOrder);
        $this->db->bind(":idClient", $idClient);

        return $this->db->execute();
    }

    public function read () {
        $sql = "SELECT * FROM order" ;

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update (Order $order) {
        $idOrder = $order->getIdOrder();
        $idClient = $order->getIdClient();
        
        $this->db->query("UPDATE order SET idClient = :idClient WHERE idOrder = :idOrder");
        $this->db->bind(":idOrder", $idOrder);
        $this->db->bind(":idClient", $idClient);

        return $this->db->execute();
    }

    public function delete($id) {
        $this->db->query("DELETE FROM order WHERE idOrder = :idOrder");
        $this->db->bind(":idOrder", $id);

        return $this->db->execute();
    }

    public function fetch($id) {
        $this->db->query("SELECT * FROM order WHERE idOrder = :idOrder");
        $this->db->bind(":idOrder", $id);

        return $this->db->single();
    }

}