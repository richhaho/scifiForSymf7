<?php
// config/routes/example.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes->add('landing_router', new Route('/', ['_controller' => 'App\Controller\DashboardController::index']));

return $routes;
?>
