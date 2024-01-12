<?php
class CategoryServiceImp implements CategoryService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(category $category)
    {
        $idCategory = $category->getIdCategory();
        $name = $category->getname();
        $description = $category->getdescription();
        $picture = $category->getPicture();


        $this->db->query('INSERT INTO category VALUES (:idCategory, :name, :description,:picture)');
        $this->db->bind(':idCategory', $idCategory);
        $this->db->bind(':name', $name);
        $this->db->bind(':description', $description);
        $this->db->bind(':picture', $picture);

        
        return $this->db->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM category";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update(category $category)
    {
        $idCategory = $category->getIdCategory();
        $name = $category->getname();
        $description = $category->getdescription();
        $picture = $category->getPicture();


        $this->db->query('UPDATE category SET name = :name, description = :description, picture = :picture WHERE idCategory = :idCategory');
        $this->db->bind(':idCategory', $idCategory);
        $this->db->bind(':name', $name);
        $this->db->bind(':description', $description);
        $this->db->bind(':picture', $picture);
        
        return $this->db->execute();
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM category WHERE idCategory = :idCategory');
        $this->db->bind(':idCategory', $id);
        
        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM category WHERE idCategory = :idCategory');
        $this->db->bind(':idCategory', $id);
        return $this->db->single();
    }
}