<?php

require_once 'inc/funktionen.inc.php';
spl_autoload_register('autoload');

//require_once "traits/Streichelbar.php";
//require_once "classes/Tier.php";
//require_once "classes/Wellensittich.php";
//require_once "classes/Katze.php";
//require_once "classes/Loewe.php";

// <b>Fatal error</b>:  
// Uncaught Error: 
// Cannot instantiate abstract class AbstractTier
// index.php:10

//$tier = new AbstractTier(); // error kein new mit abstract
//$tier->alter = 4;

$wellensittich = new Wellensittich();
$wellensittich->alter = 4;
$wellensittich->fluegel = ["linker Flügel", "rechter Flügel"];



$katze = new Katze();
$katze->alter=4;
$katze->sageMiau();
$katze->streichel();

//var_dump($tier); // Fehlermeldung wegen abstract

var_dump($wellensittich);
$wellensittich->zeigeMeinenSpeicher();
$wellensittich->streichel();

var_dump($katze);

$loewe = new Loewe();
echo "<br><br>jetzt kommt der Fehler!<br>";
echo "<br><br>den Löwen darf man nicht streicheln! ;-)<br>";

$loewe->streichel();