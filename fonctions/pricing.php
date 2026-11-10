<?php
function calculerPrixLocation(int $jours, float $tarifJour):float{

$total = $jours * $tarifJour;    
if($jours>7){
        $total = $total * 0.85;
    }
    return $total;
}
?>