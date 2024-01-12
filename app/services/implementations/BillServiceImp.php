


<?php

class BillServiceImp implements BillService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(Bill $Bill)
    {
        $idBill = $Bill->getIdBill();
        $date = $Bill->getDate();
        $lineItems = $Bill->getLineItems();
        $totalAmount = $Bill->getTotalAmount();
        $refferences = $Bill->getRefferences();
        $idClient = $Bill->getIdClient();

        $this->db->query('INSERT INTO Bill VALUES (:idBill, :date, :LineItems, :totalAmount, :refferences, :idClient)');
        $this->db->bind(':idBill',$idBill);
        $this->db->bind(':date',$date);
        $this->db->bind(':LineItems',$lineItems);
        $this->db->bind(':totalAmount',$totalAmount);
        $this->db->bind(':refferences',$refferences);
        $this->db->bind(':idClient',$idClient);


        return $this->db->execute();

    }

    public function read()
    {
        $sql = "SELECT * FROM Bill";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update(Bill $Bill)
    {
        $idBill = $Bill->getIdBill();
        $date = $Bill->getDate();
        $lineItems = $Bill->getLineItems();
        $totalAmount = $Bill->getTotalAmount();
        $refferences = $Bill->getRefferences();
        $idClient = $Bill->getIdClient();


        $this->db->query('UPDATE Bill SET date = :date, idClient = :idClient, refferences = :refferences, LineItems = :LinteItems, totalAmount = :totalAmounts WHERE idBill = :idBill');
        $this->db->bind(':idBill',$idBill);
        $this->db->bind('date', $date);
        $this->db->bind('LineItems',$lineItems);
        $this->db->bind('totalAmount',$totalAmount);
        $this->db->bind('refferences',$refferences);
        $this->db->bind('idClient',$idClient);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $this->db->query('DELETE FROM Bill WHERE idBill = :idBill');
        $this->db->bind('idBill',$id);

        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM Bill WHERE idBill = :idBill');
        $this->db->bind(':idBill', $id);

        return $this->db->single();
    }


}


?>