<?php
/*
 * This file is for the core backend testing, not part of the final product.
 */

namespace Zero;
include "lib/Application.php";

include 'lib/game/stage/tiles/TileMap.php';

include "lib/game/entities/Entity.php";
include "lib/game/entities/PlayerEntity.php";

$returnValue = Application::main();

if ($returnValue != 0) {
    die("Error: " . $returnValue);
}

// Tilemap testing
$tileMap = new TileMap(32, 32);
$tile = $tileMap->getTileObjectAt(3, 5);
if ($tile->isWalkable) {
    echo "I can walk on this tile!<br/>";
}

// Entity testing
$playerOne = new PlayerEntity("Bustanity", 100, 214, 2, 2, 0, 2);
$playerTwo = new PlayerEntity("Tietoturva", 42, 120, 1, 1, -1, 5);

// Move player one tile up
// handleMovement(up, left, down, right) in this case moving up
$playerOne->handleMovement(true, false, false, false);

// Test for collision (if players can touch)
if ($playerOne->hitTestEntity($playerTwo)) {
    echo "*" . $playerOne->name . " hits " . $playerTwo->name . " with his sword*";
} else {
    echo $playerOne->name . " is too far away from " . $playerTwo->name;
}