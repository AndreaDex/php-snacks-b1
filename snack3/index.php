<?php 
/* Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. */

$posts = [

    '12/05/2020' => [
        [
            'title' => 'Pasta con Tonno',
            'author' => 'Bello Figo',
            'text' => 'Tutti sanno che a me piace pasta con tonno'
        ],
        [
            'title' => 'Raul bova',
            'author' => 'Bello FigoGu',
            'text' => 'Sono bello come Raulo Bova Bova Bova'
        ],
    ],
    '13/06/2020' => [
        [
            'title' => 'Ora esatta',
            'author' => 'Cristian Ice',
            'text' => 'Aiutiamoli a casa loro'
        ]
    ],
    '15/07/2021' => [
        [
            'title' => 'Padre e figlio',
            'author' => 'Ruggero De I Timidi',
            'text' => 'Dopo avere coricato il figlio'
        ],
        [
            'title' => 'Timidamente io',
            'author' => 'Ruggero De I Timidi',
            'text' => 'Quanto è stata amara quella estate al mare'
        ],
       
    ],
];

//var_dump(array_keys($posts));

//var_dump($posts['12/05/2020'][0]);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>

<?php foreach ($posts as $key => $value){ ?>
  
  <h2><?php echo $key; ?> </h2>

  <?php for ($i=0; $i < count($value) ; $i++) { 
    $item = $value[$i]; ?>

    <h4>Titolo: <?php echo $item['title'];?></h4>
    <p>Autore: <?php echo $item['author']; ?></p>
    <p>Testo: <?php echo $item['text']; ?></p>
      
  <?php } ?>
    
  

     <?php }
      ?>

 
</body>
</html>