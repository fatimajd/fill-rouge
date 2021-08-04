<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Restaurant.php';
class RestaurantController
{
	
	function accueil(){
		require_once 'views/restaurant/RestaurantPage.php';
	}
	function index()
	{
		$obj = new Restaurant;
	    $restaurants=$obj->getAll();
		require_once 'views/admin/NosRestaurant.php';
	}
	public function save(){

		$obj = new Restaurant;
		$obj->nom = $_POST["nom"];
		$obj->adresse = $_POST["adresse"];
		$obj->specialite = $_POST["specialite"];
		$obj->ville = $_POST["ville"];
		$obj->image=$_POST["image"];
		$obj->email = $_POST["email"];
		$obj->motdepasse = $_POST["motdepasse"];
		$obj->insert();
		header("location:http://localhost/FileRouge/FileRouge/Restaurant/index");
	}
	function edit($id){
		$obj = new Restaurant;
		$restaurants = $obj->edit($id);
		require_once 'views/admin/updateRestaurant.php';
	}
	 
	 public function update($id){
	 	
		$obj = new Restaurant;
		$obj->nom = $_POST["nom"];
		$obj->adresse = $_POST["adresse"];
		$obj->specialite = $_POST["specialite"];
		$obj->ville = $_POST["ville"];
		$obj->image=$_POST["image"];
		$obj->updateone($id);
		header("location:http://localhost/FileRouge/FileRouge/Restaurant/index");
	}
	public function delete($id){
		$obj = new Restaurant;
		$obj->deleteone($id);
		header("location:http://localhost/FileRouge/FileRouge/Restaurant/index");
	}

}