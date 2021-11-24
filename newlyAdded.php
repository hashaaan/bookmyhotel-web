<?php
    include_once "adminHeader.php";
?>
    <div class='profileContainer'>
        <div class="profileNav admin">
            <div>
                <li class="tabs"><a href="adminDashboard.php">Dashboard</a></li>
                <li class="tabs"><a href="adminBooking.php">Booking</a></li>
                <li class="tabs current"><a href="adminHotel.php">Hotel</a></li>
                <li class="tabs"><a href="adminUser.php">Users</a></li>
                <li class="tabs"><a href="newlyAdded.php">Newly Added</a></li>
            </div>
        </div>
        <div class="profileContent admin">
            <div class="personalDetails">
                <div class="headding">
                    <h2>Newly Added</h2>
                </div>
                <div class="information">
                    <div class="report">
                        <h2>Newly Added Details</h2>
                        <table class="reportTable">
                            <thead>
                                <th>Hotel Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Hotel Name</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Details</th>
                            </thead>
                            <tbody>
                            <?php
                                    $newlyAddedRecords = $_SESSION["newlyAddedRecords"];
                                    for ($i=0; $i <count($newlyAddedRecords) ; $i++) { 
                                        echo('<tr>'.
                                    '<td>'.$newlyAddedRecords[$i]["new_hotel_id"].'</td>'.
                                    '<td>'.$newlyAddedRecords[$i]["firstname"].'</td>'.
                                    '<td>'.$newlyAddedRecords[$i]["lastname"].'</td>'.
                                    '<td>'.$newlyAddedRecords[$i]["hotelname"].'</td>'.
                                    '<td>'.$newlyAddedRecords[$i]["address"].'</td>'.
                                    '<td>'.$newlyAddedRecords[$i]["telephone"].'</td>'.
                                    '<td>'.$newlyAddedRecords[$i]["subject"].'</td>'.
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