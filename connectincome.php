<?php
$year = $_POST['year'];
$SW = $_POST['SW'];
$PTI = $_POST['PTI'];
$EC = $_POST['EC'];
$PS = $_POST['PS'];
$TC = $_POST['TC'];
$VM = $_POST['VM'];
$ME = $_POST['ME'];
$DS = $_POST['DS'];
$DO = $_POST['DO'];
$PF = $_POST['PF'];
$NP = $_POST['NP'];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'caproject');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO `income_expenditure` (`year`, `salaries_and_wages`, `postage_and_telephone_and_internet`, `electricity_charges`, `printing_and_stationary`, `travelling_and_conveyance`, `vehincle_maintainence`, `miscellaneous_expenses`, `depreciation_as_per_schedule`, `depreciation_office_building`, `professional_fees`, `net_profit`)  VALUES ('$year', '$SW', '$PTI', '$EC', '$PS', '$TC', '$VM', '$ME', '$DS', '$DO', '$PF', '$NP')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

    // Redirect to a new website
    header("Location: fixed-deposits.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
