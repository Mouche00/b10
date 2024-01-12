<?php

class Category
{

    private $idCategory;
    private $name;
    private $description;
    private $picture;

    public function __construct()
    {



    }

    //get and set idCategory

    public function getIdCategory()
    {
        return $this->idCategory;
    }
    public function setidCategory($idCategory)
    {
        $this->idCategory = $idCategory;
    }
    //get and set name
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }

    //get and set description
    public function getdescription()
    {
        return $this->description;
    }
    public function setdescription($description)
    {
        $this->description = $description;
    }
    //get and set Picture
    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

}



