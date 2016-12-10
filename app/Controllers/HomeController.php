<?php namespace App\Controllers;

class HomeController extends Controller{

	public function me(){
		return $this->view('me');
	}

	
}