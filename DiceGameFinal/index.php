<?php

include 'Game.class.php';
include 'NumGenerator.class.php';
include 'MyDice.class.php';
include 'MyDB.class.php';

$myGame = new Game('localhost', 'root', '', 'Krzysztof-DB');
$myGame->Play();






//$guess= $myGame->SaveEachGuess();

//foreach ($guess as $key) {
//echo $key;
//};

















?>