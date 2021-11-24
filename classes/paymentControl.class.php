<?php
class PaymentControl extends Payment{
  public function createPayment ($firstName, $lastName, $email, $cardNo, $expiry){
    $this -> setPayment($firstName, $lastName, $email, $cardNo, $expiry);
  }
  
}