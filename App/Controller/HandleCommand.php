<?php
namespace App\Controller;
// session_start();
use App\Models\Command;
class HandleCommand{
    public function insterCommand(){
        if (empty($_POST['name'])) {
            return;
        }
        session_start();
        $command = new Command();
        $command->setName($_POST['name']);
        $command->setDescription($_POST['description']);
        $command->setPrice($_POST['price']);
        $command->setClient_id($_SESSION['id']);
        $command->setVehicule_id($_POST['vehicules']);
        $command->save();
    }
}