<?php
// $log_file = "src/logs/php_errors.log";
// ini_set("log_errors", TRUE);
// ini_set('error_log', $log_file);

// error_reporting(E_ALL);

include_once(realpath($_SERVER['DOCUMENT_ROOT']) .'/dotenv.php');
include_once(realpath($_SERVER['DOCUMENT_ROOT']) .'/DB.php');
include_once(realpath($_SERVER['DOCUMENT_ROOT']) .'/getCards.php');