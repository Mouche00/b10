<?php
class ClientServiceImp implements ClientService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(Client $client)
    {
        $idClient = $client->getIdUser();
        $profil = $client->getProfil();
        $fullName = $client->getFullNAme();
        $username = $client->getUsername();
        $email = $client->getEmail();
        $password = $client->getPassword();
        $phone = $client->getPhone();
        $adress = $client->getAdress();

        // $idClient = "1";
        // $profil = "1";
        // $fullName = "1";
        // $username = "1";
        // $email = "1";
        // $password = "1";
        // $phone = "1";
        // $adress = "1";


        $this->db->query('INSERT INTO user VALUES (:idClient, :profil, :fullName, :username, :email, :password, :phone, :adress)');
        $this->db->bind(':idClient', $idClient);
        $this->db->bind(':profil', $profil);
        $this->db->bind(':fullName', $fullName);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':phone', $phone);
        $this->db->bind(':adress', $adress);

        $this->db->execute();

        $this->db->query('INSERT INTO client VALUES (:idClient)');
        $this->db->bind(':idClient', $idClient);

        $this->db->execute();

        $this->db->query('INSERT INTO cart VALUES (:idClient)');
        $this->db->bind(':idClient', $idClient);

        return $this->db->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM user";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update(Client $client)
    {
        $idClient = $client->getIdUser();
        $profil = $client->getProfil();
        $fullName = $client->getFullNAme();
        $username = $client->getUsername();
        $email = $client->getEmail();
        $password = $client->getPassword();
        $phone = $client->getPhone();
        $adress = $client->getAdress();


        $this->db->query('UPDATE user SET profil = :profil, fullName = :fullName, username = :username, email = :email, password = :password, phone = :phone, adress = :adress WHERE idUser = :idClient)');
        $this->db->bind(':idClient', $idClient);
        $this->db->bind(':profil', $profil);
        $this->db->bind(':fullName', $fullName);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':phone', $phone);

        return $this->db->execute();
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM user WHERE idUser = :idClient');
        $this->db->bind(':idClient', $id);

        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM user WHERE idUser = :idClient');
        $this->db->bind(':idClient', $id);
        return $this->db->single();
    }
}