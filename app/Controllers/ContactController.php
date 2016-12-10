<?php namespace App\Controllers;

class ContactController extends Controller{

	public function index(){
		return $this->view('contact');
	}

	public function store(){
		dd($_POST);
		$Validate = $this->validate();
	}

	private function validate($data){

	}
}
