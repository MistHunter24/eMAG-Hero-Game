<?php

namespace Models;

class CharacterBuilder{

    private $name;
    private $stats;
    private $character;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getStats(){
        return $this->stats;
    }

    public function setStats($stats){
        $this->stats = $stats;
        return $this;
    }


    public function getName(){
        return $this->name;
    }

    public function build():Character{
        if($this->character ===null)
            $this->character = new Character($this->name, $this->stats);

        return $this->character;
    }
}