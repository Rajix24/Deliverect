<?php
namespace App\Models\Crud;
use App\Config\Database;
use PDO;
use App\Models\Book;
class CrudBook{
    public function getAll(){
        $conn = Database::ccontact();
        $sql = 'SELECT * FROM book';
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Book::class);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function Insert($title, $autor, $categorie_id){
        $conn = Database::ccontact();
        $sql = 'INSERT INTO (title, autor, categorie_id) VALUES (:title, :autor, :categorie_id)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':categorie_id', $categorie_id);
    }
    public function Update($id,$title, $autor, $categorie_id){
        $conn = Database::ccontact();
        $sql = 'UPDATE book SET title = :title, autor =:autor, categorie_id = :categorie_id WHERE id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':categorie_id', $categorie_id);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function Delete($id){
        $conn = Database::ccontact();
        $sql = 'DELETE FROM book WHERE id = : id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getCategorie(){
        $conn = Database::ccontact();
        $sql = 'SELECT title.book, autor.book, categorie.categorie  FROM book JOIN categorie WHERE id.categorie = categorie_id.bool';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    public function GetBookReserve(){
        $conn = Database::ccontact();
        $sql = 'SELECT title.book, name.member, autor.book FROM book JOIN member, reserve WHERE reserve_id.book = id.reserve';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}