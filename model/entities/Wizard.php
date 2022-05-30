<?php

class Wizard extends Character
{
    private $mana = 200;

    public function getMana()
    {
        return $this->mana;
    }

    public function setMana($newmana)
    {
        $this->mana = $newmana;
    }

    /* public function manaAttack($target)
    {
        $target->hp -= $this->mana;
        $this->mana -= 10;
    } */
}
