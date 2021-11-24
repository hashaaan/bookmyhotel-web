<?php
	
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hotelbookingsystem";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    if(isset($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['hotelname']) && !empty($_POST['address']) && !empty($_POST['telephone']) && !empty($_POST['subject'])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $hotelname = $_POST['hotelname'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
        $subject = $_POST['subject'];

        $query = "insert into new_hotels(firstname, lastname, hotelname, address, telephone, subject) values ('$firstname', '$lastname', '$hotelname', '$address', '$telephone', '$subject')";
         
        $run = mysqli_query($conn, $query) or die (mysqli_error());
        
        if($run){
            echo "<h1>Form Submitted Successfully..!</h1>";
            header("location: index.php");
        } else {
            echo "Form Not Submitted..!";
        }
    }
    else{
        echo "All Fields Required";
    }
}
   
?>