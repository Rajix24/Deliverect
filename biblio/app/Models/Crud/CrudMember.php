<?php
namespace App\Models\Crud;
use App\Config\Database;
use App\Models\Member;
use PDO;
class CrudMember{

    public function getAll(){
        $conn = Database::ccontact();
        $sql = 'SELECT * FROM users';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Member::class);
        $result = $stmt->fetchAll();
        return $result;
    }
        public function Insert($name, $email, $password){
        $conn = Database::ccontact();
        $sql = 'INSERT INTO member(name, email, password) VALUES (:name, :email, :password)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }
        public function Delete($id){
        $conn = Database::ccontact();
        $sql = 'DELETE FROM member WHERE id = : id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}