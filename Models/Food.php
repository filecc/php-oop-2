<?php
class Food extends Product{
    use Weight;
    public $family;
    
    public function __construct($name, $price, $family, $category, $image, $weight, $unit)
    {

        Product::__construct($name, $price, $category, $image);
        $this->family = $family;
        try {
            $this->setWeight($weight, $unit);
        } catch (Exception $e) {
           echo 'Errore: '.$e->getMessage();
        }
       
        
    }
}