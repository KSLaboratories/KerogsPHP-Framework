<?php
// KerogsPHP Framework
// https://github.com/KSInfinite/KerogsPHP-Framework
// Thanks for using it.

// ! Users cannot access this root file/folder. For them, the root file will be in /public/.

// Frontend : /public/
// Backend : /backend/
// Labs/Test : /test/ (need to be enable in config.yml (access with test.(url) ex : test.localhost))
// Include : /inc/
// Error : /public/error/
// Docs : /public/docs/

// This file will call up everything you need for each of your pages. This is the file to call.
// ? You can call this file with this line of code : require_once('../config.php'); 

// ======================================> Configuration php
// Path base for the project
$path = __DIR__;
// Import the core php file
require_once($path . '/backend/core.php');
// Import composer
file_exists($path . '/vendor/autoload.php') ? require_once($path . '/vendor/autoload.php') : die("composer is not installed on the server. Open the console and select “composer install”.");
// ======================================>

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $kpf_urlHTTP = "https://";
else $kpf_urlHTTP = "http://";
$kpf_urlHOST = $_SERVER['HTTP_HOST'];

// Show PHP info (uncomment the line below)
// echo phpinfo();




// config.yml
// ! Don't touch everything under this line.
use Symfony\Component\Yaml\Yaml;

$kpf_configFilePath = $path . '/config.yml';
$kpf_config = Yaml::parseFile($kpf_configFilePath);

use Dotenv\Dotenv;

use Ramsey\Uuid\Uuid;

// ======================================> .env
// ? if file .env doesn't exist then create it
if (!file_exists($path.'/.env')) {
  $cryptKey = Uuid::uuid4()->toString();
  $envContent = "CRYPT_KEY={$cryptKey}\nDB_SERVER=localhost\nDB_USERNAME=root\nDB_PASSWORD=root\nDB_DBNAME=database\n";
  file_put_contents($path.'/.env', $envContent);
}

$dotenv = Dotenv::createImmutable($path."/");
$dotenv->load();
// ======================================>

// ======================================> BDD
// ? get if you want to use database (from config.yml)
$KPF_USE_DATABASE = $kpf_config["other"]["use_database"];
$KPF_DB_SERVER = $_ENV['DB_SERVER'];
$KPF_DB_USERNAME = $_ENV['DB_USERNAME'];
$KPF_DB_PASSWORD = $_ENV['DB_PASSWORD'];
$KPF_DB_DBNAME = $_ENV['DB_DBNAME'];
// ======================================>
if ($KPF_USE_DATABASE) {
  try {
    $db = new PDO('mysql:host=' . $KPF_DB_SERVER . ';dbname=' . $KPF_DB_DBNAME . '', $KPF_DB_USERNAME, $KPF_DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
