<?php

use Yob\Route;
// use Evai\Tenden\Route;
// use Echoo\Route;

$route = new Route();
// var_dump($route);exit;
Route::get('/', function() {
  echo "Welcome";
});

Route::get('/name/(:all)', function($name) {
  echo 'Your name is '.$name;
});

Route::get('home', 'HomeController@home');
Route::get('mail', 'HomeController@mail');
Route::get('redis', 'HomeController@redis');
Route::get('test', 'HomeController@test');

Route::error(function() {
    //throw new Exception("404 Not Found");
    echo '404 Not Found';
});


Route::dispatch();