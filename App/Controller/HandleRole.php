<?php
namespace App\Controller;
class HandleRole{
    public function checkRole($role){
        if ($role == '1') {
            header('location : ../../views/home.php');
        }
        if ($role == '2') {
            header('location: ../../views/client.php');
        }
        if ($role == '3') {
            header('location: ../../views/livreur.php');
        }
    }
    public function test(){
        return "hi to you";
    }
}