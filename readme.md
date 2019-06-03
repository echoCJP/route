# 一个PHP 路由类

## 安装
1. composer 安装 ``` composer require yob/route ```
2. 引入/vendor目录下的autoload.php ``` require 'vendor/autoload.php'; ```
3. 引入路由配置文件routes.php``` require 'config/routes.php'; ```

## 初始化
```
<?php

use Yob\Route;

Route::get('/', function() {
  echo "Welcome yob route";
});

Route::get('/name/(:all)', function($name) {
  echo 'Your name is '.$name;
});

Route::get('test/num/(:num)', 'TestController@num');
Route::get('test', 'TestController@test');

Route::error(function() {
    echo '404 Not Found';
});

Route::dispatch();
```

