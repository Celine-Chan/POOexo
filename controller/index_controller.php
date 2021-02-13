<?php

require 'model/character.php';
require 'model/hero.php';
require 'model/orc.php';

//Character
$characterObject = new Character(500, 100);

//Hero
$heroObject = new Hero(2000, 0, 'Master Sword', 250, 'Hylian', 600);

//ou méthode avec tableau
//$heroArray = ['health' => 2000, 'rage' => 0, 'weapon' => 'Master Sword', 'weaponDamage' => 250, 'shield' => 'Hylian', 'shieldValue' => 600];
// $heroObject = new Hero($heroArray);

$heroObject->attacked(200);

//Orc
$orcObject = new Orc(500, 0, 0);

$orcObject->attack(rand(600, 800));

//bonus
$heroObject->attacked(500);
$heroObject->attacked(1000);
$heroObject->attacked(1500);
$heroObject->attacked(700);
$heroObject->attacked(1000);
$heroObject->attacked(500);
$heroObject->attacked(800);




