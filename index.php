<?php

//appel des fichiers
require_once "config/settings.php";
require_once "fonctions/filters.php";
require_once "fonctions/labels.php";
require_once "fonctions/pricing.php";
require_once "styles/style.css";

//tableau des vehicules
$vehicules = [
    ["id" => 1, "modele" => "Renault Clio", "jours" => 3, "categorie" => "ECO", "statut"=> "DISPO"],
    ["id" => 2, "modele" => "Range Rover", "jours" => 10, "categorie" => "LUXE", "statut"=> "LOUEE"],
    ["id" => 3, "modele" => "Dacia Duster", "jours" => 5, "categorie" => "SUV", "statut"=> "DISPO"],
    ["id" => 4, "modele" => "Peugeot 208", "jours" => 8, "categorie" => "ECO", "statut"=> "MAINTENANCE"],
    ["id" => 5, "modele" => "Mercedes Classe E", "jours" => 2, "categorie" => "LUXE", "statut"=> "DISPO"],
];

//cartes de vehicules en HTML
?>