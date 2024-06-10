<?php

if (!$dkf_enable) exit('Access disabled');


$userIP = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$userIP = explode(',', $userIP)[0]; 
$userIP = trim($userIP);

if (!empty($dkf_testIPAuth) && !in_array($userIP, $dkf_testIPAuth)) {
    exit('Access denied for IP: ' . $userIP);
}