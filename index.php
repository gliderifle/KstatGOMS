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
