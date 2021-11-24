<?php
  include_once 'class-autoload.inc.php';

  if (isset($_GET["city"])){
    $city = $_GET["city"];

    $getHotelInfo = new Hotel();
    $result = $getHotelInfo -> getExploreHotelDetails($city);

    $getHotelAddress = new Address();
    $address = $getHotelAddress -> getExploreHotelAddress($city);


    session_start();
    $_SESSION["hotelInfo"]= $result;
    $_SESSION["hotelAddress"]= $address;
    $_SESSION["totalResult"] = count($result);
    header("location: ../afterSearch.php");
    exit();

  }
