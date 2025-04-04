<?php

    const ERROR_ENABLE = 0;
    if (ERROR_ENABLE) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    } else {
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
    }

    session_start();

    // ? Import functions
    require_once __DIR__ . "/func/functions.php";
