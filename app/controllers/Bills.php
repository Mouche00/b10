

 <?php

 class Bills extends Controller
 {
    private $model;
    private $service;

    public function __construct()
    {
        $this->model = $this->model('Bill');
        $this->service = $this->service('BillServiceImp');
    }


    public function read()
    {
        $Bills = $this->service->read();

        echo json_encode($Bills);
    }

    public function add()
    {
        $Bill = new $this->model();
        $Bill->setIdBill(uniqid(mt_rand(),true));
        $Bill->setDate($_POST['date']);
        $Bill->setLineItems($_POST['LineItems']);
        $Bill->setTotalAmount($_POST['TotalAmount']);
        $Bill->setRefferences($_POST['refferences']);
        $Bill->setIdClient($_POST['idClient']);


        $this->service->create($Bill);
    }


    public function edit()
    {
        $Bill = new $this->model();
        $Bill->setIdBill($_POST['idBill']);
        $Bill->setDate($_POST['date']);
        $Bill->setLineItems($_POST['LineItems']);
        $Bill->setTotalAmount($_POST['TotalAmounts']);
        $Bill->setRefferences($_POST['refferences']);
        $Bill->setIdClient($_POST['idClient']);

        $this->service->update($Bill);
    }


    public function get($id)
    {
        $Bills = $this->service->fetch($id);


        echo json_encode($Bills);
    }


    public function remove($id)
    {
        $this->service->delete($id);
    }

    public function remove($id)
    {
        $this->service->delete($id);
    }
 }
 ?>