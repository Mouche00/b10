<?php 

class Admins extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Admin');
        $this->service = $this->service('AdminServiceImp');
    }

    public function display()
    {
        $admin= $this->service->read();

        echo json_encode($admin);
    }

    public function add()
    {   

        $valid_extensions = array('jpeg', 'jpg', 'png');
        $path = APPROOT . "/../public/uploads/";

        $img = $_FILES['logo']['name'];
        $tmp = $_FILES['logo']['tmp_name'];

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

        $admin = new $this->model();
        $admin->setIdUser(uniqid(mt_rand(), true));
        $admin->setProfil(strtolower($logo));
        $admin->setFullNAme($_POST['name']);
        $admin->setUsername($_POST['username']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $admin->setPhone($_POST['phone']);
        $admin->setAdress($_POST['adress']);

        $this->service->create($admin);
    }

    public function edit()
    {

        $valid_extensions = array('jpeg', 'jpg', 'png');
        $path = APPROOT . "/../public/uploads/";

        $img = $_FILES['logo']['name'];
        $tmp = $_FILES['logo']['tmp_name'];

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

        $admin= new $this->model();
        $admin->setIdUser($_POST['idUser']);
        $admin->setProfil(strtolower($logo));
        $admin->setFullNAme($_POST['name']);
        $admin->setUsername($_POST['username']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $admin->setPhone($_POST['phone']);
        $admin->setAdress($_POST['adress']);

        $this->service->update($admin);
    }

    public function get($id)
    {
        $admin= $this->service->fetch($id);

        echo json_encode($admin);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>