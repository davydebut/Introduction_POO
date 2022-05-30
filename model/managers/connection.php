<?php

function dbconnect()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=poo;charset=utf8', 'root', '');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage() . '<br>');
    }
}
