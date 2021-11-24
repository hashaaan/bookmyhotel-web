<?php
class Profile extends Database{
    protected function userProfile($fname, $lname,$username, $email,$users_id){
        $sql = "INSERT INTO  user_profile (firstName, lastName, username,email,user_id) VALUES(?,?,?,?,?)";
        $stmt = $this ->connect()->prepare($sql);
        $stmt -> execute([$fname, $lname, $username,$email,$users_id]);
      }
    protected function getUser($username,  $email){
        $sql = "Select * from user_profile Where username =? OR email =?;";
        $stmt = $this -> connect()-> prepare($sql);
        $stmt -> execute([$username, $email]);
        $result= $stmt->fetchAll();
        return $result;
      }
    protected function updateProfile($title, $firstName, $lastName, $gender, $DOB, $country, $username, $email, $phoneNumber,$users_id){
        $sql = "Update user_profile
                Set title=?, firstname=?, lastName=?, gender=?, DOB=?, country=?, 
                username=? ,email=?, phoneNumber=?
                Where user_id=?";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$title, $firstName, $lastName, $gender, $DOB, $country, $username, $email, $phoneNumber,$users_id]);
    }

    protected function getAllRercords(){
      $sql = "Select * from user_profile;";
        $stmt = $this -> connect()-> query($sql);
        $result= $stmt->fetchAll();
        return $result;
    }

    protected function getName(){
      $sql = 'SELECT users.first_name, users.last_name FROM users,booking WHERE users.user_id= booking.user_id;';
      $stmt = $this->connect()->query($sql);
      $result = $stmt->fetchAll();
      return $result;
    }

}