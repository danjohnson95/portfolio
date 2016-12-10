<?php

$Router->get('/', 'ProjectController@index');
$Router->get('/me', 'HomeController@me');
$Router->get('/contact', 'ContactController@index');
$Router->post('/contact', 'ContactController@store');

$Router->get('/projects', 'ProjectController@index');
$Router->get('/projects/zappem', 'ProjectController@zappem');
$Router->get('/projects/aeromap', 'ProjectController@aeromap');