<?php

use Yob\Route;

$route = new Route();
Route::get('/', function() {
  echo "Welcome";
});

Route::get('/name/(:all)', function($name) {
  echo 'Your name is '.$name;
});

Route::get('test', 'IndexController@test');

Route::error(function() {
    //throw new Exception("404 Not Found");
    echo '404 Not Found';
});

Route::dispatch();