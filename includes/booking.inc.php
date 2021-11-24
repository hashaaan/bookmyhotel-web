<?php
session_start(); 
include_once 'class-autoload.inc.php'; 

// sends user back to sign up page if illegal entering
if (isset($_POST["paymentButton"])){

  $checkInDate = $_SESSION["checkInDate"];
  $checkInDate =strtotime($checkInDate);
  $checkInDate = date('d-m-Y',$checkInDate);

  $checkOutDate = $_SESSION["checkOutDate"];
  $checkOutDate =strtotime($checkOutDate);
  $checkOutDate = date('d-m-Y',$checkOutDate);

  $bookingDate = date("d-m-Y");
  $guestNumber = $_SESSION["numberOfGuests"];
  $hotelName = strip_tags($_SESSION['hotelName']);
  
 
  try{
    if($_POST["single"]>0){
      $totalAmount=$_POST["singleBedPrice"];
    }
    elseif($_POST["double"]>0){
      $totalAmount=$_POST["doubleBedPrice"];
    }
    elseif($_POST["three"]>0){
      $totalAmount=$_POST["threeBedPrice"];
    }
    elseif($_POST["suite"]>0){
      $totalAmount=$_POST["royalPrice"];
    }
    else{
      throw new Exception();
      exit();
    }
    $booking = new BookingControl();
    $setBooking = $booking->setBookingDetails($guestNumber,$totalAmount,$bookingDate,$checkInDate,$checkOutDate,$hotelName);
    header("location: ../paymentPage.php");
    exit();
  }
  catch(Exception $e){
    header("location: ../hotelPage.php?data=$hotelName&error=roomnotselected");
    exit();
  }

  
}