<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('DB_TYPE') ?: 'mysqli';
$CFG->dblibrary = getenv('DB_LIBRARY') ?: 'native';
$CFG->dbhost    = getenv('DB_HOST') ?: 'localhost';
$CFG->dbname    = getenv('DB_NAME') ?: 'moodle';
$CFG->dbuser    = getenv('DB_USER') ?: 'root';
$CFG->dbpass    = getenv('DB_PASS') ?: '';  // Si tu base de datos requiere una contraseña
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://localhost/proyect_lok/moodle';
$CFG->dataroot  = '/home/Jam-Room/TLOK/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
