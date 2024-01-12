<?php
class AdminServiceImp implements AdminService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(Admin $admin)
    {
        $idAdmin = $admin->getIdUser();
        $profil = $admin->getProfil();
        $fullName = $admin->getFullNAme();
        $username = $admin->getUsername();
        $email = $admin->getEmail();
        $password = $admin->getPassword();
        $phone = $admin->getPhone();
        $adress = $admin->getAdress();


        $this->db->query('INSERT INTO user VALUES (:idAdmin, :profil, :fullName, :username, :email, :password, :phone, :adress)');
        $this->db->bind(':idAdmin', $idAdmin);
        $this->db->bind(':profil', $profil);
        $this->db->bind(':fullName', $fullName);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':phone', $phone);
        $this->db->bind(':adress', $adress);

        $this->db->execute();

        $this->db->query('INSERT INTO admin VALUES (:idAdmin)');
        $this->db->bind(':idAdmin', $idAdmin);

        return $this->db->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM user ";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update(admin $admin)
    {
        $idAdmin = $admin->getIdUser();
        $profil = $admin->getProfil();
        $fullName = $admin->getFullNAme();
        $username = $admin->getUsername();
        $email = $admin->getEmail();
        $password = $admin->getPassword();
        $phone = $admin->getPhone();
        $adress = $admin->getAdress();


        $this->db->query('UPDATE user SET fullName = :fullName, profil = :profil, username = :username, email = :email, password = :password, phone = :phone, adress = :adress WHERE idUser = :idAdmin)');
        $this->db->bind(':idAdmin', $idAdmin);
        $this->db->bind(':profil', $profil);
        $this->db->bind(':fullName', $fullName);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':phone', $phone);
        $this->db->bind(':adress', $adress);

        return $this->db->execute();
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM user WHERE idUser = :idAdmin');
        $this->db->bind(':idAdmin', $id);

        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM user WHERE idUser = :idAdmin');
        $this->db->bind(':idAdmin', $id);
        return $this->db->single();
    }
}