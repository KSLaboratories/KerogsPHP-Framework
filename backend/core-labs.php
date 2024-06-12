<?php

if (!$kpf_config["labs"]["enable"]) exit('Access disabled');

// Obtenir l'adresse IP de l'utilisateur
$userIP = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$userIP = explode(',', $userIP)[0];
$userIP = trim($userIP);

// Vérifier si l'adresse IP de l'utilisateur est autorisée
if (!empty($kpf_config["labs"]["labsIPAuth"]) && !in_array($userIP, $kpf_config["labs"]["labsIPAuth"])) {
    exit('Access denied for IP: ' . $userIP);
}
