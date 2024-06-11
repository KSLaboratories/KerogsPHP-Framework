<?php
// Dragon Knowledge Framework
// https://github.com/KSInfinite/Dragon-Knowledge-Framework
// Thanks for using it.
$dkf_version = "v1.1.1";

// ! Users cannot access this root file/folder. For them, the root file will be in /public/.

// Frontend : /public/
// Backend : /backend/
// Labs/Test : /test/
// Include : /inc/
// Error : /public/error/
// Docs : /public/docs/

// This file will call up everything you need for each of your pages. This is the file to call.
// ? You can call this file with this command : require_once('../config.php'); 




// ======================================> Configuration php
// Path base for the project
$path = __DIR__;
// Import the core php file
require_once($path . '/backend/core.php');
// Import composer
if (file_exists($path . '/vendor/autoload.php')) require_once($path . '/vendor/autoload.php');
// ======================================>

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $dkf_urlHTTP = "https://";
else $dkf_urlHTTP = "http://";
$dkf_urlHOST = $_SERVER['HTTP_HOST'];

// Show PHP info (uncomment the line below)
// echo phpinfo();




// config.yml
// ! Don't touch everything under this line.
use Symfony\Component\Yaml\Yaml;

$dkf_configFilePath = $path . '/config.yml';
$dkf_config = Yaml::parseFile($dkf_configFilePath);