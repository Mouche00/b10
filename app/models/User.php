<?php

abstract class User {
    private $idUser;
    private $profil;
    private $fullNAme;
    private $username;
    private $email;
    private $password;
    private $phone;
    private $adress;

    public function __construct () {

    }

    public function getIdUser(){
		return $this->idUser;
	}

	public function setIdUser($idUser){
		$this->idUser = $idUser;
	}

	public function getProfil(){
		return $this->profil;
	}

	public function setProfil($profil){
		$this->profil = $profil;
	}

	public function getFullNAme(){
		return $this->fullNAme;
	}

	public function setFullNAme($fullNAme){
		$this->fullNAme = $fullNAme;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getAdress(){
		return $this->adress;
	}

	public function setAdress($adress){
		$this->adress = $adress;
	}

}