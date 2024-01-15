<?php
$name = filter_input(INPUT_POST, 'name');
$fathername = filter_input(INPUT_POST, 'fathername');
$address = filter_input(INPUT_POST, 'address');
$DOB = filter_input(INPUT_POST, 'DOB');
$buisnessname = filter_input(INPUT_POST, 'buisnessname');
$natureofbuisness = filter_input(INPUT_POST, 'natureofbuisness');
$pan = filter_input(INPUT_POST, 'pan');
$cellno = filter_input(INPUT_POST, 'cellno');
$financialyear = filter_input(INPUT_POST, 'financialyear');
$assesmentyear = filter_input(INPUT_POST, 'assesmentyear');
$bankacno = filter_input(INPUT_POST, 'bankacno');
$ifsc = filter_input(INPUT_POST, 'ifsc');
$email = filter_input(INPUT_POST, 'email');
$uidno = filter_input(INPUT_POST, 'uidno');

$host = "localhost";
$dbusername = "root";
$dbpassword = ""; 
$dbname = "ca_project";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO details (name, father_name, address, dob, name_of_buisness, nature_of_buisness, pan_number, phone_number, financial_year, assessment_year, bank_acc_number, ifsc, email, uid_number)
        VALUES ('$name', '$fathername', '$address', '$DOB', '$buisnessname', '$natureofbuisness', '$pan', '$cellno', '$financialyear', '$assesmentyear', '$bankacno', '$ifsc', '$email', '$uidno')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
