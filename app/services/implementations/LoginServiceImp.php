<?php
class LoginServiceImp implements LoginService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetch($email)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
    public function fetchAdmin($id)
    {
        $this->db->query('SELECT * FROM admin WHERE idAdmin = :idAdmin');
        $this->db->bind(':idAdmin', $id);
        return $this->db->single();
    }
    public function fetchClient($id)
    {
        $this->db->query('SELECT * FROM client WHERE idClient = :idClient');
        $this->db->bind(':idClient', $id);
        return $this->db->single();
    }
}