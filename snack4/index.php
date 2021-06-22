<?php
/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
$numbers = [];

for ($i=0 ; $i <= 14 ; $i++ ) { 
    $random = rand(1, 100);
    if (!in_array($random, $numbers) ) {
        $numbers[] = $random;
    } else {
        $i--;
    };
    
};
    
    


var_dump($numbers);
?>