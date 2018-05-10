<?php
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
if ($company != 'Private') {
if ($areanum!=NULL) {
    $sql = "UPDATE Apartment SET areanum=$areanum WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($amenity!=NULL) {
    $sql = "UPDATE Apartment SET amenity='$amenity' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($water!=NULL) {
    $sql = "UPDATE Apartment SET water='$water' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($electricity!=NULL) {
    $sql = "UPDATE Apartment SET electricity='$electricity' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($internet!=NULL) {
    $sql = "UPDATE Apartment SET internet='$internet' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($price!=NULL) {
    $sql = "UPDATE Apartment SET price=$price WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
}
else {
if ($areanum!=NULL) {
    $sql = "UPDATE Private_Apartment SET areanum=$areanum WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($amenity!=NULL) {
    $sql = "UPDATE Private_Apartment SET amenity='$amenity' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($water!=NULL) {
    $sql = "UPDATE Private_Apartment SET water='$water' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($electricity!=NULL) {
    $sql = "UPDATE Private_Apartment SET electricity='$electricity' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($internet!=NULL) {
    $sql = "UPDATE Private_Apartment SET internet='$internet' WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}
if ($price!=NULL) {
    $sql = "UPDATE Private_Apartment SET price=$price WHERE address='$address' AND Uname='$Uname' AND bednum='$bednum' AND bathnum='$bathnum' AND plan='$plan'";
    $result = $conn->query($sql);
}

}
if ($conn->query($sql) === TRUE) {
    echo "Updated successfully";
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

<!--<form method="get" action="../../index.html">-->
<!--    <input type = "submit" name = "return" value = "Go Back">-->
<!--</form>-->