<?php
// Dragon Knowledge Framework
// Version : 1.0.1

// ! Users cannot access this root file/folder. For them, the root file will be in /public/.

// Frontend : /public/
// Backend : /backend/
// Labs/Test : /test/
// Include : /inc/
// Error File : /error/

// This file will call up everything you need for each of your pages. This is the file to call.
// ? You can call this file with this command : require_once('../config.php'); 









// ======================================> Configuration
// Path base for the project
$path = __DIR__;
// Import the core php file
require_once($path . '/backend/core.php');
// Import composer ()
require_once($path . '/vendor/autoload.php');
// ======================================>








// Show PHP info (uncomment the line below)
// echo phpinfo();