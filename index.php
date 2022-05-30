<?php
require 'model/entities/Character.php';
require 'model/entities/Wizard.php';
require 'model/managers/CharacterManager.php';

/* $harry = new Character('Harry', 75, 10);
// var_dump($harry);
$drago = new Character('Drago', 50, 5);
// var_dump($drago);

$hermione = new Wizard('Hermione', 100, 15);
var_dump($hermione);
// echo $hermione->getMana();

// $hermione->manaAttack($drago); */

$characters = CharacterManager::getAllCharacters();
var_dump($characters);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <h1>Test</h1> -->
    <?php
    // $harry->autoAttack($drago);
    ?>
    <!-- <table>
        <tr>
            <td>
                <h1>
                    <?php // echo $harry->getName(); ?>
                </h1>
            </td>
            <td>
                <h1>
                    <?php // echo $harry->getHp(); ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td>
                <h1>
                    <?php // echo $drago->getName(); ?>
                </h1>
            </td>
            <td>
                <h1>
                    <?php // echo $drago->getHp(); ?>
                </h1>
            </td>
        </tr>
    </table>
    <?//= $harry; ?> -->
</body>

</html>