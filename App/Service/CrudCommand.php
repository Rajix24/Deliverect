<?php
namespace App\Service;
use Config\Database;
use App\Models\Command;
use PDO;

class CrudCommand{
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $vehicule_id;
    protected $client_id;
    protected $status;
    public function save () {
        $conn = Database::connect();
        $sql = 'INSERT INTO commands (name, description, price, client_id, vehicule_id) VALUES (:name, :description, :price , :client_id, :vehicule_id)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':client_id', $this->client_id);
        $stmt->bindParam(':vehicule_id', $this->vehicule_id);
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
        public function getALL($client_id){
        $conn = Database::connect();
        $sql = "SELECT * FROM commands WHERE client_id = $client_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Command::class);
        $data = $stmt->fetchAll();
        return $data;
    }
        public function delete($id){
        $conn = Database::connect();
        $sql = 'DELETE FROM commands WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
        public function update($id, $name,$description ,$price, $user_id, $vehicle_id){
        $conn = Database::connect();
        $sql = 'UPDATE commands SET name = :name, description = :description ,price = :price , user_id = :user_id, vehicle_id = :vehicle_id WHERE id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $vehicle_id);
        $stmt->execute();
    }
    public function getAllCommand(){
            $conn = Database::connect();
        $sql = 'SELECT * FROM commands';
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, Command::class);
        $data = $stmt->fetchAll();
        return $data;
    }


}