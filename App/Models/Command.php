<?php
namespace App\Models;
use App\Service\CrudCommand;
class Command extends CrudCommand{
    private $name;
    private $description;
    private $price;

    public function __construct($name, $description, $price){
        $this->name = $name;
        $this->description = $description ;
        $this->price = $price;
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
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

}
// $obj = new Command('send email', 'about email', 123);
// var_dump($obj);
