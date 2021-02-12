<?php

require 'controller/index_controller.php';

//Character
// echo $characterObject->getHealth() . '<br>';
// echo $characterObject->getRage() . '<br>';


//Hero
echo 'La santé du Héro est de <strong>' . $heroObject->getHealth() . '</strong> points et sa rage est de <strong>' . $heroObject->getRage() .
'</strong> points. Son épée est la <strong>' . $heroObject->get_weapon() . '</strong> et ses dégâts sont de <strong>' . $heroObject->get_weaponDamage() . '</strong> points.
Son bouclier est le bouclier <strong>' . $heroObject->get_shield() . '</strong> et sa défense est de <strong>' . $heroObject->get_shieldValue() . '</strong> points.<br>';


//Orc
echo 'La santé de l\'Orc est de <strong>' . $orcObject->getHealth() . '</strong> points et sa rage est de <strong>' . $orcObject->getRage() . 
'</strong> points. Les dégâts de l\'Orc sont de <strong>' . $orcObject->get_damage() . '</strong> points.';