<?php
namespace App\Models;
use App\Service\CrudCommand;
class Command extends CrudCommand{


    // public function __construct($name, $description, $price){
    //     $this->name = $name;
    //     $this->description = $description ;
    //     $this->price = $price;
    // }
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


    public function getVehicule_id()
    {
        return $this->vehicule_id;
    }


    public function setVehicule_id($vehicule_id)
    {
        $this->vehicule_id = $vehicule_id;

        return $this;
    }

    public function getClient_id()
    {
        return $this->client_id;
    }

    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
// $obj = new Command('send email', 'about email', 123);
// var_dump($obj);
