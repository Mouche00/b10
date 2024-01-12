

<?php

class Cart
{
    private $idcart;



    public function __construct()
{


}



    public function getIdcart()
    {
        return $this->idcart;
    }

    /**
     * Set the value of idcart
     *
     * @return  self
     */ 
    public function setIdcart($idcart)
    {
        $this->idcart = $idcart;

        return $this;
    }
}






?>