<?php
function filtrerDisponibles(array $vehicules):array{
    return array_values(
        array_filter(
            $vehicules, fn(array $v): bool => $v["statut"] === "DISPO")
        );
}
?>