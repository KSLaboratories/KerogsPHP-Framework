<?php
// Dragon Knowledge Framework
$dkf_version = "v1.0.2";

// ! Users cannot access this root file/folder. For them, the root file will be in /public/.

// Frontend : /public/
// Backend : /backend/
// Labs/Test : /test/
// Include : /inc/
// Error : /public/error/

// This file will call up everything you need for each of your pages. This is the file to call.
// ? You can call this file with this command : require_once('../config.php'); 





// ======================================> Configuration php
// Path base for the project
$path = __DIR__;
// Import the core php file
require_once($path . '/backend/core.php');
// Import composer
require_once($path . '/vendor/autoload.php');
// ======================================>





// ======================================> SEO Configuration
$dkf_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$dkf_title = "Dragon Knowledge Framework";
$dkf_description = "Dragon Knowledge Framework. The framework for all your knowledge needs.";
$dkf_keywords = "Dragon, Knowledge, Framework, php, website, html, css, easy, best, Dragon Knowledge, Dradgon Framework, Dragon Knowledge Freamework, dkf, dk, kf";
$dkf_author = "Kerogs";
$dkf_lang = "English";
$dkf_color = "#a3815f";
$dkf_image = "https://raw.githubusercontent.com/KSInfinite/Dragon-Knowledge-Framework/main/.ksinf/banner.png";
// ======================================>


if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $dkf_url = "https://";
else $dkf_urlHTTP = "http://";


// ======================================> Var

$dkf_urlHOST = $_SERVER['HTTP_HOST'];   
// ======================================>




// Show PHP info (uncomment the line below)
// echo phpinfo();