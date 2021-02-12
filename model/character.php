<?php

class Character {
    //attributs
    private $_health;
    private $_rage;

    /**
     * get life value
     * @return int
     */
    //methods
    public function getHealth() {
        return $this->_health;
    }

    public function setHealth($startHealth) {
        $this->_health = $startHealth;
        return $this;
    }

    public function getRage() {
        return $this->_rage;
    }

    public function setRage($startRage) {
        $this->_rage = $startRage;
        return $this;
    }

    public function __construct($startHealth, $startRage)
    {
        $this->setHealth($startHealth);
        $this->setRage($startRage);
    }

}

