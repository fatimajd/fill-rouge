<?php

/**
 * 
 */
require_once 'models/Plats.php';
class Home
{
	
	function index($page)
	{
		$obj = new Plats;
	    $bestseller=$obj->bestseller();
		$obj = new Plats;
	    $dheure=$obj->derniereheure();

		require __DIR__."/../views/user/".$page.'.php';
	}
}