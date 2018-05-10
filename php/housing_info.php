<?php
// include("user_info.php");
session_start();
$servername = "cpanel3";
$username = "bigorental_yiranli6";
$password = "Kate1996&";
$dbname = "bigorental_bigorepo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$address = $_GET["address"];
$bednum = $_GET["bednum"];
$bathnum = $_GET["bathnum"];
$plan = $_GET["plan"];
$areanum = $_GET["areanum"];
$amenity = $_GET["amenity"];
$water = $_GET["water"];
$electricity = $_GET["electricity"];
$internet = $_GET["internet"];
$price = $_GET["price"];

$Uname = $_SESSION['curr_user'];
$company = $_SESSION['curr_company'];

if ($company != "Private") {
    $sql = "INSERT INTO Apartment (Uname, address, bednum, bathnum, plan, price, water, electricity, internet, amenity, areanum, company)
    VALUES ('$Uname', '$address', $bednum, $bathnum, '$plan', $price, '$water', '$electricity', '$internet', '$amenity', $areanum, '$company')";
}
else {
    $sql = "INSERT INTO Private_Apartment (Uname, address, bednum, bathnum, plan, price, water, electricity, internet, amenity, areanum, company)
    VALUES ('$Uname', '$address', $bednum, $bathnum, '$plan', $price, '$water', '$electricity', '$internet', '$amenity', $areanum, 'private')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    if ($company != "Private") {
        echo'   <form method="get" action="../../index_leasing_agent.html">
                <input type = "submit" name = "return" value = "Return">
                </form>';
    }

    else {
        echo'   <form method="get" action="../../index_individual_lessor.html">
                <input type = "submit" name = "return" value = "Return">
                </form>';
    }
?>