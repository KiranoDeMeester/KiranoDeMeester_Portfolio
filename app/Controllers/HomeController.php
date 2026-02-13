<?php
declare(strict_types=1);

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        $title = 'Home';
        require __DIR__ . '/../Views/home.php';
    }
}
