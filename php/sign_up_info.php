<?php
$servername = "cpanel3";
$username = "bigorental_yiranli6";
$password = "Kate1996&";
$dbname = "bigorental_bigorepo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Uname = $_GET["Uname"];
$passcode = $_GET["passcode"];
$confirm_passcode = $_GET["confirm_passcode"];
$name = $_GET["name"];
$phone = $_GET["phone"];
$usertype = $_GET["usertype"];
$company = $_GET["company"];
$error=0;

if ($passcode!=$confirm_passcode) {
    echo "Password does not match!";
    echo "<br>";
    $error=1;
}
else {
    $sql = "INSERT INTO User (Uname, passcode, name, phone)
    VALUES ('$Uname', '$passcode', '$name', $phone)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if ($usertype != 0) {
        if ($usertype==1) {
            $sql="INSERT INTO Leasing_Agent (Uname, company)
            VALUES ('$Uname', '$company')";
        }
        else if ($usertype==2) {
            $sql="INSERT INTO Individual_Lessor (Uname)
            VALUES ('$Uname')";
        }
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

echo "<h2>Your Input:</h2>";
echo "$Uname";
echo "<br>";
echo $_GET["Uname"];
echo "<br>";
echo $_GET["passcode"];
echo "<br>";
echo $_GET["name"];
echo "<br>";
echo $_GET["phone"];
echo "<br>";
echo $_GET["usertype"];
if ($error==0) {
    echo '<form method="get" action="../../index.html">
        <input type = "submit" name = "return" value = "Go Back">
    </form>';
}
else {
     echo '<form method="get" action="pre_sign_up.php">
        <input type = "submit" name = "return" value = "Go Back">
    </form>';
}
?>


