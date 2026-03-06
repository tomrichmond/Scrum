<?php

namespace Tests\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\Mage;
use Src\Player;
use Src\Rogue;
use Src\Warrior;

class TestPlayer extends TestCase
{
    public function testWarriorMove(): void
    {

        $warrior = new Warrior();
        $this->assertEquals("Warrior moves forward", $warrior->move());
    }

    public function testMageMove(): void
    {
        $mage = new Mage();
        $this->assertEquals("Mage teleports", $mage->move());
    }

    public function testRogueMove(): void
    {
        $rogue = new Rogue();
        $this->assertEquals("Rogue sneaks", $rogue->move());
    }
}
