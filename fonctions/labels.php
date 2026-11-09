<?php
function getLibelleStatut(string $statut):string{
    switch ($statut) {
        case 'DISPO':
            return 'Disponible';
        case 'LOUEE':
            return 'Louée';
        case 'MAINTENANCE':
            return 'En maintenance';
        default:
            return 'Statut inconnu';
    }
}

function getBadgeCategorie(string $categorie):array{
    
}

?>