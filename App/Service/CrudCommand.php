<?php
namespace App\Service;
use Config\Database;
use\PDO;

class CrudCommand{
    public function save ($name,$description ,$price, $user_id, $vehicle_id) {
        $conn = Database::connect();
        $sql = 'INSERT INTO command (name, description, price, user_id, vehicle_id) VALUES (:name, :description, :price , :user_id, :vehicle_id)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':dommand_id', $vehicle_id);
        $stmt->execute();
    }
    public function findOne($id){
        $conn = Database::connect();
        $sql = 'SELECT * FROM command WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
        public function getALL(){
        $conn = Database::connect();
        $sql = "SELECT * FROM command;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
        public function delete($id){
        $conn = Database::connect();
        $sql = 'DELETE FROM command WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
        public function update($id, $name,$description ,$price, $user_id, $vehicle_id){
        $conn = Database::connect();
        $sql = 'UPDATE command SET name = :name, description = :description ,price = :price , user_id = :user_id, vehicle_id = :vehicle_id WHERE id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $vehicle_id);
        $stmt->execute();
    }

}