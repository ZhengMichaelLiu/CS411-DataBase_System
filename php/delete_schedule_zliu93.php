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
$Uname_Lessor=$_GET["Uname_Lessor"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "DELETE FROM Request WHERE address='$address' AND bednum=$bednum AND bathnum=$bathnum AND plan='$plan' AND Uname_Lessor='$Uname_Lessor' AND Uname_Lessee='$Uname'"; 

    $result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    echo '<form method="get" action="../../index_user.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';

?>