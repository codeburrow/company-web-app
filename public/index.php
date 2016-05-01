<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
use Pux\Executor;

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
$mux = new \Pux\Mux;

$mux->get('/', ['Burrow\Controllers\WelcomeController', 'index']);
$mux->get('/index.php', ['Burrow\Controllers\WelcomeController', 'index']);
$mux->get('/blog', ['Burrow\Controllers\WelcomeController', 'showBlog']);
$mux->post('/', ['Burrow\Controllers\WelcomeController', 'formPost']);
$mux->post('/index.php', ['Burrow\Controllers\WelcomeController', 'formPost']);

$mux->get('/post/:parameters',
	'Burrow\Controllers\WelcomeController:getParameters');

$mux->get('/404',
	'Burrow\Controllers\WelcomeController:return404');

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

if ( $route === null ) $route = $mux->dispatch('/404');

echo Executor::execute($route);

