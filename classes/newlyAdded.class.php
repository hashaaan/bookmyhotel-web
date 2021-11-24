<?php
class NewlyAdded extends Database {
  protected function getAllRecords(){
        $sql = "Select * from new_hotels;";
        $stmt = $this -> connect()-> query($sql);
        $result= $stmt->fetchAll();
        return $result;
  }
}