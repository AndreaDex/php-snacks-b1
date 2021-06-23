<?php 
/* Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */


$class = [
   
    [
        'name' => 'Mario',
        'lastname'=> 'Rossi',
        'voti'=> [
            'inglese'=> 10,
            'matematica'=> 8,
            'italiano'=> 9,
        ]
        
    ],
    [
        'name' => 'Luciano',
        'lastname'=> 'Verdi',
        'voti'=> [
            'inglese'=> 8,
            'matematica'=> 8,
            'italiano'=> 7,
        ]
        
    ],
    [
        'name' => 'Pio',
        'lastname'=> 'Bianchi',
        'voti'=> [
            'inglese'=> 6,
            'matematica'=> 7,
            'italiano'=> 9,
        ]
        
    ],
    [
        'name' => 'Marcello',
        'lastname'=> 'Gialli',
        'voti'=> [
            'inglese'=> 1,
            'matematica'=> 10,
            'italiano'=> 3,
        ]
        
    ],

];

//var_dump($class);

/* for ($i=0; $i <count($class) ; $i++) { 
    $student = $class[$i];
    echo $student['name'];
    echo $student['lastname'];
    $sommavoti = array_sum($student['voti']);
    $media = round($sommavoti/3);
    echo $media;
    
};
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>
    

<?php for ($i=0; $i <count($class) ; $i++) { 
    $student = $class[$i];
    $sommavoti = array_sum($student['voti']);
    $media = round($sommavoti/3); ?>
   <div>
    <p>Nome: <?php echo $student['name']; ?></p> 
    <p>Cognome: <?php echo $student['lastname']; ?></p>
    <p>Media: <?php echo $media; ?></p>
   </div>
    
<?php } ?>
</body>
</html>