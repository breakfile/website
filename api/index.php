<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// routes
if ($path === '/') {
    require __DIR__ . '/home.php';
    return;
}

http_response_code(404);
require __DIR__ . '/404.php';
