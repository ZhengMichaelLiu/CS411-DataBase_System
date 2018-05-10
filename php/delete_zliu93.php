<?php

session_start();
$servername = "cpanel3";
$username = "bigorental_yiranli6";
$password = "Kate1996&";
$dbname = "bigorental_bigorepo";

$conn = new mysqli($servername, $username, $password, $dbname);
$Uname = $_SESSION['curr_user'];
$company = $_SESSION['curr_company'];

$address = $_GET["address"]; 
$bednum = $_GET["bednum"];
$bathnum = $_GET["bathnum"];
$plan = $_GET["plan"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($company != 'Private') {
    // $sql = "SELECT address, areanum, bednum, bathnum, plan, price, amenity, water, electricity, internet FROM Apartment WHERE Uname='$Uname'";
    $sql = "DELETE FROM Apartment WHERE address='$address' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan' AND Uname='$Uname'"; 
}
else {
    $sql = "DELETE FROM Private_Apartment WHERE address='$address' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan' AND Uname='$Uname'"; 
}

    $result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($company!='Private') {
    echo '<form method="get" action="../../index_leasing_agent.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
    }
    else {
        echo '<form method="get" action="../../index_individual_lessor.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
    }
?>