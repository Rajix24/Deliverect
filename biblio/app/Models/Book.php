<?php
namespace App\Models;
class Book{
    private $id;
    private $title;
    private $autor;
    private $categorie_id;
    private $reserve_id;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }


    public function getCategorie_id()
    {
        return $this->categorie_id;
    }

    public function setCategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    public function getReserve_id()
    {
        return $this->reserve_id;
    }


    public function setReserve_id($reserve_id)
    {
        $this->reserve_id = $reserve_id;

        return $this;
    }
}

