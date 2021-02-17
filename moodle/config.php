<?php  // Moodle configuration file
//this is test changes
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'testmoodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

/* $CFG->wwwroot   = 'http://testlms.yakshnatechnologies.in';
$CFG->dataroot  = 'C:\\inetpub\\wwwroot\\moodle-3.10 (1)\\moodledata';
$CFG->admin     = 'admin';
*/
$CFG->wwwroot   = 'http://testlms.yakshnatechnologies.in';
$CFG->dataroot  = 'C:\\inetpub\\wwwroot\\moodle-3.10 (1)\\moodledata';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
