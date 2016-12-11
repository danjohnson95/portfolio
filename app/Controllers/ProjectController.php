<?php namespace App\Controllers;

class ProjectController extends Controller{

	public function index(){
		return $this->view('home', ['projects' => $this->getProjects()]);
	}

	public function zappem(){
		return $this->view('projects/view', ['project' => $this->getZappem()]);
	}

	public function aeromap(){
		return $this->view('projects/view', ['project' => $this->getAeromap()]);
	}

	private function getZappem(){
		return [
			'title' => 'Zappem',
			'subtitle' => 'A bug tracker where developers can use their own database',
			'img' => 'zappem.jpg',
			'links' => 
				[
					'GitHub' => 'https://github.com/danjohnson95/zappem',
					'Website' => 'https://zappem.xyz',
					'Demo' => 'http://demo.zappem.xyz'
				],
			'body' => "	<p>
				Zappem is built in JS and runs on Node, so it can be installed by running <code>npm install -g zappem</code>.
			</p>
			<p>
				When running for the first time, the user will need to enter their MongoDB details - this could be their own MongoDB server or a hosted one from a service such as <a href=''>mLab</a>.
			</p>
			<p>
				Once successfully connected to the user's database, they will be able to create their first project. With this, they use one of the connector libraries I have built to connect their application to Zappem.
			</p>
			<ul>
				<li>
					<a href='https://github.com/danjohnson95/zappem-laravel' target='_blank'>Laravel Connector</a>
				</li>
			</ul>
			<p>
				The connector catches any exceptions thrown, compiles all the data it needs, and then sends it off via an API.
			</p>
			<p>
				Zappem then processes this error. Zappem instantly updates via WebSockets and also sends a HTML5 Notification if it just received a new unseen error.
			</p>
			<p>
				The API also returns a short 6 character code to identify this error. This can be displayed to the end-user so they can quote this code when contacting support.
			</p>
			<p>
				Developers can log into Zappem, search this short code and instantly be presented with the exact error the user encountered. It provides information such as the file, line number, class and even a snippet of code from where the error occured. It also shows information about the user such as their browser, OS etc.
			</p>
			<p>
				Zappem is fully responsive and runs well on all devices, from smartphones to TVs. This means developers can check stats on the go as well as having stats shown on a TV in the office for all to see.
			</p>"
		];
	}

	private function getAeromap(){
		return [
			'title' => 'Aeromap',
			'subtitle' => 'An HTML5 web-app for seeing where you are during a flight',
			'img' => 'aeromap.jpg',
			'links' => 
				[
					'GitHub' => 'https://github.com/danjohnson95/aeromap',
					'Website' => 'https://aeromap.xyz'
			],
			'body' => "<p>
				Aeromap can be used on a phone, tablet or laptop when on a flight. It is built with a responsive design so that users can see their location whether they're on a smart phone, tablet or a laptop.
			</p>
			<p>
				It utilises the HTML5 Geolocation API to get the user's whereabouts via GPS. This API is available to use whilst the device is in Airplane Mode making it safe for use in-flight. Due to new restrictions in modern browsers, the Geolocation API can only be accessed via HTTPS. Therefore I configured my server to serve Aeromap in HTTPS using <a href='https://letsencrypt.org' target='_blank'>Let's Encrypt</a>
			</p>
			<p>
				The location API provides information about the user's latitude and longitude, altitude, speed and heading. These details are displayed back to the user with the option of converting to a unit of their choice. The selected unit is retained in LocalStorage to avoid the need for a data connection.
			</p>
			<p>
				The location is plotted onto a map using the <a href='http://leafletjs.com/' target='_blank'>Leaflet</a> javascript library. Rather than use large map tiles to detail the map, I used a GeoJSON world map to plot land shapes. This way, the entire map weighs in at just 698KB.
			</p>
			<p>
				The user's closest city is calculated by a json file of major cities around the world with their respective co-ordinates. The user's co-ordinates are put through a <em>Pythagoras Equirectangular</em> formula to work out which city is closest to the user.
			</p>
			<pre>
...

Deg2Rad: function(deg){
	return deg * Math.PI / 180;
},

PythagorasEquirectangular: function(CurrentLat, CurrentLon, CheckLat, CheckLon){
	CurrentLat = this.Deg2Rad(CurrentLat);
	CurrentLon = this.Deg2Rad(CurrentLon);
	CheckLat = this.Deg2Rad(CheckLat);
	CheckLon = this.Deg2Rad(CheckLon);
	var R = 6371; // Radius of Earth (km)
	var x = (CheckLon - CurrentLon) * Math.cos((CurrentLat + CheckLat) / 2);
	var y = (CheckLat - CurrentLat);
	var d = Math.sqrt(x * x + y * y) * R;
	return d;
}

...
			</pre>
			<p>
				All assets are listed in a manifest file. When a user accesses Aeromap for the first time, the browser will cache all assets. Then after, if there is no internet connection, the cached assets will be used making it suitable for using in Airplane Mode.
			</p>"
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
				'img' => 'zappem.jpg'
			],
			[
				'title' => 'Aeromap',
				'description' => 'An HTML5 web-app for seeing where you are during a flight',
				'long_desc' => 'Unlike long-haul flights, most short-haul flights don\'t provide information about where you are on a map. But I noticed that even with Airplane Mode enabled, my phone still received a GPS signal. Therefore I built Aeromap which plots your GPS location on an offline GeoJSON map.',
				'link' => 'aeromap',
				'skills' => [
						'JavaScript',
						'GeoJSON',
						'HTTPS'
					],
				'img' => 'aeromap.jpg'
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
			],
			[
				'title' => 'Portfolio Website',
				'description' => 'My personal website for showcasing my best work',
				'long_desc' => 'The source code for this website is available on my GitHub profile.',
				'link' => 'portfolio',
				'skills' => [
					'SCSS',
					'pushState + AJAX',
					'Composer'
				]
			]
		];
	}
}