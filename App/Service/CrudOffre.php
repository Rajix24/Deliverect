<?php
namespace App\Service;
use Config\Database;
use\PDO;

class CrudOffre{
    public function save ($name,$description ,$price, $user_id, $dommand_id) {
        $conn = Database::connect();
        $sql = 'INSERT INTO offer (name, description, price, user_id, dommand_id) VALUES (:name, :description, :price , :user_id, :dommand_id)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':dommand_id', $dommand_id);
        $stmt->execute();
    }
    public function findOne($id){
        $conn = Database::connect();
        $sql = 'SELECT * FROM offer WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
        public function getALL(){
        $conn = Database::connect();
        $sql = "SELECT * FROM offer;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
        public function delete($id){
        $conn = Database::connect();
        $sql = 'DELETE FROM offer WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
        public function update($id, $name,$description ,$price, $user_id, $dommand_id){
        $conn = Database::connect();
        $sql = 'UPDATE command SET name = :name, description = :description ,price = :price , user_id = :user_id, dommand_id = :dommand_id WHERE id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $dommand_id);
        $stmt->execute();
    }

}