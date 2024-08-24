<?php

namespace Controllers;

use Models\Character;
use Models\Skills;

class CombatController {
    public static function takeDamage(Character $character, $damage) {
        $character->getStats()->setHealth($character->getStats()->getHealth() - $damage);
        echo "{$character->getName()} takes {$damage} damage.<br> {$character->getName()}'s health is now {$character->getStats()->getHealth()}.<br>";
    }

    public static function attack(Character $attacker, Character $defender) {
        // Check if attacker is Orderus and can use skills
        if ($attacker->getName() === "Orderus" && rand(0, 100) / 100 < Skills::DOUBLE_STRIKE_CHANCE) {
            // Use Double Strike skill
            Skills::doubleStrike($attacker, $defender);
            return;
        }

        // Normal attack
        self::singleAttack($attacker, $defender);
    }
    
    public static function singleAttack(Character $attacker, Character $defender) {
        $damage = max(0, $attacker->getStats()->getStrength() - $defender->getStats()->getDefence());

        // Apply defensive skill if the defender is the Orderus
        if ($defender->getName() === "Orderus" && rand(0, 100) / 100 < Skills::MAGIC_SHIELD_CHANCE) {
            $damage = Skills::useDefensiveSkill($defender, $damage);
        }

        CombatController::takeDamage($defender,$damage);
    }

    
}