run program:
    in project root:
        php -S localhost:8080 -t public 
        access http://localhost:8080
run unit tests:
    in project root:
        ./vendor/bin/phpunit tests/CharacterBuilderTest.php
        ./vendor/bin/phpunit tests/InitialTest.php
        - BattleControllerTest.php reveals a defect in the code
    Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 127942656 bytes) in /Users/mircea.dumitrescu/Practice/eMAG-Hero-Game/docker-php-sample/src/Controllers/CombatController.php on line 11
