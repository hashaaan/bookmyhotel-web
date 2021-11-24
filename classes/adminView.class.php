<?php

class AdminView extends Admin{
  public function adminLogin($email){
    $result = $this -> getAdmin($email);
    return $result;
  }
}