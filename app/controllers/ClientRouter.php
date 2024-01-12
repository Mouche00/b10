<?php 

class ClientRouter extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service = $this->service('CategoryServiceImp');

    }

    public function index()
    {
        $this->view('client/home');
    }

    public function products()
    {
        $categories =  $this->service->read();

        $this->service = $this->service('ProductServiceImp');
        $products =  $this->service->read();


        $data = [
            'categories'=> $categories,
            'products'=> $products,
        ];

        $this->view('client/products', $data);
    }

    public function order()
    {
        $this->view('client/order');
    }
    public function login()
    {
        $this->view('client/login');
    }
    public function signup()
    {
        $this->view('client/signup');
    }
    public function password()
    {
        $this->view('client/password');
    }
    public function invoice()
    {
        $this->view('client/invoice');
    }
}