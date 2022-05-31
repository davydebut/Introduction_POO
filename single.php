<?php
include 'model/managers/CharacterManager.php';
include 'model/entities/Character.php';

$id = $_GET['id'];
// var_dump($id);
$character = CharacterManager::getCharacter($id);
// var_dump($character->getName());
include 'views/singleView.php';