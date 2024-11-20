run program:
    in project root:
        php -S localhost:8080 -t public
        access: http://localhost:8080

run unit tests:
    in project root:
        ./vendor/bin/phpunit tests/CharacterBuilderTest.php
        or
        ./vendor/bin/phpunit tests/InitialTest.php

        - BattleControllerTest.php reveals a defect in the code

Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 127942656 bytes) 
in /Users/mircea.dumitrescu/Practice/eMAG-Hero-Game/docker-php-sample/src/Controllers/CombatController.php on line 11


Fight example:
Starting battle!
Orderus encounters Enemy 1!
Orderus's health is 100.
Enemy 1 attacks first!
Orderus takes 5 damage.
Orderus's health is now 95.
Enemy 1 takes 12 damage.
Enemy 1's health is now 68.
Orderus takes 5 damage.
Orderus's health is now 90.
Enemy 1 takes 12 damage.
Enemy 1's health is now 56.
Orderus uses Defensive Skill and takes only half damage!
Orderus takes 2.5 damage.
Orderus's health is now 87.5.
Enemy 1 takes 12 damage.
Enemy 1's health is now 44.
Orderus takes 5 damage.
Orderus's health is now 82.5.
Enemy 1 takes 12 damage.
Enemy 1's health is now 32.
Orderus takes 5 damage.
Orderus's health is now 77.5.
Enemy 1 takes 12 damage.
Enemy 1's health is now 20.
Orderus takes 5 damage.
Orderus's health is now 72.5.
Enemy 1 takes 12 damage.
Enemy 1's health is now 8.
Orderus takes 5 damage.
Orderus's health is now 67.5.
Enemy 1 takes 12 damage.
Enemy 1's health is now -4.
Enemy 1 has been defeated!
Orderus slays Enemy 1!
Orderus encounters Enemy 2!
Orderus's health is 67.5.
Enemy 2 attacks first!
Orderus slays Enemy 2!
Orderus encounters Enemy 3!
Orderus's health is 67.5.
Enemy 3 attacks first!
Orderus slays Enemy 3!
Orderus encounters Enemy 4!
Orderus's health is 67.5.
Enemy 4 attacks first!
Orderus slays Enemy 4!
Orderus encounters Enemy 5!
Orderus's health is 67.5.
Enemy 5 attacks first!
Orderus slays Enemy 5!
Orderus wins the battle!
Battle ended.
