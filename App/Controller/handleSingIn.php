<?php
namespace App\Controller;
use App\Models\User;
class HandleSingIn{
    private  $conn;

    function __construct($conn){
        $this->conn = $conn;
    }

    public function create()  {
        $handler = new User();
        $handler->setName($_POST['name']);
        $handler->setEmail($_POST['email']);
        $handler->setPass($_POST['pass']) ;

    }
}
