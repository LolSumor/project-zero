<?php
namespace Zero;

class Tile
{
    public $id = 0;
    public $type = 0;

    public $isWalkable = false;

    public function __construct($id, $type, $walkable)
    {
        $this->id = $id;
        $this->type = $type;

        $this->isWalkable = $walkable;
    }
}