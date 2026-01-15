<?php
namespace App\Models;

class Reserve{
    private $id; 
    private $member_id; 
    private $book_id; 


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getMember_id()
    {
        return $this->member_id;
    }

    public function setMember_id($member_id)
    {
        $this->member_id = $member_id;

        return $this;
    }

    public function getBook_id()
    {
        return $this->book_id;
    }


    public function setBook_id($book_id)
    {
        $this->book_id = $book_id;

        return $this;
    }
}