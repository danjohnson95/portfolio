<?php

$Router->get('/', 'ProjectController@index');
$Router->get('/me', 'HomeController@me');
$Router->get('/contact', 'ContactController@index');
$Router->post('/contact', 'ContactController@store');

$Router->get('/projects', 'ProjectController@index');
$Router->get('/projects/zappem', 'ProjectController@zappem');
$Router->get('/projects/aeromap', 'ProjectController@aeromap');
$Router->get('/projects/gitbar', 'ProjectController@gitbar');
$Router->get('/projects/portfolio', 'ProjectController@portfolio');
$Router->get('/projects/queue-office', 'ProjectController@queueOffice');
$Router->get('/devflow/callback', 'DevflowController@apiCallback');
