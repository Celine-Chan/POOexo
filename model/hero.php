<?php

class Hero extends Character
{
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;

    /**
     * Get the value of _weapon
     */
    public function get_weapon()
    {
        return $this->_weapon;
    }

    /**
     * Set the value of _weapon
     *
     * @return  self
     */
    public function set_weapon($_weapon)
    {
        $this->_weapon = $_weapon;

        return $this;
    }

    /**
     * Get the value of _weaponDamage
     */
    public function get_weaponDamage()
    {
        return $this->_weaponDamage;
    }

    /**
     * Set the value of _weaponDamage
     *
     * @return  self
     */
    public function set_weaponDamage($_weaponDamage)
    {
        $this->_weaponDamage = $_weaponDamage;

        return $this;
    }

    /**
     * Get the value of _shield
     */
    public function get_shield()
    {
        return $this->_shield;
    }

    /**
     * Set the value of _shield
     *
     * @return  self
     */
    public function set_shield($_shield)
    {
        $this->_shield = $_shield;

        return $this;
    }

    /**
     * Get the value of _shieldValue
     */
    public function get_shieldValue()
    {
        return $this->_shieldValue;
    }

    /**
     * Set the value of _shieldValue
     *
     * @return  self
     */
    public function set_shieldValue($_shieldValue)
    {
        $this->_shieldValue = $_shieldValue;

        return $this;
    }

    //method attacked
    public function attacked($attackHero)
    {
        $noProtectedHit = $attackHero - $this->get_shieldValue();
        if ($noProtectedHit >= 0) {
            $this->setHealth($this->getHealth() - $noProtectedHit);
        }
        $this->addRage(30);
        //ou correction: $this->addrage();
    }

    //method add rage
    //ajoute 30 à chaque attacked
    public function addRage($addRageHero) 
    {
        $this->setRage($this->getRage() + $addRageHero);
        //ou correction:
        //parent::setrage(parent::getRage() + 30);
    }

    //construct
    function __construct($startHealth, $startRage, $weapon, $weaponDamage, $shield, $shieldValue)
    {
        parent::__construct($startHealth, $startRage);
        $this->set_weapon($weapon);
        $this->set_weaponDamage($weaponDamage);
        $this->set_shield($shield);
        $this->set_shieldValue($shieldValue);
    }

    //ou construct avec array
    //public function __construct($arrayHero)
    // {
    //     parent::__construct($heroArray["health"], $heroArray["rage"]);
    //     $this->set_weapon($heroArray["weapon"])->set_weaponDamage($heroArray["damage"])->set_shield($heroArray["shield"])->set_shieldValue($heroArray["armor"]);
    // }
}