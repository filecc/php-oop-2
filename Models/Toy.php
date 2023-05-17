<?php
class Toy extends Product{
    public $family = 'Toy';
    
    public function __construct($name, $price, $category, $image)
    {
       Product::__construct($name, $price, $category, $image);
    }
}