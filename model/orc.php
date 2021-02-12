<?php

class Orc extends Character
{
    private $_damage;

    /**
     * Get the value of _damage
     */
    public function get_damage()
    {
        return $this->_damage;
    }

    /**
     * Set the value of _damage
     *
     * @return  self
     */
    public function set_damage($_damage)
    {
        $this->_damage = $_damage;

        return $this;
    }

    public function attack($damageInit) {
        $this->set_damage($this->get_damage() + $damageInit);
    }

    function __construct($startHealth, $startRage, $damage)
    {
        parent::__construct($startHealth, $startRage);
        $this->set_Damage($damage);
    }
}
