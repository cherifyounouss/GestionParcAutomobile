<?php

$user = 'root';
$password = '';
$hostname = 'localhost';

try{
    $bdd = new PDO('mysql:host='.$hostname.';dbname=parc_auto;charset=utf8', $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

