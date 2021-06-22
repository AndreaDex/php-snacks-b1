<?php 
/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$paragrafo = "Alle meraviglie del creato noi chiediam progenie
perché mai si estingua la rosa di bellezza,
e quando ormai sfiorita un dì dovrà cadere,
possa un suo germoglio continuarne la memoria:
ma tu, solo devoto ai tuoi splendenti occhi,
bruci te stesso per nutrir la fiamma di tua luce
creando miseria là dove c’è ricchezza,
tu nemico tuo, troppo crudele verso il tuo dolce io.
Ora che del mondo sei tu il fresco fiore
e l’unico araldo di vibrante primavera,
nel tuo stesso germoglio soffochi il tuo seme
e, giovane spilorcio, nell’egoismo ti distruggi.
Abbi pietà del mondo o diverrai talmente ingordo
da divorar con la tua morte quanto a lui dovuto." ;
var_dump($paragrafo);

$paragrafoSeparato = explode( '.', $paragrafo, -1);

var_dump($paragrafoSeparato);
?>