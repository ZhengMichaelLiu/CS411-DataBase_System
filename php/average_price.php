<table>
    
    <tr>
        <th>Area Num</th>
        <th>Average Price</th> 
    </tr>
    
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

$sql="(SELECT Apartment.areanum, AVG(Apartment.price) AS price
FROM Apartment

GROUP BY areanum)";

$sql2= "(SELECT Private_Apartment.areanum, AVG(Private_Apartment.price) AS price

FROM Private_Apartment

GROUP BY areanum)";
$result = $conn->query($sql);
echo "<h1>Apartments Average Price:</h1>";
while($row=$result->fetch_array()){
          $areanum=$row['areanum'];
          $price=$row['price'];
           echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$price</div></td></tr>"; 
}
 echo "</table><br><br>";
 echo "<table><tr><th>Area Number</th><th>Average Price</th></tr>";
$result = $conn->query($sql2);
echo "<h1>Private Apartments Average Price:</h1>";
while($row=$result->fetch_array()){
          $areanum=$row['areanum'];
          $price=$row['price'];
           echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$price</div></td></tr>"; 
}
 echo "</table><br><br>";
 echo'   <form method="get" action="../../index.html">
                <input type = "submit" name = "return" value = "Return">
                </form>';
?>    

</table>