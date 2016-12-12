var pjax = require('pjax'),
	form = document.forms['contact-form'];

var sidebar = {
	refreshActive: function(active){
		var sidebar = document.getElementById('topbar'),
			nav = sidebar.querySelector('nav'),
			li = nav.children;
		for(var i=0; i<nav.children.length; i++){
			child = nav.children[i];
			if(child.classList.contains('active')) child.classList.remove('active');
		}
		nav.querySelector('[data-page="'+active+'"]').classList.add('active');
	}
};

var master = {
	ajax: function(data){
		var xhr = new XMLHttpRequest();
		if(!('withCredentials' in xhr)) xhr = new XDomainRequest();
		console.log(xhr);
		xhr.open(data.method, data.url);
		xhr.onload = data.success;
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		console.log(data.data);
		xhr.send(data.data);
		return xhr;
	},

	registerFormListener: function(e){
		form = document.forms['contact-form'];
		if(!form) return;
		//form.addEventListener('submit', master.submitContactForm);
	},

	submitContactForm: function(e){
		e.preventDefault(e);
		console.log('submit the form');
		var elements = this.elements;
		master.ajax({
			url: '/contact',
			method: 'post',
			data: elements,
			success: function(e){
				console.log(e.target.responseText);
			}
		});
	}

}

new pjax({
	elements: "a",
	selectors: ['#sidebar', '#content'],
	switches: {
		"#content": function(oldEl, newEl, options){
			// Sort out the left nav.
			sidebar.refreshActive(newEl.dataset.page);
			oldEl.innerHTML = newEl.innerHTML;
			this.onSwitch();
		},
		"#sidebar": function(oldEl, newEl, options){
			// Don't replace the contents here!
		}
	}
});

master.registerFormListener();

document.addEventListener('pjax:success', function(e){
	master.registerFormListener();
});

var topbar = document.getElementById('topbar');
var nav = document.getElementById('sticky-nav');
var offset = nav.offsetTop - 12;

document.addEventListener('scroll', function(e){
	if(window.pageYOffset >= offset && !topbar.classList.contains('stick')){
		// Add the class
		topbar.classList.add('stick');
	}else if(window.pageYOffset < offset && topbar.classList.contains('stick')){
		// Remove the class
		topbar.classList.remove('stick');
	}
});