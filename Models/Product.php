<?php


class Product{
    public 
    $name, $price, $category, $image; 

    public function __construct(string $name, string $price, string $image, string $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}

