<?php
function getLibelleStatut(string $statut):string{
    switch($statut){
        case DISPO:
            return "Disponible immédiatement";
        case MAINTENANCE:
            return "En maintenance";
        case LOUEE:
            return "Actuellement louée";
    }
}

function getBadgeCategorie(string $categorie):array{
    switch($categorie){
        case ECO:
            return ["libelle" => "Economique", "classe" => "badge-eco"];
        case LUXE:
            return ["libelle" => "Premium", "classe" => "badge-luxe"];
        case SUV:
            return ["libelle" => "SUV familial", "classe" => "badge-suv"];
        default:
            return ["libelle" => "Inconnue", "classe" => "badge-inconnu"];
    }
}

?>