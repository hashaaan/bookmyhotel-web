<?php

class UsersView extends Users{
  public function userLoginDetail($username,  $email){
    $result = $this -> getUser($username,  $email);
    return $result;
  }
}