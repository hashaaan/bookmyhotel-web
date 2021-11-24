<?php
class ProfileContr extends Profile{

    public function updateUserProfile ($title, $firstName, $lastName, $gender, $DOB, $country, $username, $email, $phoneNumber){
        $userView = new UsersView();
        $userDetails=$userView->userLoginDetail($username,$email);

        $this->updateProfile($title, $firstName, $lastName, $gender, $DOB, $country, $username, $email, $phoneNumber,$userDetails["user_id"]);

        $userControl = new UsersControl();
        $userControl->updateUser($firstName, $lastName,$username, $email, $userDetails["user_id"]);
    }

    public function setUserProfile($firstName,$lastName,$email,$username,$user_id){
        $this->userProfile($firstName,$lastName,$email,$username,$user_id);
    }

    public function getProfile($username){
        return $this->getUser($username,$username);  
    }

    public function getUserDetails(){
        return $this->getAllRercords();
    } 

    public function getUserName(){
        return $this->getName();
    }

}