<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

use App\Core\Database;
use App\Core\Env;

require_once __DIR__ . '/../app/Core/Autoloader.php';
require_once __DIR__ . '/../app/Core/Env.php';

Env::load(__DIR__ . '/../.env');

$db = Database::getConnection();

echo 'Database connected successfully';

