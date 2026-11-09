<?php
function filtrerDisponibles(array $vehicules):array{
    return array_filter(
        $vehicules,
        fn($vehicule)=> $vehicule['statut']==="DISPO";
    )
}
?>