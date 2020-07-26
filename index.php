<?php
require_once './vendor/autoload.php';

use KstatGOMS\Support\ServiceProvider;
use KstatGOMS\Application;

class SessionServiceProvider extends ServiceProvider
{
  public function register()
  {
    // session_set_save_handler

    // Route:add...
  }

  public function boot()
  {
    // session_start();
    // Route::run
  }
}

$app = new Application([SessionServiceProvider::class]);
$app->boot();

/*
use KstatGOMS\Database\Adaptor;
use KstatGOMS\Http\Request;
use KstatGOMS\Routing\Middleware;
use KstatGOMS\Routing\Route;
use KstatGOMS\Session\DatabaseSessionHandler;

Adaptor::setup('mysql:localhost','root','Entrac_0224');

session_set_save_handler(new DatabaseSessionHandler());
session_start();

$_SESSION['message'] = 'Hello, world';
$_SESSION['foo'] = new stdClass();


class HelloMiddleware extends Middleware
{
  public static function process()
  {
    return true;
  }
}

Route::add('get', '/', function(){
  echo 'Hello, world';
},[HelloMiddleware::class]);

Route::add('get', '/posts/{id}', function($id){
  var_dump(Adaptor::getAll("SELECT * FROM kstatcontact.ta_user WHERE ID=?",[$id]));
});

Route::add('get', '/posts/{id}/{detail}', function($id){
  var_dump(Adaptor::getAll("SELECT * FROM kstatcontact.ta_user WHERE ID=?",[$id]));
});

Route::run();
*/
/* Http request example
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['PATH_INFO'] = '/posts/write';

var_dump(Request::getMethod());
var_dump(Request::getPath());
*/


/* DB Adaptor example
Adaptor::setup('mysql:localhost','root','Entrac_0224');

class Post
{

}

$posts = Adaptor::getAll("SELECT * FROM posts LIMIT 3", [], Post::class);
var_dup($posts);
*/