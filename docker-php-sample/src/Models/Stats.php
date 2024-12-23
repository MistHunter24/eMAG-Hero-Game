<?php

namespace Models;

class Stats {

private $health;
private $strength;
private $defence;
private $speed;
private $luck;

public function __construct($health, $strength, $defence, $speed, $luck) {
    $this->health = $health;
    $this->strength = $strength;
    $this->defence = $defence;
    $this->speed = $speed;
    $this->luck = $luck;
}

public function getHealth(){
    return $this->health;
}

public function setHealth($health){
    $this->health = $health;
}

public function getStrength(){
    return $this->strength;
}

public function setStrength($strength){
    $this->strength = $strength;
}

public function getDefence(){
    return $this->defence;
}

public function setDefence($defence){
    $this->defence = $defence;
}

public function getSpeed(){
    return $this->speed;
}

public function setSpeed($speed){
    $this->speed = $speed;
}


public function getLuck(){
    return $this->luck;
}

public function setLuck($luck){
    $this->luck = $luck;
}

}