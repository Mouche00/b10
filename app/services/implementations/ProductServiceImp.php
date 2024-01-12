<?php
class ProductServiceImp implements ProductService
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(product $product)
    {
        $idProduct = $product->getidProduct();
        $name = $product->getname();
        $picture = $product->getpicture();
        $qty = $product->getqty();
        $price = $product->getprice();
        $idCategory = $product->getIdCategory();


        $this->db->query('INSERT INTO product VALUES (:idProduct,:picture, :name,:qty,:price,:idCategory)');
        $this->db->bind(':idProduct', $idProduct);
        $this->db->bind(':name', $name);
        $this->db->bind(':picture', $picture);
        $this->db->bind(':qty', $qty);
        $this->db->bind(':price', $price);
        $this->db->bind(':idCategory', $idCategory);




        return $this->db->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM product";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function update(product $product)
    {
        $idProduct = $product->getidProduct();
        $name = $product->getname();
        $picture = $product->getpicture();
        $qty = $product->getqty();
        $price = $product->getprice();
        $idCategory = $product->getIdCategory();

        $this->db->query('UPDATE product SET name = :name, picture = :picture, qty = :qty, price = :price , idCategory = :idCategory  WHERE idProduct = :idProduct');
        $this->db->bind(':idProduct', $idProduct);
        $this->db->bind(':name', $name);
        $this->db->bind(':picture', $picture);
        $this->db->bind(':qty', $qty);
        $this->db->bind(':price', $price);
        $this->db->bind(':idCategory', $idCategory);

        return $this->db->execute();
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM product WHERE idProduct = :idProduct');
        $this->db->bind(':idProduct', $id);

        return $this->db->execute();
    }

    public function fetch($id)
    {
        $this->db->query('SELECT * FROM product WHERE idProduct = :idProduct');
        $this->db->bind(':idProduct', $id);
        return $this->db->single();
    }
}