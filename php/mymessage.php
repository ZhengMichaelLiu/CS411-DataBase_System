<table>
    
    <tr>
        <th>No.</th>
        <th>Address</th>
        <th>Areanum</th>
        <th>Lessee</th>
        <th>Lessee Contact Number</th>
        <th>No. Bed</th>
        <th>No. Bath</th> 
        <th>Plan</th>
        <th>Amenity</th>
        <th>Contact Start Year</th>
        <th>Contact Start Month</th> 
        <th>Contact Start Day</th>
        <th>Contact End Year</th>
        <th>Contact End Month</th>
        <th>Contact End Day</th>
        <th>Schedule Meeting Year</th>
        <th>Schedule Meeting Month</th>
        <th>Schedule Meeting Day</th>
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
    // Uname_Lessee	address	Uname_Lessor	bednum	bathnum	plan	start_year	start_month	start_day	end_year	end_month	end_day	schedule_year	schedule_month	schedule_day
if ($company!="Private") {
    $sql = "SELECT Request.address, Uname_Lessee, Request.bednum, Request.bathnum, Request.plan, start_year, start_month, start_day, end_year, end_month, end_day, schedule_year, schedule_month, schedule_day, Apartment.amenity, Apartment.areanum, User.phone FROM Request, Apartment, User WHERE Uname_Lessor ='$Uname' AND Request.address=Apartment.address AND Request.bednum=Apartment.bednum AND Request.bathnum=Apartment.bathnum AND Request.plan=Apartment.plan AND User.Uname=Request.Uname_Lessee";
}
else {
     $sql = "SELECT Request.address, Uname_Lessee, Request.bednum, Request.bathnum, Request.plan, start_year, start_month, start_day, end_year, end_month, end_day, schedule_year, schedule_month, schedule_day, Private_Apartment.amenity, Private_Apartment.areanum, User.phone FROM Request, Private_Apartment, User WHERE Uname_Lessor ='$Uname' AND Request.address=Private_Apartment.address AND Request.bednum=Private_Apartment.bednum AND Request.bathnum=Private_Apartment.bathnum AND Request.plan=Private_Apartment.plan AND User.Uname=Request.Uname_Lessee";
}
$result = $conn->query($sql);
$cnt = 1;

while($row=$result->fetch_array()){
          $id=$cnt;
          $address=$row['address'];
          $u_lessee=$row['Uname_Lessee'];
          $bednum=$row['bednum'];
          $bathnum=$row['bathnum'];
          $plan=$row['plan'];
          $amenity=$row['amenity'];
          $areanum=$row['areanum'];
          $phone_num=$row['phone'];
          $start_year=$row['start_year'];
          $start_month=$row['start_month'];
          $start_day=$row['start_day'];
          
          $end_year=$row['end_year'];
          $end_month=$row['end_month'];
          $end_day=$row['end_day'];
          
          $schedule_year=$row['schedule_year'];
          $schedule_month=$row['schedule_month'];
          $schedule_day=$row['schedule_day'];
          
   echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$u_lessee</div></td><td class='data'><div data-id='$id'>$phone_num</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td><td class='data'><div data-id='$id'>$amenity</div></td>"
                        . "<td class='data'><div data-id='$id'>$start_year</div></td><td class='data'><div data-id='$id'>$start_month</div></td><td class='data'><div data-id='$id'>$start_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$end_year</div></td><td class='data'><div data-id='$id'>$end_month</div></td><td class='data'><div data-id='$id'>$end_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$schedule_year</div></td><td class='data'><div data-id='$id'>$schedule_month</div></td><td class='data'><div data-id='$id'>$schedule_day</div></td>"
                        //. "<td><a href='pre_housing_update_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet'>
                        //          Update
                        //        </a></td>"
                        
      . "</tr> ";
           $cnt=$cnt+1;
 }


?>    

</table>