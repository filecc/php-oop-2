<?php


class Product{
    public 
    $name, $price, $category, $image; 

    public function __construct($name, $price, $image, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}

