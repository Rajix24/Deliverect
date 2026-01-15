<?php
namespace App\Models\Crud;
use App\Models\Reserve;
use PDO;
use App\Config\Database;
class CrudReserve{
    public function getAll($id){
        $conn = Database::ccontact();
        $sql = 'SELECT id.reserve, name.member FROM resevre WHERE member_id.reserve = :id.member join member ';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam('id.member', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Reserve::class);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function Treetable(){
        $conn = Database::ccontact();
        $sql = 'SELECT id.reserve, name.member, autor.book, title.book FROM resevre JOIN member, book';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Reserve::class);
        $result = $stmt->fetchAll();
        return $result;
    }
    
}