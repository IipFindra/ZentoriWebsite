<?php
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

use App\Config\Router;

Router::run();
