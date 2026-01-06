<?php
namespace App\Models;
use App\Service\CrudOffre;
class Offer extends CrudOffre{
    private $name;
    private $description;
    private $price;
     
 
    public function __construct($name, $description, $price){
        $this->name = $name;
        $this->description = $description ;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}