<?php

$router->get('', 'PagesController@home');
$router->get('artical', 'PagesController@artical');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('tasks', 'TasksController@index');
$router->post('tasks/store', 'TasksController@store');