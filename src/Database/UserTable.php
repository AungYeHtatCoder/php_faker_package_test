<?php 
namespace Libs\Database;
use PDO;
use PDOException;

class UserTable
{  
 private $db = null;

 public function __construct($db)
 {
  $this->db = $db->connect();
 }
 // user get all method
 public function getAll()
 {
  $sql = "SELECT * FROM users";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
 }
}