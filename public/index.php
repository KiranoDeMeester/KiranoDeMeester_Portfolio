<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

use App\Core\Env;
use App\Core\Router;

// Autoload
require_once __DIR__ . '/../app/Core/Autoloader.php';

// Load env
require_once __DIR__ . '/../app/Core/Env.php';
Env::load(__DIR__ . '/../.env');

$appConfig = require __DIR__ . '/../config/app.php';
define('BASE_URL', $appConfig['base_url']);

// Start session
session_start();

// Routing
require_once __DIR__ . '/../app/Core/Router.php';

$router = new Router();
$router->dispatch();
