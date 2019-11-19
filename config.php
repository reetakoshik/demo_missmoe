<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'missmoemoodle36';
$CFG->dbuser    = 'missmoemoodle36user';
$CFG->dbpass    = 'cpqAC0JfphRUEhI5!@#';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);


$CFG->wwwroot   = 'http://115.166.143.10:81/missmoemoodle36';
$CFG->dataroot  = '/var/www/moodledata36/missmoemoodledata';
//$CFG->dataroot  = '/home/admin/web/miss.moe/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
