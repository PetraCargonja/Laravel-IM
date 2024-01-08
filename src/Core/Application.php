<?php

namespace App\Core;

use App\Core\Exception\RouteNotFoundException;
use Symfony\Component\Dotenv\Dotenv;

class Application
{
    public function __construct(private Router $router = new Router())
    {
    }

    public function init()
    {
        require_once ROOT . '/config/routes.php';

        $dotenv = new Dotenv();
        $dotenv->load(ROOT . '/.env');

        define('DB_DSN', $_ENV['DB_DSN']);
        define('DB_USERNAME', $_ENV['DB_USERNAME']);
        define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
    }

    public function run()
    {
        try {
            $response = $this->router->route();
        } catch (RouteNotFoundException) {
            http_response_code(404);
            $response = "404 - Page not found!";
        } catch (\Throwable $th) {
            http_response_code(500);
            $response = "500 - Internal server error!";
        }

        if (is_array($response)) {
            header('Content-Type: application/json');
            $response = json_encode($response);
        }

        echo $response;
    }
}