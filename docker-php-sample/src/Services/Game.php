<?php

namespace Services;

use Models\CharacterBuilder;
use Models\Stats;
use Controllers\BattleController;


class Game{

    public static function createGame(){

    $orderusStats = new Stats(100, 20, 10, 5,100); 
    $enemyStats = new Stats(80, 15, 8, 6,100);

    $OrderusBuilder = new CharacterBuilder();
    $OrderusBuilder->setName('Orderus')
                            ->setStats($orderusStats);

    $enemies = [];
    for ($i = 1; $i <= 5; $i++) {
        $enemyBuilder = new CharacterBuilder();
        $enemyBuilder->setName("Enemy $i")
                    ->setStats($enemyStats); 
        $enemies[] = $enemyBuilder; 
    }

    $battle = new BattleController($OrderusBuilder, $enemies);
    $battle->start();
    }
}

