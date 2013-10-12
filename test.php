<?php
namespace Zero;
include "lib/Application.php";

include "lib/game/entities/Entity.php";
include "lib/game/entities/PlayerEntity.php";

$returnValue = Application::main();

if ($returnValue != 0) {
    die("Error: " . $returnValue);
}

$playerOne = new PlayerEntity("Bustanity", 100, 214, 2, 2, 0, 2);
$playerTwo = new PlayerEntity("Tietoturva", 42, 120, 1, 1, 0, 5);

if ($playerOne->hitTestEntity($playerTwo)) {
    echo "*" . $playerOne->name . " hits " . $playerTwo->name . " with his sword*";
} else {
    echo $playerOne->name . " is too far away from " . $playerTwo->name;
}