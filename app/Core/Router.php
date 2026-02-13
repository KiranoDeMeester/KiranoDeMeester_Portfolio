<?php
declare(strict_types=1);

namespace App\Core;

class Router
{
    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $basePath = '/ProgrammingPhP/KiranoDeMeester_Portfolio/public';
        if (str_starts_with($uri, $basePath)) {
            $uri = substr($uri, strlen($basePath));
        }

        $uri = trim($uri, '/');

        if ($uri === '') {
            $this->callController(
                'HomeController',
                'index'
            );
            return;
        }

        $parts = explode('/', $uri);

        $controller = ucfirst($parts[0]) . 'Controller';
        $method = $parts[1] ?? 'index';
        $param = $parts[2] ?? null;

        $this->callController($controller, $method, $param);
    }

    private function callController(
        string $controllerName,
        string $method,
        ?string $param = null
    ): void {
        $controllerClass = 'App\\Controllers\\' . $controllerName;
        $controllerFile  = __DIR__ . '/../Controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            $this->abort404();
            return;
        }

        require_once $controllerFile;

        if (!class_exists($controllerClass)) {
            $this->abort404();
            return;
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, $method)) {
            $this->abort404();
            return;
        }

        $controller->$method($param);
    }

    private function abort404(): void
    {
        http_response_code(404);
        echo '404 - Page not found';
    }
}
