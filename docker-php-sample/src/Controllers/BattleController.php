<?php

namespace Controllers;

use Models\Character;
use Models\CharacterBuilder;
//logica asta ar trebui sa fie mutata in controller. best case doar echo-urile sa ramana aici


class BattleController {
    private $Orderus;
    private $enemies = [];
    private $currentEnemyIndex = 0;

    public function __construct(CharacterBuilder $OrderusBuilder, array $enemyBuilders) {
        $this->Orderus = $OrderusBuilder->build(); // Build the hero character
        foreach($enemyBuilders as $builder) {
            $this->enemies[] = $builder->build(); // Build each enemy character
        }
    }
    

    public function start() {
        echo "Starting battle!<br>";

        while ($this->Orderus->isAlive() && $this->currentEnemyIndex < count($this->enemies)) {
            $Beast = $this->enemies[$this->currentEnemyIndex];
            $this->fight($this->Orderus, $Beast);

            if ($this->Orderus->isAlive()) {
                $this->currentEnemyIndex++;
            } else {
                echo "{$this->Orderus->getName()} was defeated.<br>";
                break;
            }
        }

        if ($this->Orderus->isAlive()) {
            echo "{$this->Orderus->getName()} wins the battle!<br>";
        }

        echo "Battle ended.<br>";
    }

    private function fight(Character $Orderus, Character $Beast) {

        echo "{$Orderus->getName()} encounters {$Beast->getName()}!<br>";
        echo "Orderus's health is {$Orderus->getStats()->getHealth()}.<br>";

        // Determine who attacks first based on speed

        $firstAttacker = ($Orderus->getStats()->getSpeed() >= $Beast->getStats()->getSpeed()) ? $Orderus : $Beast;
        $secondAttacker = ($firstAttacker === $Orderus) ? $Beast : $Orderus;

        echo "{$firstAttacker->getName()} attacks first!<br>";

        while ($Orderus->isAlive() && $Beast->isAlive()) {
            
            CombatController::attack($firstAttacker, $secondAttacker);

            if (!$secondAttacker->isAlive()) {
                echo "{$secondAttacker->getName()} has been defeated!<br>";
                break;
            }
            CombatController::attack($secondAttacker, $firstAttacker);


            if (!$firstAttacker->isAlive()) {
                echo "{$firstAttacker->getName()} has been defeated!<br>";
                break;
            }
        }

        if ($Orderus->isAlive()) {
            echo "{$Orderus->getName()} slays {$Beast->getName()}!<br>";
        } else {
            echo "{$Orderus->getName()} was defeated by {$Beast->getName()}!<br>";
        }
    }
}