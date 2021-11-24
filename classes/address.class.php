<?php

class Address extends Database{

  public function getHotelAddress($hotelLocation){
    $sql = 'SELECT DISTINCT street_name, suburb, state, postcode,city FROM address, hotels, rooms WHERE address.hotel_id = hotels.hotel_id AND address.suburb = ? OR address.hotel_id = hotels.hotel_id AND address.postcode = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$hotelLocation, $hotelLocation]);
    $result= $stmt->fetchAll();
    return $result;
  }

  public function getExploreHotelAddress($city){
    $sql = 'SELECT DISTINCT street_name, suburb, state, postcode, city FROM address, hotels, rooms WHERE address.hotel_id = hotels.hotel_id AND address.city = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$city]);
    $result= $stmt->fetchAll();
    return $result;
  }

  public function getCategoryHotelAddress($category){
    $sql = 'SELECT DISTINCT street_name, suburb, state, postcode, city FROM address, hotels WHERE address.hotel_id = hotels.hotel_id AND hotels.category = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$category]);
    $result= $stmt->fetchAll();
    return $result;
  }

}