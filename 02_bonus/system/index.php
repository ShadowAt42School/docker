<?php
	require_once 'vendor/autoload.php';
	use Phroute\Phroute\RouteCollector;
	use \Phroute\Phroute\Dispatcher;

	$router = new RouteCollector();

	$router->get('/', $handler);
?>