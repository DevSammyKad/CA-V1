<?php
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$nameofbuisness = $_POST['nameofbuisness'];
$natureofbuisness = $_POST['natureofbuisness'];
$pannnumber = $_POST['pannnumber'];
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
else
{


$stmt =  $conn->prepare("INSERT INTO details (name, fathername, address, dob, nameofbuisness, natureofbuisness, pannnumber, phonenumber, financialyear, assessmentyear, bankaccnumber, ifsc, email, uidnumber)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssss", $name, $fathername, $address, $dob, $nameofbuisness, $natureofbuisness, $pannnumber, $phonenumber, $financialyear, $assessmentyear, $bankaccnumber, $ifsc, $email, $uidnumber);
    $stmt->execute();
        echo "Record inserted successfully";
        $stmt->close();
        $conn->close();
}
?>
