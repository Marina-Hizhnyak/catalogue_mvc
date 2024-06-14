<?php 
require_once 'functions.php';
require_once 'autoloader.php';
require_once 'controllers/Controller_Base.php';

session_start(); 

$env = file_get_contents(__DIR__ . "/.env");
$lines = explode("\n", $env);
 
foreach ($lines as $line) {
    preg_match("/([^#]+)\=(.*)/", $line, $matches);
    if (isset($matches[2])) {
        putenv(trim($line));
    }
}

Model::connectDB();
Route::start();


