<?php namespace App\Controllers;

use Philo\Blade\Blade;
use DateTime;

class Controller{

	private $view_dir;
	private $cache_dir;
	private $blade;

	public function __construct(){
		$this->view_dir = base_dir().'/views';
		$this->cache_dir = base_dir().'/cache';
		$this->blade = new Blade($this->view_dir, $this->cache_dir);
		$this->uri = $this->getURI();
	}

	public function view($view, $data=[]){
		$data = array_merge($data, $this->getHelpers());
		return $this->blade->view()->make($view, $data);
	}

	private function getHelpers(){
		return [
			'_url' => $this->uri,
			'_page' => $this->getPage(),
			'years_diff' => $this->getYearsExperience()
		];
	}

	private function getURI(){
		$pos = strpos($_SERVER['REQUEST_URI'], "?");
		if($pos > -1){
			return substr($_SERVER['REQUEST_URI'], 0, $pos);
		}else{
			return $_SERVER['REQUEST_URI'];
		}
	}

	private function getPage(){
		switch($this->uri){
			case "/":
			case "/projects":
				return "projects";
			case "/me":
				return "me";
			case "/contact":
				return "contact";
		}
	}

	private function getYearsExperience(){
		$Start = new DateTime('2013-12-01');
		$End = new DateTime();
		return $End->diff($Start)->y;
	}

}