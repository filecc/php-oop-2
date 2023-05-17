<?php


class ProductDog extends Product{
    public $category = 'Dog';
    public $family;
    
    public function __construct($name, $price, $family, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->family = $family;
        $this->image = $image;
    }
}