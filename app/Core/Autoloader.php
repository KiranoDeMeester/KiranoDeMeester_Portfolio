<?php
declare(strict_types=1);

namespace App\Core;

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function (string $class): void {
            $baseDir = dirname(__DIR__);
            $classPath = str_replace('App\\', '', $class);
            $file = $baseDir . '/' . str_replace('\\', '/', $classPath) . '.php';

            if (file_exists($file)) {
                require $file;
            }
        });
    }
}

Autoloader::register();
