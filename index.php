<?php
session_start();

// отображение ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Services\App;

require_once __DIR__ . '/vendor/autoload.php';
App::start();
require_once __DIR__ . '/router/routes.php';




?>
