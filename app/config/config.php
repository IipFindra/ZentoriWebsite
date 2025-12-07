<?php

date_default_timezone_set('Asia/Jakarta');

// Helper to determine the base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
define('BASE_URL', $protocol . '://' . $host);
// Database Configuration
// Prioritize environment variables for deployment (e.g. Railway)
// Fallback to local default values
define('DB_HOST', $_ENV['MYSQLHOST'] ?? getenv('MYSQLHOST') ?: '127.0.0.1');
define('DB_USER', $_ENV['MYSQLUSER'] ?? getenv('MYSQLUSER') ?: 'root');
define('DB_PASS', $_ENV['MYSQLPASSWORD'] ?? getenv('MYSQLPASSWORD') ?: '');
define('DB_NAME', $_ENV['MYSQLDATABASE'] ?? getenv('MYSQLDATABASE') ?: 'zentori_db');
define('DB_PORT', $_ENV['MYSQLPORT'] ?? getenv('MYSQLPORT') ?: '3306');
define('APP_NAME', 'Sistem Inventori');
