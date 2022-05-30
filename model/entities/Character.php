<?php

// Mot clé public, protected, private
// la plus par du temps les méthodes (function) sont définies en public
// les propriétés la plus par du temps sont définies en private
class Character
{
    private $name;
    protected $hp;
    private $atk;

    /* public function __construct($name, $hp, $atk) // __construct est une méthode magique qui est appelée automatiquement lors de l'instanciation d'un objet
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->atk = $atk;
    } */

    public function getName()
    { // getName() est une méthode plus couramment appelé getter qui permet de récupérer la valeur de l'attribut $name d'une propriété privée
        return $this->name; // $this permet d'accéder à l'attribut $name cad 'Jean'
    }

    public function setName($newname)
    { // setName() est une méthode plus couraament appelé setter qui permet de modifier la valeur de l'attribut $name
        $this->name = $newname;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function autoAttack($target)
    {
        $target->hp -= $this->atk;
    }

    public function __toString()
    {
        return $this->name;
    }

}
