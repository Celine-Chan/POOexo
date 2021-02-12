<?php

class Car
{
    // attributs
    public $wheels = 4;
    private $_color = "red";

    // methodes
    public function honk()
    {
        return 'BEEEEEP';
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }

    function __construct()
    {
        echo 'YEAHHHHHHHHHHHHHHH <br>';
    }
}

class BankAccount
{

    private $_sold;

    // getter
    public function getSold()
    {
        return $this->_sold;
    }
    // setter
    public function setSold($startSold)
    {
        return $this->_sold = $startSold;
    }

    // methode ajout money
    public function addMoney($money)
    {
        $this->_sold += $money;
        echo 'Votre nouveau solde est de ' . $this->getSold() . '€';
    }

    // methode debiter money
    public function takeMoney($money)
    {
        $this->_sold -= $money;
        echo 'Votre nouveau solde est de ' . $this->getSold() . ' € <br>';
    }

    public function howMuchMoney()
    {
        echo '<br> Votre solde est de ' . $this->getSold() . ' € à la date du ' . date('j-m-Y') . '<br>';
    }


    function __construct($startSold)
    {
        $this->setSold($startSold);
        echo 'Bienvenue, Mr DOE, votre compte a bien été créer ! <br>';
        echo 'Votre solde est de ' . $this->getSold() . ' € <br>';
    }
}


$carObject = new Car;

echo 'ma voiture est de couleur ' . $carObject->getColor() . '<br>';
echo 'ma voiture dispose de ' . $carObject->wheels . ' roues <br>';
echo 'lorsque j\'appuie sur le klaxon, elle emet le bruit ' . $carObject->honk()  . '<br>';

$carObject->wheels = 3;
$carObject->setColor('blue');

echo 'ma voiture dispose de ' . $carObject->wheels . ' roues <br>';
echo 'ma voiture est de couleur ' . $carObject->getColor() . '<br>';

echo '<hr>';

$bankAccountObject = new BankAccount(500);

$bankAccountObject->takeMoney(50);
$bankAccountObject->takeMoney(6.90);
$bankAccountObject->addMoney(100);
$bankAccountObject->howMuchMoney();


