<?php
class Toy extends Product{
    public $family = 'Toy';
    
    public function __construct($name, $price, $category, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}