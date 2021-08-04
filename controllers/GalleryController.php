<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Restaurant.php';

class GalleryController
{
	
	function index()
	{
		$obj = new Plats;
	    $plats=$obj->getAll();
		$obj = new Restaurant;
		$restaurants=$obj->getAll();
		
		
		require_once 'views/user/gallery.php';
	}
}