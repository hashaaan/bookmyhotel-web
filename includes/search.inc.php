<?php
  include_once 'class-autoload.inc.php';
  if(isset($_POST["submit_index"]) || isset($_POST["submit_after_Search"])){
    $hotelLocation = $_POST["location"];
    $checkIn = $_POST["checkInDate"];
    $checkOut = $_POST["checkOutDate"];
    $guestNumber = $_POST["numberOfGuests"];

    $getHotelInfo = new Hotel();
    $result = $getHotelInfo -> getHotelDetails($hotelLocation);

    $getHotelAddress = new Address();
    $address = $getHotelAddress -> getHotelAddress($hotelLocation);


    session_start();
    $_SESSION["hotelInfo"]= $result;
    $_SESSION["hotelAddress"]= $address;
    $_SESSION["totalResult"] = count($result);
    $_SESSION["numberOfGuests"]= $guestNumber;
    $_SESSION["checkInDate"]= $checkIn;
    $_SESSION["checkOutDate"]= $checkOut;

    header("location: ../afterSearch.php");
    exit();

  }
