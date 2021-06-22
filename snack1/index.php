<?php
/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  */

$legaA = [
    
       [ "home"=> "Brescia",
        "away"=> "Pesaro",
        "homePoints"=> 86,
        "awayPoints" => 84,],
        [ "home"=> "Brindisi",
        "away"=> "Varese",
        "homePoints"=> 108,
        "awayPoints" => 84,],
        [ "home"=> "Cantu",
        "away"=> "Sassari",
        "homePoints"=> 106,
        "awayPoints" => 101,],
        [ "home"=> "Olimpya Milano",
        "away"=> "Cremona",
        "homePoints"=> 74,
        "awayPoints" => 66,],

];
//var_dump($legaA);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Lega A</h1>

    <?php for ($i=0; $i < count($legaA) ; $i++) { 
        $game = $legaA[$i];
        //var_dump($game);
        ?>
        <div>
        <span><?php echo $game["home"];?> - <?php echo $game["away"]; ?> | <?php echo $game["homePoints"];?> - <?php echo $game["awayPoints"]; ?></span>
        </div>
        
    <?php } ?>
</body>
</html>