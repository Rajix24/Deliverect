<?php
namespace App\Controller;
class HandleRole{
    public function checkRole($role){
        if ($role == 'admin') {
            header('location : ../../view/home.php');
        }
        if ($role == 'client') {
            header('location: ../../view/client.php');
        }
        if ($role == 'livreur') {
            header('location: ../../view/livreur.php');
        }
    }
}