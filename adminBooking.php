<?php
    include_once ("adminHeader.php");
?>
  <div class='profileContainer'>
        <div class="profileNav admin">
            <div>
                <li class="tabs"><a href="adminDashboard.php">Dashboard</a></li>
                <li class="tabs current"><a href="adminBooking.php">Booking</a></li>
                <li class="tabs"><a href="adminHotel.php">Hotel</a></li>
                <li class="tabs"><a href="adminUser.php">Users</a></li>
                <li class="tabs"><a href="newlyAdded.php">Newly Added</a></li>
            </div>
        </div>
        <div class="profileContent admin">
            <div class="personalDetails">
                <div class="headding">
                    <h2>Booking</h2>
                </div>
                <div class="information">
                    <div class="report">
                        <h2>Bookings Details</h2>
                        <table class="reportTable">
                            <thead>
                                <th>ID</th>
                                <th>Hotel Name</th>
                                <th>Username</th>
                                <th>Booking Date</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Total Amount</th>
                            </thead>
                            <tbody>
                            <?php
                                $hotelName=$_SESSION["hotelName"];
                                $userName=$_SESSION["userName"];
                                $bookingRecords = $_SESSION["bookingRecords"];
                                $count = count($bookingRecords);
                                for ($i=0; $i < $count ; $i++) { 
                                    echo('<tr>'.
                                    '<td>'.$bookingRecords[$i]["booking_id"].'</td>'.
                                    '<td>'.$hotelName[0]["hotel_name"].'</td>'.
                                    '<td>'.$userName[0]["first_name"]." ".$userName[$i]["last_name"].'</td>'.
                                    '<td>'.$bookingRecords[$i]["booking_date"].'</td>'.
                                    '<td>'.$bookingRecords[$i]["check_in_date"].'</td>'.
                                    '<td>'.$bookingRecords[$i]["check_out_date"].'</td>'.
                                    '<td>'.$bookingRecords[$i]["total_amount"].'</td>'.
                                    '</tr>');
                                    }   
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>