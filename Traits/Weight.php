<?php

trait Weight {
    protected $weight;

    public function setWeight($weight, $unit){
        if(!is_int($weight) AND !is_double($weight)){
            throw new Exception('Il valore del peso deve essere un numero.');
        }
        $this->weight = $weight.$unit;
    }

    public function getWeight(){
        return $this->weight;
    }
}