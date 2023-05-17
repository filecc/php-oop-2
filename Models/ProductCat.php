<?php


class ProductCat extends Product{
    public $family = 'Cat';
    public $category;
    
    public function __construct($name, $price, $category, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}