<?php

namespace App\Core;

use App\Core\Exception\RouteNotFoundException;

class Application
{
    public function __construct(private Router $router = new Router())
    {
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