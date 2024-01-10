<?php

namespace App\Core;

abstract class Controller
{
    protected function render(string $viewName, array $viewParams = [])
    {
        require_once ROOT . "/views/{$viewName}.php";
    }
}