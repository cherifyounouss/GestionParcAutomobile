<?php

$user = 'root';
$password = '';
$hostname = 'localhost';

try{
    $bdd = new PDO('mysql:host='.$hostname.';dbname=monapp;charset=utf8', $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

