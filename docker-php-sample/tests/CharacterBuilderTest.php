<?php 

use PHPUnit\Framework\TestCase;
use Models\Character;
use Models\CharacterBuilder;
use Models\Stats;

class CharacterBuilderTest extends TestCase {

    public function testCharacterInitialization() {
        $stats = new Stats(100, 100, 100, 100, 100);
        $builder = new CharacterBuilder();
        $builder->setName("Orderus")
                ->setStats($stats)
                ->build();

        $character = $builder->build();

        $this->assertInstanceOf(Character::class, $character);

        $this->assertEquals("Orderus",$character->getName());
        $this->assertEquals($stats,$character->getStats());
    }

    public function testBuildCharacterWithoutStats() {
        $characterBuilder = new CharacterBuilder();
        
        $this->expectException(\TypeError::class);
        $character = $characterBuilder->setName('Hero')
                                      ->build();
    }
}