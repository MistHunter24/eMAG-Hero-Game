<?php

namespace Models;

class Character {
    private $name;
    private $stats;

    public function __construct($name, Stats $stats)
    {
        $this->name = $name;
        $this->stats = $stats;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function setStats($stats)
    {
        $this->stats = $stats;
    }

    public function isAlive()
    {
        return $this->stats->getHealth() > 0;
    }
}