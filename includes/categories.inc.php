<?php
  include_once 'class-autoload.inc.php';

  if (isset($_GET["category"])){
    $category = $_GET["category"];

    $getHotelInfo = new Hotel();
    $result = $getHotelInfo -> getCategoryHotelDetails($category);

    $getHotelAddress = new Address();
    $address = $getHotelAddress -> getCategoryHotelAddress($category);


    session_start();
    $_SESSION["hotelInfo"]= $result;
    $_SESSION["hotelAddress"]= $address;
    $_SESSION["totalResult"] = count($result);
    header("location: ../afterSearch.php");
    exit();

  }
