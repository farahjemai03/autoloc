<?php

//appel des fichiers
require_once "config/settings.php";
require_once "fonctions/filters.php";
require_once "fonctions/labels.php";
require_once "fonctions/pricing.php";

//tableau des vehicules
$vehicules = [
    ["id" => 1, "modele" => "Renault Clio", "jours" => 3, "categorie" => "ECO", "statut"=> "DISPO"],
    ["id" => 2, "modele" => "Range Rover", "jours" => 10, "categorie" => "LUXE", "statut"=> "LOUEE"],
    ["id" => 3, "modele" => "Dacia Duster", "jours" => 5, "categorie" => "SUV", "statut"=> "DISPO"],
    ["id" => 4, "modele" => "Peugeot 208", "jours" => 8, "categorie" => "ECO", "statut"=> "MAINTENANCE"],
    ["id" => 5, "modele" => "Mercedes Classe E", "jours" => 2, "categorie" => "LUXE", "statut"=> "DISPO"],
];
$disponibles = filtrerDisponibles($vehicules);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flotte AutoLoc</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Flotte AutoLoc</h1>
<!-- Liste des cartes vehicules-->
     <div class="grille"> <!--"grille" puts them next to each other-->
        <?php foreach($vehicules as $v):?>
            <?php
            $badge = getBadgeCategorie($v["categorie"]);
            $libelle = getLibelleStatut($v["statut"]);
            $prix = calculerPrixLocation($v["jours"],TARIF_JOUR_BASE);
            ?>
            <article class="carte statut-<?=strtolower($v["statut"])?>"><!--"carte statut" alone adds a gray line at the top of each card but strtolower turns the status into lower case so that css can read and color it-->
                <h2><?=$v["modele"]?> (<?=$v["jours"]?> j)</h2>
                <span class="badge <?=$badge["classe"]?>"> <!--classe "badge" alone colors the text white while $badge["classe"] calls each class css and colors it-->
                    <?= $badge["libelle"] ?>
                </span>
                <p><strong>Statut: </strong><?=$libelle?></p>
                <p><strong>Prix estimé: </strong><?=$prix?> TND</p>
            </article>
        <?php endforeach; ?>
     </div>
<!-- Section récapitulatif-->
 <section class="recapitulatif">
    <h2>Récapitulatif</h2>
    <p>Nombre total de véhicules: <?=count($vehicules)?></p>
    <h3>Véhicules disponibles:</h3>
    <ul>
        <?php foreach($disponibles as $d):?>
            <?php $b=getBadgeCategorie($d["categorie"]);?>
            <li><?=$d["modele"]?> - <?=$b["libelle"]?></li>
        <?php endforeach;?>
    </ul>
 </section>
</body>
</html>