<?php
$incbusiness = $_POST['incbusiness'];
$incother = $_POST['incother'];
$incrent = $_POST['incrent'];
$totalinc = $_POST['totalinc'];
$ded1 = $_POST['ded1'];
$ded1us = $_POST['ded1us'];
$ded1amt = $_POST['ded1amt'];
$ded2 = $_POST['ded2'];
$ded2us = $_POST['ded2us'];
$ded2amt = $_POST['ded2amt'];
$ded3 = $_POST['ded3'];
$ded3us = $_POST['ded3us'];
$ded3amt = $_POST['ded3amt'];
$ded4 = $_POST['ded4'];
$ded4us = $_POST['ded4us'];
$ded4amt = $_POST['ded4amt'];
$afterded = $_POST['afterded'];
$nettaxinc = $_POST['nettaxinc'];
$taxpercent = $_POST['taxpercent'];
$taxoninc = $_POST['taxoninc'];
$rebate = $_POST['rebate'];
$taxpayable = $_POST['taxpayable'];
$educess = $_POST['educess'];
$interest = $_POST['interest'];
$taxwithcess = $_POST['taxwithcess'];
$tds = $_POST['tds'];
$refund = $_POST['refund'];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'caproject');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO `coti`  (`income_from_business_or_profession`, `income_from_other_sources`, `income_from_house_property`, `gross_total_income`, `deduction_under_vi/a_1`, `deduction1_u/s`, `deduction1_amount`, `deduction_under_vi/a_2`, `deduction2_u/s`, `deduction2_amount`, `deduction_under_vi/a_3`, `deduction3_u/s`, `deduction3_amount`, `deduction_under_vi/a_4`, `deduction4_u/s`, `deduction4_amt`, `total_deduction`, `net_taxable_income`, `tax_percent`, `tax_on_income`, `rebate_u/s_87a`, `net_tax_payable`, `education_cess`, `interest_u/s_234_a_b_c`, `total_tax_payable_with_educess`, `tax_deducted_at_source`, `refund_due`) VALUES ('$incbusiness', '$incother', '$incrent', '$totalinc', '$ded1', '$ded1us', '$ded1amt', '$ded2', '$ded2us', '$ded2amt', '$ded3', '$ded3us', '$ded3amt', '$ded4', '$ded4us', '$ded4amt', '$afterded', '$nettaxinc', '$taxpercent', '$taxoninc', '$rebate', '$taxpayable', '$educess', '$interest', '$taxwithcess', '$tds', '$refund')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";

    // Redirect to a new website
    header("Location: income-exp.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
