<?php

namespace Src;

use InvalidArgumentException;

class Player
{
    private string $playerType;

    public function __construct(string $playerType)
    {
        $this->playerType = $playerType;
    }

    public function move(): string
    {
        switch ($this->playerType) {
            case "Warrior":
                return "Warrior moves forward";

            case "Mage":
                return "Mage teleports";

            case "Rogue":
                return "Rogue sneaks";

            default:
                throw new InvalidArgumentException("Invalid player type");
        }
    }
}
