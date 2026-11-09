<?php

//appel des fichiers
require_once "config/settings.php";
require_once "fonctions/filters.php";
require_once "fonctions/labels.php";
require_once "fonctions/pricing.php";
require_once "styles/style.css";


//tableau des vehicules a la place d'une base de données
$vehicules = [
    ["id" => 1, "modele" => "Renault Clio", "jours" => 3, "categorie" => "ECO", "statut"=> "DISPO"],
    ["id" => 2, "modele" => "Range Rover", "jours" => 10, "categorie" => "LUXE", "statut"=> "LOUEE"],
    ["id" => 3, "modele" => "Dacia Duster", "jours" => 5, "categorie" => "SUV", "statut"=> "DISPO"],
    ["id" => 4, "modele" => "Peugeot 208", "jours" => 8, "categorie" => "ECO", "statut"=> "MAINTENANCE"],
    ["id" => 5, "modele" => "Mercedes Classe E", "jours" => 2, "categorie" => "LUXE", "statut"=> "DISPO"],
];

//cartes de vehicules en HTML
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carte vehicule</title>
</head>
<body>
    <h1>Flotte AutoLoc</h1>
    <table>
    <tr>
        <td> Renault Clio (3 j)</td>
        <td> Range Rover (10 j)</td>
        <td> Dacia Duster (50 j)</td>
    </tr>
    <tr>
        <td> Peugeot 208 (8 j)</td>
        <td> Mercedes Classe E (2 j)</td>
    </tr>
    </table>
</body>
</html>
