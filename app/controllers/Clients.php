<?php 

class Clients extends Controller
{
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Client');
        $this->service = $this->service('ClientServiceImp');
    }

    public function display()
    {
        $client= $this->service->read();

        echo json_encode($client);
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

        $client = new $this->model();
        $client->setIdUser(uniqid(mt_rand(), true));
        $client->setProfil(strtolower($logo));
        $client->setFullNAme($_POST['name']);
        $client->setUsername($_POST['username']);
        $client->setEmail($_POST['email']);
        $client->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $client->setPhone($_POST['phone']);
        $client->setAdress($_POST['adress']);

        $this->service->create($client);
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

        $client= new $this->model();
        $client->setIdUser($_POST['idUser']);
        $client->setProfil(strtolower($logo));
        $client->setFullNAme($_POST['nom']);
        $client->setUsername($_POST['username']);
        $client->setEmail($_POST['email']);
        $client->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $client->setPhone($_POST['phone']);
        $client->setAdress($_POST['adress']);

        $this->service->update($client);
    }

    public function get($id)
    {
        $client= $this->service->fetch($id);

        echo json_encode($client);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
}
?>