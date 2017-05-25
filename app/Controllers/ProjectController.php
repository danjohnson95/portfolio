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

	public function gitbar(){
		return $this->view('projects/view', ['project' => $this->getGitbar()]);
	}

	public function portfolio(){
		return $this->view('projects/view', ['project' => $this->getPortfolio()]);
	}

	public function queueOffice(){
		return $this->view('projects/view', ['project' => $this->getQueueOffice()]);
	}

	public function devflow(){
		return $this->view('projects/view', ['project' => $this->getDevflow()]);
	}

	private function getZappem(){
		return [
			'title' => 'Zappem',
			'subtitle' => 'A bug tracker where developers can use their own database',
			'img' => 'zappem.jpg',
			'links' =>
				[
					'GitHub' => 'https://github.com/Zappem'
				],
			'body' => "	<p>
				Zappem is built in JS and runs on Node, so it can be installed by running <code>npm install -g zappem</code>.
			</p>
			<p>
				When running for the first time, the user will need to enter their MongoDB details - this could be their own MongoDB server or a hosted one from a service such as <a href='https://mlab.com/' target='_blank'>mLab</a>.
			</p>
			<p>
				Once successfully connected to the user's database, they will be able to create their first project. With this, they use one of the connector libraries I have built to connect their application to Zappem.
			</p>
			<ul>
				<li>
					<a href='https://github.com/Zappem/zappem-laravel' target='_blank'>Laravel Connector</a>
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

	private function getGitbar(){
		return [
			'title' => 'Gitbar',
			'subtitle' => 'A toolbar for quickly switching branches through the browser',
			'img' => 'gitbar.jpg',
			'links' => [
				'GitHub' => 'https://github.com/danjohnson95/gitbar',
				'Packagist' => 'https://packagist.org/packages/danj/gitbar'
			],
			'body' => '<p>
	Gitbar is a <a href="https://laravel.com" target="_blank">Laravel</a> package for use in a development or testing environment.
</p>
<p>
	My current workflow involves developing on a local machine and then pushing the code up to a test server for testing by another department. All features and bug-fixes are committed in seperate branches and then pushed up to the test server in branches to avoid conflict errors.
</p>
<p>
	Our testing department needed to switch between different branches to test different code, however they did not have the required authorisation to SSH into the server. It was becoming time consuming switching the branches for them, so I built Gitbar which allows them to switch branches themselves without needing SSH access.
</p>

<p>
	During each page load, the GitBar HTML snippet is injected into the body of the page. The GitBar CSS and JS files are also loaded, but are minimal in size so performance is unaffected.
</p>
<p>
	An AJAX request then runs to find out the current and available branches. It does this by running a <code>git branch</code> command inside PHP. The Git directory and any permissions required are passed into the config file through the .env file.
</p>
<p>
	Gitbar also displays the latest commit hash on the current branch along with the time of the last commit. This information is handy when working on a team.
</p>
<p>
	On change of the dropdown list, an AJAX request is run which performs a <code>git checkout</code> to the branch selected in a work tree specified in the config file. The page then refreshes.
</p>'
		];
	}

	private function getPortfolio(){
		return [
			'title' => 'Portfolio',
			'subtitle' => 'My personal website for showcasing my best work',
			'img' => 'portfolio.jpg',
			'links' => [
				'GitHub' => 'https://github.com/danjohnson95/portfolio',
				'Website' => 'https://danjohnson.xyz'
			],
			'body' => "<p>
	I decided against using a CMS such as WordPress for my portfolio. This way I retain full customisation of my website.
</p>
<p>
	I really enjoy writing view files in Laravel Blade syntax, so I found a package which ports Blade to PHP with no Laravel requirement. <a href='https://github.com/PhiloNL/Laravel-Blade' target='_blank'>PhiloNL/Laravel-Blade</a>.
</p>
<p>
	I also used the <a href='https://github.com/klein/klein.php' target='_blank'>Klein</a> routing library because of it's simplicity and very low overhead.
</p>
<p>
	To make pages load quicker, I used a <a href='https://github.com/MoOx/pjax' target='_blank'>pjax</a> plugin. This requests the content over AJAX and then injects the response into the page. This way the layout view is only being rendered on an actual page load rather than navigation.
</p>
<p>
	I find writing CSS to be a much easier and quicker process when using the SASS pre-processor, so all styles are written in SCSS syntax and then compiled to CSS files during development using Gulp.
</p>"
		];
	}


	private function getDevflow(){
		return [
			'title' => 'Devflow',
			'subtitle' => 'A native app for viewing BitBucket issues in a desktop GUI',
			'img' => 'devflow-mockup.jpg',
			'links' => [
				'GitHub' => 'https://github.com/danjohnson95/devflow'
			],
			'body' => ''
		];
	}

	private function getProjects(){
		return [
			[
				'title' => 'Devflow',
				'description' => 'A desktop client for BitBucket issue tracking',
				'long_desc' => 'Devflow is a native application for Windows, macOS and Linux built on the <a href="">Electron</a> framework. It connects with the BitBucket API to allow users to view, update and modify their issues',
				'link' => 'devflow',
				'skills' => [
					'Node JS',
					'Electron',
					'WebSockets'
				],
				'img' => 'devflow-mockup.jpg'
			],
			[
				'title' => 'Zappem',
				'description' => 'A bug tracker where developers can use their own database',
				'long_desc' => 'Me and my team needed a service like <a href="https://honeybadger.io" target="_blank">Honeybadger</a> or <a href="https://rollbar.com" target="_blank">Rollbar</a> but these solutions were too expensive. We already had a server running MongoDB, so I built <a href="https://zappem.xyz">Zappem</a>. Errors from your applications get sent to Zappem and stored in your own database.',
				'link' => 'zappem',
				'skills' => [
						'Node JS',
						'MongoDB',
						'Mocha',
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
					],
				'img' => 'gitbar.jpg'
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
				],
				'img' => 'portfolio.jpg'
			]
		];
	}
}
