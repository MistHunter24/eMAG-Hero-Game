<?php

use Controllers\BattleController;
use Models\Character;
use Models\CharacterBuilder;
use Models\Stats;
use Models\Skills;
use PHPUnit\Framework\TestCase;

class BattleControllerTest extends TestCase {

    public function testHeroWinsBattle(){
        $stats = new Stats(100, 100, 100,100,100);
        $orderusBuilder = new CharacterBuilder();
        $orderusBuilder->setName("Orderus")
                ->setStats($stats);

        $enemies = [];

        for ($i = 1; $i<=2; $i++){
            $enemyBuilder = new CharacterBuilder();
            $enemyBuilder->setName("Enemy $i")
                        ->setStats($stats);
            $enemies[] = $enemyBuilder;
        }
        $battleController = new BattleController($orderusBuilder, $enemies);
        $result = $battleController->start();

        $this->assertTrue($result);
        $this->assertGreaterThan(0, $orderusBuilder->getStats()->getHealth());
    }
}