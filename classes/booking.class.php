<?php
class Booking extends Database{
 protected function setBooking($hotelId,$userId,$numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut){
  $sql = "INSERT INTO  booking(hotel_id, user_id, numberOfGuest,total_amount, booking_date, check_in_date, check_out_date) VALUES(?,?,?,?,?,?,?)";
  $stmt = $this ->connect()->prepare($sql);
  $stmt -> execute([$hotelId,$userId,$numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut]);
  }

  protected function getAllRecords(){
    $sql = "Select * from booking;";
        $stmt = $this -> connect()-> query($sql);
        $result= $stmt->fetchAll();
        return $result;
  }
}