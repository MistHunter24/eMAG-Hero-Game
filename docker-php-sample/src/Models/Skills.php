<?php

namespace Models;

use Controllers\CombatController;

class Skills {
    
    const DOUBLE_STRIKE_CHANCE = 0.1;
    const MAGIC_SHIELD_CHANCE = 0.2;

    public static function doubleStrike(Character $attacker, Character $defender) {
        echo "{$attacker->getName()} uses Double Strike!<br>";

        // Perform the first strike
        CombatController::singleAttack($attacker, $defender);

        // Perform the second strike if the defender is still alive
        if ($defender->isAlive()) {
            CombatController::singleAttack($attacker, $defender);
        } else {
        echo "Overkill!<br>";}
    }

    public static function useDefensiveSkill(Character $defender, $damage) {
        echo "{$defender->getName()} uses Defensive Skill and takes only half damage!<br>";
        return $damage / 2;
    }
    
    // Add more skills as needed
}