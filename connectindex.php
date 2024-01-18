<?php
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$businessname = $_POST['businessname'];
$businessnature = $_POST['businessnature'];
$pannumber = $_POST['pannumber'];
$phonenumber = $_POST['phonenumber'];
$financialyear = $_POST['financialyear'];
$assessmentyear = $_POST['assessmentyear'];
$bankaccnumber = $_POST['bankaccnumber'];
$ifsc = $_POST['ifsc'];
$email = $_POST['email'];
$uidnumber = $_POST['uidnumber'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'caproject');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO details (name, fathername, address, dob, businessname, businessnature, pannumber, phonenumber, financialyear, assessmentyear, bankaccnumber, ifsc, email, uidnumber) VALUES ('$name', '$fathername', '$address', '$dob', '$businessname', '$businessnature', '$pannumber', '$phonenumber', '$financialyear', '$assessmentyear', '$bankaccnumber', '$ifsc', '$email', '$uidnumber')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

    // Redirect to a new website
    header("Location: COTI.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
