<?php
namespace Zero;

class PlayerEntity extends Entity
{
    public function __construct($name, $health, $mana, $rank, $x, $y, $skin)
    {
        parent::__construct($name, $health, $mana, $rank, $x, $y, $skin);
    }
}