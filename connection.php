<?php 
class Database {
  public static $connection;

  public static function setupConnection(){
    Database::$connection = new mysqli("localhost","root","pasidu1972","online_db","3306");
  }

  public static function iud($q){
    Database::setupConnection();
    Database::$connection->query($q);
  } 

  public static function search($q){
    Database::setupConnection();
    $resultset = Database::$connection->query($q);
    return $resultset;
  } 
}

?>