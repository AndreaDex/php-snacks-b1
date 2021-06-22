<?php 
/* Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers = $db['teachers'];
$pm = $db['pm'];
/* var_dump($teachers);
var_dump($pm); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>

</head>
<body>
<div  style="background-color:grey;">
<h2>Insegnanti</h2>
    <?php for ($i=0; $i <count($teachers) ; $i++) {
        $insegnante = $teachers[$i];
        
        ?>
        <p>Nome: <?php echo $insegnante['name']; ?></p>
        <p>Cognome <?php echo $insegnante['lastname']; ?></p>
        
    <?php } ?>
</div>
    
<div  style="background-color:lightgreen;">
<h2>Pm</h2>
    <?php for ($i=0; $i <count($pm) ; $i++) {
        $p = $teachers[$i];
        
        ?>
        <p>Nome: <?php echo $p['name']; ?></p>
        <p>Cognome <?php echo $p['lastname']; ?></p>
        
    <?php } ?>
</div>
    
</body>
</html>