<?php


// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d’istanza
//  che abbiamo visto stamattina e create un file index.php in cui:
// è definita una classe ‘Movie’
// all’interno della classe sono dichiarate delle variabili d’istanza
// all’interno della classe è definito un costruttore
// all’interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

include __DIR__ . '/class/movieClass.php';

$backToTheFuture=new Movie('Ritorno al futuro','Back to the Future',1985,['Michael J. Fox','Christopher Lloyd']);

// var_dump($backToTheFuture);

$altrimentiCiArrabbiamo=new Movie('...altrimenti ci arrabbiamo!','...altrimenti ci arrabbiamo!',1974,['Terence Hill', 'Bud Spencer'],'it');

// var_dump($altrimentiCiArrabbiamo);



// BONUS:
// inserite 4/5 istanze in un array, e ciclatelo per stampare i dati nella
//  pagina come una lista di card. (se avete inserito l’immagine del film stampare anche l ímmagine)
// aggiungete nel film una proprità di tipo array per gestire gli attori che hanno recitato in quel film
// inizialmente gestite gli attori come stringe
// successivamente create una seconda classe Actor per rappresentare gli attori
// nella classe movie definite due metodi
// uno si occuperà di aggiungere un attore al cast (controllando che sia già stato aggiunto)
// l’altro farà il procedimento opposto

$AttilaFlagelloDiDio=new Movie('Attila flagello di Dio','Attila flagello di Dio',1982,['Diego Abatantuono','Rita Rusić'],'it');
$terminator=new Movie('Terminator','The Terminator',1984,['Arnold Schwarzenegger','Linda Hamilton']);
// var_dump($AttilaFlagelloDiDio,$terminator);

$arrayFilm=[
    $backToTheFuture,
    $altrimentiCiArrabbiamo,
    $AttilaFlagelloDiDio,
    $terminator
];

var_dump($arrayFilm);
?>

<div>
    <h1>Html</h1>
    <?php 
    foreach($arrayFilm as $cards){
     
?>
<ul>
    <li>
       <?php foreach( $cards as $key=> $card){
      echo("$key: $card <br>");
       
        } ?>
    </li>
</ul>
<?php
    }
    ?> 
    
</div>