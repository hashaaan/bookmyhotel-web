<?php

class BookingControl extends Booking{
   public function setBookingDetails($numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut,$hotelName){

    $hotel = new HotelView();
    $hotelDetails = $hotel->getHotelDetail($hotelName);

    $user = new UsersView();
    $userDetails = $user->userLoginDetail( $_SESSION["username"], $_SESSION["username"]);

     $this->setBooking($hotelDetails[0]["hotel_id"],$userDetails["user_id"],$numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut);
  }

  public function getBookingDetails(){
     return $this->getAllRecords();
  }
}