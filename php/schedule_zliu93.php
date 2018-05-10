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
    $areanum=$_GET["areanum"];
    $bednum=$_GET["bednum"];
    $bathnum=$_GET["bathnum"];
    $plan=$_GET["plan"];
    $price=$_GET["price"];
    $amenity=$_GET["amenity"];
    $water=$_GET["water"];
    $electricity=$_GET["electricity"];
    $internet=$_GET["internet"];
    
    $schedule_date_year=$_GET["schedule_date_year"];
    $schedule_date_month=$_GET["schedule_date_month"];
    $schedule_date_day=$_GET["schedule_date_day"];
    
    $contract_start_year=$_GET["contract_start_year"];
    $contract_start_month=$_GET["contract_start_month"];
    $contract_start_day=$_GET["contract_start_day"];
    
    $contract_end_year=$_GET["contract_end_year"];
    $contract_end_month=$_GET["contract_end_month"];
    $contract_end_day=$_GET["contract_end_day"];

    $house_company=$_GET["company"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($house_company != 'private') {
    $sql_lessee="SELECT Uname FROM Apartment WHERE address='$address' AND bathnum=$bathnum AND bednum=$bednum AND plan='$plan'";
    $result_lessee = $conn->query($sql_lessee);
    $row_lessee = $result_lessee->fetch_assoc();
    $Lessor=$row_lessee["Uname"];
    $type='A';
}
else {
    $sql_lessee_individual="SELECT Uname FROM Private_Apartment WHERE address='$address' AND bathnum=$bathnum AND bednum=$bednum AND plan='$plan'";
    $result_lessee_individual = $conn->query($sql_lessee_individual);
    $row_lessee_individual = $result_lessee_individual->fetch_assoc();
    $Lessor=$row_lessee_individual["Uname"];
    echo $Lessor;
    $type='B';
    echo $type;
}
     $sql = "INSERT INTO Request (Uname_Lessee, address, Uname_Lessor, bednum, bathnum, plan, start_year, start_month, start_day, end_year, end_month, end_day, schedule_year, schedule_month, schedule_day, type)
    VALUES ('$Uname', '$address', '$Lessor', $bednum, $bathnum, '$plan', $contract_start_year,  $contract_start_month,  $contract_start_day, $contract_end_year, $contract_end_month, $contract_end_day, $schedule_date_year, $schedule_date_month, $schedule_date_day, '$type')";

if ($conn->query($sql) === TRUE) {
    echo "Schedule successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    echo '<form method="get" action="../../index_user.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
?>