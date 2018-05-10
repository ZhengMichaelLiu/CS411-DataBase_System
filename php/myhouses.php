<table>
    
    <tr>
        <th>House ID</th>
        <th>Address</th> 
        <th>Area</th>
        <th>No. Bed</th>
        <th>No. Bath</th> 
        <th>Plan</th>
        <th>Price</th>
        <th>Amenity</th> 
        <th>Water</th>
        <th>Electricity</th>
        <th>Internet</th>
    </tr>
  
<?php
session_start();
$servername = "cpanel3";
$username = "bigorental_yiranli6";
$password = "Kate1996&";
$dbname = "bigorental_bigorepo";

$conn = new mysqli($servername, $username, $password, $dbname);
$Uname = $_SESSION['curr_user'];
$company = $_SESSION['curr_company'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo $company;
if ($company != 'Private') {
    $sql = "SELECT address, areanum, bednum, bathnum, plan, price, amenity, water, electricity, internet FROM Apartment WHERE Uname='$Uname'";
}
else {
    $sql = "SELECT address, areanum, bednum, bathnum, plan, price, amenity, water, electricity, internet FROM Private_Apartment WHERE Uname='$Uname'";
}
$result = $conn->query($sql);
$cnt = 1;
//if ($result->num_rows > 0) {
//    while($row = $result->fetch_assoc()) {
//        echo $cnt. ". Address: " . $row["address"]. "<br>".
//        "Area Number: " . $row["areanum"]. "<br>".
//        "Number of Bedrooms: " . $row["bednum"]. "<br>".
//       "Number of Bathrooms: " . $row["bathnum"]. "<br>".
//        "Plan Number: " . $row["plan"]. "<br>".
//        "Price: ". $row["price"]. "<br>".
//        "Amenity: ". $row["amenity"]. "<br>".
//        "Water Included: ". $row["water"]. "<br>".
//        "Electricity Included: ". $row["electricity"]. "<br>".
//        "Internet Included: ". $row["internet"]. "<br>"."<br>";
//        $cnt=$cnt+1;
//        // echo '<form method="get" action="pre_housing_update.php">
//        // <input type = "submit" name = "update" value = $cnt>
//       // </form>';
//        // echo '<form method="get" action="pre_housing_delete.php">
//        // <input type = "submit" name = "delete" value = $cnt>
//        // </form>';
//        
//        
//    }
//} else {
//    echo "0 results";
//}

while($row=$result->fetch_array()){
          $id=$cnt;
          $address=$row['address'];
          $areanum=$row['areanum'];
          $bednum=$row['bednum'];
          $bathnum=$row['bathnum'];
          $plan=$row['plan'];
          $price=$row['price'];
          $amenity=$row['amenity'];
          $water=$row['water'];
          $electricity=$row['electricity'];
          $internet=$row['internet'];
          
   echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td>"
                        . "<td class='data'><div data-id='$id'>$price</div></td><td class='data'><div data-id='$id'>$amenity</div></td><td class='data'><div data-id='$id'>$water</div></td>"
                        . "<td class='data'><div data-id='$id'>$electricity</div></td><td class='data'><div data-id='$id'>$internet</div></td>"
                        . "<td><a href='pre_housing_update_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet'>
                                  Update
                                </a></td>"
                        . "<td><a href='delete_zliu93.php?address=$address&bednum=$bednum&bathnum=$bathnum&plan=$plan'>
                                  Delete
                                </a></td>"
      . "</tr> ";
           $cnt=$cnt+1;
 }


?>    

</table>


<!--<form method="get" action="pre_housing_update.php">
    <!--<input type = "submit" name = "update" value = "Update">
</form>
<form method="get" action="pre_housing_delete.php">
    <input type = "submit" name = "delete" value = "Delete">
</form>-->
