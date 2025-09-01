<?php
//Here, we will take user's information to verify his login
namespace App\Repository;
use App\Database\Database;
use App\Model\User;
use PDO; //Php data objective

class UserRepository {
  private PDO $db;
  
  public function __construct() {
    $this->db = Database::connect;
  }

  public function findByEmail(string $email): ?User{
    $stmt = $this->db->preapare("SELECT * from users where email= :email"); //Monta os objetos | Evita injeção SQL
    $stmt->execute(['email' => $email]);
    
    $data = $stmt->fetch();
    if(!$data){
      return null;
    }

    return new User($data['id'], $data['email'], $data['password']);
  }
}
