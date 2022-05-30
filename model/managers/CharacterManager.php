<?php

require 'connection.php';

// static signifie que la méthode n'a pas besoin d'être instanciée pour être utilisée

class CharacterManager
{
    // fonction pour récupéré tout les personnages
    public static function getAllCharacters()
    {
        $db = dbconnect();
        $query = $db->query("SELECT * FROM characters");
        $results = $query->fetchAll(PDO::FETCH_CLASS, 'Character');
        return $results;
    }
}
