<?php
class Bed extends Product{
    public $family;
    
    public function __construct($name, $price, $family, $category, $image)
    {
        Product::__construct($name, $price, $image, $category);
        $this->family = $family;
        
    }
}