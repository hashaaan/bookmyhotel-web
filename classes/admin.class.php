<?php
class Admin extends Database{
  protected function getAdmin($email){
    $sql = "Select * from admin Where admin_email =?;";
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$email]);
    $result= $stmt->fetch();
    return $result;
  }
}