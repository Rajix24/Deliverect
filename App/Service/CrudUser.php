<?php
namespace App\Service; 
use App\Models\User;
use Config\Database;
use PDO;

class CrudUser{
    protected $username;
    protected $address;
    protected $email; 
    protected $password;
    protected $role;
    public function save () {
        $conn = Database::connect();
        $sql = "INSERT INTO users (username, address, email, password, role_id)
        VALUES (:username, :address, :email, :password, :role_id)"; 
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':role_id', $this->role);
        $stmt->execute();
        echo "testing";
    }
    public function findOne($email){
        $conn = Database::connect();
        $sql = 'SELECT * FROM users WHERE email ='.$email.'LIMIT 1 ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $data = $stmt->fetch();
        return $data;
    }
        public function getALL(){
        $conn = Database::connect();
        $sql = "SELECT * FROM users;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $data = $stmt->fetchAll();
        return $data;
    }
        public function delete($id){
        $conn = Database::connect();
        $sql = 'DELETE FROM users WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
        public function update($id){
        $conn = Database::connect();
        $sql = 'UPDATE users SET username = :username, address = :address ,email = :email , password = :password WHERE id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }



}