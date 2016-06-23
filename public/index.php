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

require __DIR__ . '/../bootstrap/setUp.php';

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

/** Live App **/
$mux->get('/', ['Burrow\Controllers\WelcomeController', 'index']);
//$mux->get('/getGlobals', ['Burrow\Controllers\WelcomeController', 'getGlobals']);
//$mux->get('/post/:parameters', 'Burrow\Controllers\WelcomeController:getParameters');
$mux->get('/index.php', ['Burrow\Controllers\WelcomeController', 'index']);
$mux->get('/404', 'Burrow\Controllers\WelcomeController:return404');
$mux->get('/blog', ['Burrow\Controllers\WelcomeController', 'showBlog']);
$mux->get('/admin', ['Burrow\Controllers\WelcomeController', 'admin']);

$mux->post('/', ['Burrow\Controllers\WelcomeController', 'formPost']);
$mux->post('/blog', ['Burrow\Controllers\WelcomeController', 'formPost']);
$mux->post('/index.php', ['Burrow\Controllers\WelcomeController', 'formPost']);
$mux->post('/admin', ['Burrow\Controllers\WelcomeController', 'adminPost']);


/** Homestead App **/
$mux->get('/index_homestead', ['Burrow\Controllers\HomesteadController', 'index']);
$mux->get('/blog_homestead', ['Burrow\Controllers\HomesteadController', 'showBlog']);
$mux->get('/admin_homestead', ['Burrow\Controllers\HomesteadController', 'admin']);

$mux->post('/admin_homestead', ['Burrow\Controllers\HomesteadController', 'adminPost']);


/** Submit URL */
$route = $mux->dispatch($_SERVER['REQUEST_URI']);

if ($route === null) $route = $mux->dispatch('/404');

echo Executor::execute($route);

