<?php
class Food extends Product{
    public $family;
    public $category = 'Cucce';
    
    public function __construct($name, $price, $family, $category, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->family = $family;
        $this->category = $category;
        $this->image = $image;
    }
}