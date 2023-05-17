<?php


class ProductCat extends Product{
    public $category = 'Cat';
    public $family;
    
    public function __construct($name, $price, $family, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->family = $family;
        $this->image = $image;
    }
}