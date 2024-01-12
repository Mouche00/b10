<?php
class OrderLineServiceImp implements OrderLineService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(OrderLine $OrderLine)
    {
        $idOrderLine = $OrderLine->getIdOrderLine();
        $qty = $OrderLine->getQty();
        $idProduct = $OrderLine->getIdProduct();
        $idBill = $OrderLine->getIdBill();
        $idOrder = $OrderLine->getIdOrder();


        $this->db->query('INSERT INTO orderline VALUES (:idOrderLine, :qty, :idProduct,:idBill,:idOrder)');
        $this->db->bind(':idOrderLine', $idOrderLine);
        $this->db->bind(':qty', $qty);
        $this->db->bind(':idProduct', $idProduct);
        $this->db->bind(':idBill', $idBill);
        $this->db->bind(':idOrder', $idOrder);

        
        return $this->db->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM orderline";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update(OrderLine $OrderLine)
    {
        $idOrderLine = $OrderLine->getIdOrderLine();
        $qty = $OrderLine->getQty();
        $idProduct = $OrderLine->getIdProduct();
        $idBill = $OrderLine->getIdBill();
        $idOrder = $OrderLine->getIdOrder();

        $this->db->query('UPDATE orderline SET  qty = :qty, idProduct = :idProduct ,idBill = :idBill , idOrder = :idOrder WHERE idOrderLine = :idOrderLine');
        $this->db->bind(':idOrderLine', $idOrderLine);
        $this->db->bind(':qty', $qty);
        $this->db->bind(':idProduct', $idProduct);
        $this->db->bind(':idBill', $idBill);
        $this->db->bind(':idOrder', $idOrder);
        
        return $this->db->execute();
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM orderline WHERE idOrderLine = :idOrderLine');
        $this->db->bind(':idOrderLine', $id);
        
        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM orderline WHERE idOrderLine = :idOrderLine');
        $this->db->bind(':idOrderLine', $id);
        return $this->db->single();
    }
}