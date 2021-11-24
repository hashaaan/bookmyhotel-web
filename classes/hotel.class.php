<?php

class Hotel extends Database{

  public function getHotel($hotelName){
    $sql = 'SELECT * FROM hotels WHERE hotel_name = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$hotelName]);
    $result= $stmt->fetchAll();
    return($result);
  }

  public function getHotelDetails($hotelLocation){
    $sql = 'SELECT DISTINCT hotel_name, hotel_description, rating, review FROM hotels, address
    WHERE address.hotel_id = hotels.hotel_id AND address.suburb = ? OR address.hotel_id = hotels.hotel_id AND address.postcode = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$hotelLocation,$hotelLocation]);
    $result= $stmt->fetchAll();
    return $result;
  }

  public function getExploreHotelDetails($city){
    $sql = 'SELECT DISTINCT hotel_name, hotel_description, rating, review FROM hotels, address
    WHERE address.hotel_id = hotels.hotel_id AND address.city = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$city]);
    $result= $stmt->fetchAll();
    return $result;
  }

  public function getCategoryHotelDetails($category){
    $sql = 'SELECT DISTINCT hotel_name, hotel_description, rating, review FROM hotels
    WHERE category = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$category]);
    $result= $stmt->fetchAll();
    return $result;
  }

  public function getAllRecords(){
    $sql ='SELECT hotels.hotel_id, hotels.hotel_name,address.street_name, address.suburb, address.postcode, address.city, address.country FROM hotels, address WHERE hotels.hotel_id=address.hotel_id ORDER BY hotels.hotel_id ASC';
    $stmt = $this->connect()->query($sql);
    $result = $stmt->fetchAll();
    return $result;
  }

  public function getHotelName(){
    $sql = 'SELECT hotels.hotel_name FROM hotels,booking WHERE hotels.hotel_id= booking.hotel_id;';
    $stmt = $this->connect()->query($sql);
    $result = $stmt->fetchAll();
    return $result;
  }
  

}