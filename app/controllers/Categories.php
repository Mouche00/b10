<?php 

class Categories extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Category');
        $this->service = $this->service('CategoryServiceImp');
    }

    public function display()
    {
        $categories= $this->service->read();

        echo json_encode($categories);
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
        $category= new $this->model();
        $category->setidCategory(uniqid(mt_rand(), true));
       
        $category->setPicture(strtolower($logo));
        $category->setname($_POST['name']);
        $category->setdescription($_POST['description']);
       

        $this->service->create($category);
    }

    public function edit()
    {
        $category= new $this->model();
        $category->setidCategory($_POST['idCategory']);
        $category->setname($_POST['name']);
        $category->setdescription($_POST['description']);
        $category->setpicture($_POST['picture']);

        $this->service->update($category);
    }

    public function get($id)
    {
        $category= $this->service->fetch($id);

        echo json_encode($category);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>