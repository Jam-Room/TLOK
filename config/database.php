<?php


if (!defined('DB_HOST')) {
    define('DB_HOST', $_ENV['DB_HOST']);
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', $_ENV['DB_USERNAME']);
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
}
if (!defined('DB_NAME')) {
    define('DB_NAME', $_ENV['DB_NAME']);
}
if (!defined('DB_PORT')) {
    define('DB_PORT', (int) $_ENV['DB_PORT']);
}


$db = mysqli_connect("DB_HOST", "DB_USERNAME", "DB_PASSWORD", "DB_NAME", "DB_PORT");

if ($db->connect_errno) {
    die("Error de conexión a la base de datos: (" . $db->connect_error . ")");
}

if (!$db->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $db->error);
    exit();
}
