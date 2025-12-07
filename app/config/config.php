<?php

date_default_timezone_set('Asia/Jakarta');

// Helper to determine the base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
define('BASE_URL', $protocol . '://' . $host);
// Database Configuration
// Prioritize environment variables for deployment (e.g. Railway)
// Fallback to local default values
define('DB_HOST', getenv('MYSQLHOST') ?: 'localhost');
define('DB_USER', getenv('MYSQLUSER') ?: 'root');
define('DB_PASS', getenv('MYSQLPASSWORD') ?: '');
define('DB_NAME', getenv('MYSQLDATABASE') ?: 'zentori_db');
define('DB_PORT', getenv('MYSQLPORT') ?: '3306');
define('APP_NAME', 'Sistem Inventori');
