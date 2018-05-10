<?php
// include("user_info.php");
session_start();
$servername = "cpanel3";
$username = "bigorental_yiranli6";
$password = "Kate1996&";
$dbname = "bigorental_bigorepo";

$conn = new mysqli($servername, $username, $password, $dbname);
$curr_user;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Uname = $_GET["Uname"];
$passcode = $_GET["passcode"];
$sql_user = "SELECT * FROM User WHERE passcode='$passcode' AND Uname='$Uname'";
$result_user = $conn->query($sql_user);

if ($result_user->num_rows>0) {
    // if(!session_id()) session_start();
    //include("global.php");
    $_SESSION['curr_user'] = $Uname;
    echo "Login Successfully";
    echo "<br>";
    
    $sql_leasing_agent = "SELECT * FROM Leasing_Agent WHERE Uname='$Uname'";
    $result_leasing_agent = $conn->query($sql_leasing_agent);
    
    if ($result_leasing_agent->num_rows>0) {
    $row = $result_leasing_agent->fetch_assoc();
    $_SESSION['curr_company'] = $row['company'];
    echo '<form method="get" action="../../index_leasing_agent.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
    }
    else {
    $sql_individual_lessor = "SELECT * FROM `Individual_Lessor` WHERE Uname='$Uname'";
    $result_individual_lessor = $conn->query($sql_individual_lessor);
    if ($result_individual_lessor->num_rows>0) {
        $_SESSION['curr_company']="Private";
        echo '<form method="get" action="../../index_individual_lessor.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
    }
    else {
        echo '<form method="get" action="../../index_user.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
    }
    }
}
else {
     echo $passcode;
    // var_dump($result['passcode']);
    echo "User Name and Password do not match!";
    echo "<br>";
    echo '<form method="get" action="../../index.html">
         <input type = "submit" name = "return" value = "Try Again">
    </form>';
}
?>
