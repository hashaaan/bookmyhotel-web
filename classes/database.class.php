<?php

class Database {
  private $server="localhost";
  private $user="root";
  private $password="";
  private $db = "hotelbookingsystem";

  protected function connect(){
    try {
      $handle = new PDO("mysql:host=$this->server;dbname=$this->db", "$this->user", "$this->password");
      $handle -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $handle;

    } catch (PDOException $e) {
      die("Oops. There has been an error while connecting to the database.");
      return $e -> getMessage();
    }
  }
}