<?php
namespace Zero;

include 'TileType.php';
include 'Tile.php';

class TileMap
{
    public $width = 0;
    public $height = 0;

    public $map = array(array());
    public $userMap = array(array());

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;

        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $this->map[$x][$y] = new Tile(null, TileType::FREE, true);
                $this->userMap[$x][$y] = "0";
            }
        }
    }

    public function getTileObjectAt($x, $y)
    {
        if ($x > $this->width) return ApplicationError::TILE_ERROR;
        if ($y > $this->height) return ApplicationError::TILE_ERROR;

        return $this->map[$x][$y];
    }
}