<?php

$router->get('', 'PageController@index');
$router->get('about', 'PageController@about');
$router->get('about/culture', 'PageController@aboutCulture');
$router->get('news', 'PageController@news');
$router->get('contacts', 'PageController@contacts');
$router->get('users', 'UserController@index');
$router->get('login', 'UserController@login');
$router->get('register', 'UserController@register');
$router->get('users/delete', 'UserController@delete');

$router->post('login', 'UserController@auth');
$router->post('register', 'UserController@store');
