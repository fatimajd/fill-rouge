<?php

/**
 * 
 */
require_once 'models/Contact.php';
class ContactController
{
	
	function index()
	{
		require_once 'views/user/contact.php';
	}
	function afficher()
	{
		$obj = new Contact;
	    $messages=$obj->getAll();
		require_once 'views/admin/NosMessage.php';
	}
	public function save(){

		$obj = new Contact;
		$obj->nom = $_POST["nom"];
		$obj->sujet = $_POST["sujet"];
		$obj->message = $_POST["message"];
		
		$obj->insert();
		header("location:http://localhost/FileRouge/FileRouge/Contact/index");
	}
	public function delete($id){
		$obj = new Contact;
		$obj->deleteone($id);
		header("location:http://localhost/FileRouge/FileRouge/Contact/afficher");
	}
}