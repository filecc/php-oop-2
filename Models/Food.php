<?php
class Food extends Product{
    public $family;
    
    public function __construct($name, $price, $family, $category, $image)
    {

        Product::__construct($name, $price, $category, $image);
        $this->family = $family;
        
    }
}