<?php namespace App\Controllers;

class DevflowController extends Controller{

	public function apiCallback(){
		return $this->view('devflow.callback', ['code' => $_REQUEST['code']]);
	}

}
