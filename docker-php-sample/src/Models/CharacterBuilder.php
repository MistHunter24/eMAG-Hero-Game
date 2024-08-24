<?php

namespace Models;

class CharacterBuilder{

    private $name;
    private $stats;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setStats($stats){
        $this->stats = $stats;
        return $this;
    }

    public function build():Character{
        if($this->character ===null)
            $this->character = new Character($this->name, $this->stats);

        return $this->character;
    }
}