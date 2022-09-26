<?php


// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d’istanza
//  che abbiamo visto stamattina e create un file index.php in cui:
// è definita una classe ‘Movie’
// all’interno della classe sono dichiarate delle variabili d’istanza
// all’interno della classe è definito un costruttore
// all’interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

include __DIR__ . '/class/movieClass.php';

$backToTheFuture=new Movie('Ritorno al futuro','Back to the Future',1985);

var_dump($backToTheFuture);

$altrimentiCiArrabbiamo=new Movie('...altrimenti ci arrabbiamo!','...altrimenti ci arrabbiamo!',1974,'it');

var_dump($altrimentiCiArrabbiamo);