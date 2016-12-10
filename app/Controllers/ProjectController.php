<?php namespace App\Controllers;

class ProjectController extends Controller{

	public function index(){
		return $this->view('home', ['projects' => $this->getProjects()]);
	}

	public function zappem(){

		return $this->view('projects/view', ['project' => $this->getZappem()]);

	}

	private function getZappem(){
		return [
			'title' => 'Zappem',
			'subtitle' => 'A bug tracker where developers can use their own database'
		];
	}

	private function getProjects(){
		return [
			[
				'title' => 'Zappem',
				'description' => 'A bug tracker where developers can use their own database',
				'long_desc' => 'Me and my team needed a service like <a href="https://honeybadger.io" target="_blank">Honeybadger</a> or <a href="https://rollbar.com" target="_blank">Rollbar</a> but these solutions were too expensive. We already had a server running MongoDB, so I built <a href="https://zappem.xyz">Zappem</a>. Errors from your applications get sent to Zappem and stored in your own database.',
				'link' => 'zappem',
				'skills' => [
						'Node JS',
						'MongoDB',
						'WebSockets'
					],
				'img' => 'zappem-thumb.jpg'
			],
			[
				'title' => 'Aeromap',
				'description' => 'An HTML5 web-app for seeing where you are during a flight',
				'long_desc' => 'Unlike long-haul flights, most short-haul flights don\'t provide information about where you are on a map. But I noticed that even with Airplane Mode enabled, my phone still received a GPS signal. Therefore I built Aeromap which plots your GPS location on an offline GeoJSON map.',
				'link' => 'aeromap',
				'skills' => [
						'JavaScript',
						'GeoJSON'
					]
			],
			[
				'title' => 'GitBar',
				'description' => 'A toolbar for quickly switching branches through the browser',
				'long_desc' => 'I made GitBar to make my workflow easier. I usually develop on my local machine and push to a test environment before pushing to production, but I found that I frequently needed to checkout different feature branches on the test server and SSHing in was becoming too time consuming.',
				'link' => 'gitbar',
				'skills' => [
						'Laravel',
						'Composer',
						'SSH'
					]
			],
			[
				'title' => 'Queue Office',
				'description' => 'A tool for managing multiple RabbitMQ services',
				'long_desc' => 'At my current job we rely quite heavily on <a href="https://www.rabbitmq.com/">RabbitMQ</a> - my job involves keeping an eye on 8 seperate instances. Before, this meant having 8 terminal windows open and periodically checking for any failed jobs. Now, I don\'t need any windows open as I get a notification if a job fails in any queue.',
				'link' => 'queue-office',
				'skills' => [
						'Node',
						'RabbitMQ',
						'Laravel',
						'WebSockets'
					]
			]
		];
	}
}