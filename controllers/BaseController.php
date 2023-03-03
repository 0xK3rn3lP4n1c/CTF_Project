<?php

namespace app\controllers;

/**
 * Base Controller of app.
 */
class BaseController
{
    /**
     * Constructor of base controller.
     */
    public function __construct()
    {
    }
    public function render(string $view, array $params = [])
    {
        $path = __DIR__ . '/../views/' . $view;
        extract($params);
        require($path);
    }
}
