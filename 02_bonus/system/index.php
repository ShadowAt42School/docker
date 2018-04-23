<?php
	echo "test";
	// include __DIR__ . '/vendor/autoload.php';
	// use Phroute\Phroute\RouteCollector;
	// use Phroute\Phroute\Dispatcher;
	// $router = new RouteCollector();
    //
	// /*--- Views - No Sign in ---*/
	// $router->get(
    // 	["/", 'index'], ['\\ViewControllers\\IndexViewController', 'genPageInit']
	// );
    //
	// /*---API - No Sign In ---*/
	// // $router->controller(
	// // 	'seckey', '\\Core\\System\\API\\SeckeyRegister'
	// // );
    //
	// /*--- Dispatcher ---*/
	// $dispatcher =  new Dispatcher($router->getData());
	// $response = $dispatcher->dispatch(
	// 	$_SERVER['REQUEST_METHOD'],
	// 	parse_url(
	// 		$_SERVER['REQUEST_URI'],
	// 		PHP_URL_PATH
	// 	)
	// );
	// if (is_array($response)) {
	// 	if (array_key_exists("type", $response) && $response['type'] === 'json') {
	// 		header('Content-Type: application/json');
	// 		echo json_encode($response['data']);
	// 	}
	// } else {
	// 	echo $response;
	// }
?>
