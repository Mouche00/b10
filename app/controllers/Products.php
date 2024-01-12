<?php 

class Products extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Product');
        $this->service = $this->service('ProductServiceImp');
    }

    public function display()
    {
        $product= $this->service->read();

        echo json_encode($product);
    }

    public function add()
    {

        $valid_extensions = array('jpeg', 'jpg', 'png');
        $path = APPROOT . "/../public/uploads/";

        $img = $_FILES['picture']['name'];
        $tmp = $_FILES['picture']['tmp_name'];

        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        $logo = rand(1000,1000000).$img;

        if(in_array($ext, $valid_extensions)) { 
            $path = $path.strtolower($logo); 
            if(move_uploaded_file($tmp,$path)) {
                echo "Upload Failed";
            } else {
                echo "Upload Successful";
            }
        }
        
        $product= new $this->model();   
        $product->setidProduct(uniqid(mt_rand(), true));
        $product->setPicture(strtolower($logo));
        $product->setname($_POST['name']);
        $product->setqty($_POST['qty']);
        $product->setprice($_POST['price']);
        $product->setidCategory($_POST['idCategory']);




        $this->service->create($product);
    }

    public function edit()
    {
        $product= new $this->model();
        $product->setidCategory($_POST['idCategory']);
        $product->setPicture($_POST['picture']);
        $product->setname($_POST['name']);
        $product->setqty($_POST['qty']);
        $product->setprice($_POST['price']);
        $product->setidCategory($_POST['idCategory']);

        $this->service->update($product);
    }

    public function get($id)
    {
        $product= $this->service->fetch($id);

        echo json_encode($product);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>