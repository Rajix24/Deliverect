<?php
namespace App\Service; 
use Config\Database;
use\PDO;

class CrudUser{
    public function save ($username,$address ,$email, $password) {
        $conn = Database::connect();
        $sql = 'INSERT INTO users (username, address, email, password) VALUES (:username, :address, :email , :password)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }
    public function findOne($id){
        $conn = Database::connect();
        $sql = 'SELECT * FROM users WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
        public function getALL(){
        $conn = Database::connect();
        $sql = "SELECT * FROM users;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
        public function delete($id){
        $conn = Database::connect();
        $sql = 'DELETE FROM users WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
        public function update($id, $username, $address , $email, $password){
        $conn = Database::connect();
        $sql = 'UPDATE users SET username = :username, address = :address ,email = :email , password = :password WHERE id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':address', $$address);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }

}