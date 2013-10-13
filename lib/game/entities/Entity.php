<?php
namespace Zero;

class Entity
{
    // Collision Radius = 1 Tile
    const COLLISION_RADIUS = 1;

    // Default Speed = 1 Tile
    const DEFAULT_SPEED = 1;

    public $name = null;

    public $health = null;
    public $mana = null;

    public $rank = 0;

    public $x = 0;
    public $y = 0;

    public $skin = 0;

    private $tileMap = null;

    public function getTileMap()
    {
        return $this->tileMap;
    }

    public function __construct($name, $health, $mana, $rank, $x, $y, $skin)
    {
        $this->name = $name;

        $this->health = $health;
        $this->mana = $mana;

        $this->rank = $rank;

        $this->x = $x;
        $this->y = $y;

        $this->skin = $skin;
    }

    // hitTestEntity(Entity $entity) -- Tests for collision or 'range'
    public function hitTestEntity($entity)
    {
        // Calculated distance
        $distance = sqrt((pow($entity->x - $this->x, 2) + (pow($entity->y - $this->y, 2))));

        // If further than the radius -> return false
        if ($distance > Entity::COLLISION_RADIUS) return false;

        return true;
    }

    public function handleMovement($movingUp, $movingLeft, $movingDown, $movingRight)
    {
        // Add speed accordingly to the booleans
        if ($movingUp) $this->y -= Entity::DEFAULT_SPEED;
        else if ($movingLeft) $this->x -= Entity::DEFAULT_SPEED;
        else if ($movingDown) $this->y += Entity::DEFAULT_SPEED;
        else if ($movingRight) $this->x += Entity::DEFAULT_SPEED;
    }
}