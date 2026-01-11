<?php 
namespace App\Controller;
use App\Models\User;
use App\Controller\HandleRole;
class HandleLogIn{
    public function checkUser(){
        session_start();
        if ($_SESSION['email'] !== null ) {
            $user = new User();
            $data = $user->findOne($_POST['email']);
            $_SESSION['username'] = $data->username;
            $role = new HandleRole();
            $role->checkRole($data->role);
            exit();
        }
        $user = new User();
        $data = $user->findOne($_POST['email']);
        if (empty($data->email)){
            header("location: ../../views/login.php?error = your accoute not found pleas sign in");
        }
        $role = new HandleRole();
        $role->checkRole($data->role);
    }
}
$data = new HandleLogIn();
$data->checkUser();