<table>
    
    <tr>
        <th>No.</th>
        <th>Address</th>
        <th>Areanum</th>
        <th>Lessor</th> 
        <th>No. Bed</th>
        <th>No. Bath</th> 
        <th>Plan</th>
        <th>Amenity</th>
        <th>Contract Start Year</th>
        <th>Contract Start Month</th> 
        <th>Contract Start Day</th>
        <th>Contract End Year</th>
        <th>Contract End Month</th>
        <th>Contract End Day</th>
        <th>Schedule Meeting Year</th>
        <th>Schedule Meeting Month</th>
        <th>Schedule Meeting Day</th>
        <th>Email</th>
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

        $sql_A = "SELECT Request.address, Uname_Lessor, Request.bednum, Request.bathnum, Request.plan, start_year, start_month, start_day, end_year, end_month, end_day, schedule_year, schedule_month, schedule_day, Apartment.amenity, Apartment.areanum, User.email FROM Request, Apartment, User WHERE Uname_Lessee ='$Uname' AND Request.address=Apartment.address AND Request.bednum=Apartment.bednum AND Request.bathnum=Apartment.bathnum AND Request.plan=Apartment.plan AND Request.type='A' AND User.Uname=Uname_Lessor";

        // $sql_A="SELECT address FROM Request WHERE Uname_Lessee='TTY'";
        $sql_B = "SELECT Request.address, Uname_Lessor, Request.bednum, Request.bathnum, Request.plan, start_year, start_month, start_day, end_year, end_month, end_day, schedule_year, schedule_month, schedule_day, Private_Apartment.amenity, Private_Apartment.areanum, User.email FROM Request, Private_Apartment, User WHERE Uname_Lessee ='$Uname' AND Request.address=Private_Apartment.address AND Request.bednum=Private_Apartment.bednum AND Request.bathnum=Private_Apartment.bathnum AND Request.plan=Private_Apartment.plan AND Request.type='B' AND User.Uname=Uname_Lessor";
    $result_A = $conn->query($sql_A);
    // $reuslt_B = $conn->query($sql_A);
    $cnt = 1;
    // echo $Uname;
    // if ($result_B->num_rows==0) {
    //     echo "NOT FOUND";
    // }
    // while ($row=$result_B->fetch_array()) {
    //     $address=$row['address'];
    //     echo "$address";
    // }
    while($row=$result_A->fetch_array()){
          $id=$cnt;
          $address=$row['address'];
          $u_lessor=$row['Uname_Lessor'];
          $bednum=$row['bednum'];
          $bathnum=$row['bathnum'];
          $plan=$row['plan'];
          $amenity=$row['amenity'];
          $areanum=$row['areanum'];
          $email=$row['email'];
          $start_year=$row['start_year'];
          $start_month=$row['start_month'];
          $start_day=$row['start_day'];
          
          $end_year=$row['end_year'];
          $end_month=$row['end_month'];
          $end_day=$row['end_day'];
          
          $schedule_year=$row['schedule_year'];
          $schedule_month=$row['schedule_month'];
          $schedule_day=$row['schedule_day'];
          
  echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$u_lessor</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td><td class='data'><div data-id='$id'>$amenity</div></td>"
                        . "<td class='data'><div data-id='$id'>$start_year</div></td><td class='data'><div data-id='$id'>$start_month</div></td><td class='data'><div data-id='$id'>$start_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$end_year</div></td><td class='data'><div data-id='$id'>$end_month</div></td><td class='data'><div data-id='$id'>$end_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$schedule_year</div></td><td class='data'><div data-id='$id'>$schedule_month</div></td><td class='data'><div data-id='$id'>$schedule_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$email</div></td>"
                        . "<td><a href='pre_email.php?email=$email'>
                                  Email
                                </a></td>"
                        . "<td><a href='delete_schedule_zliu93.php?address=$address&Uname_Lessor=$u_lessor&bednum=$bednum&bathnum=$bathnum&plan=$plan'>
                                  Delete
                                </a></td>"
                       
      . "</tr> ";
          $cnt=$cnt+1;
 }
 $result_B=$conn->query($sql_B);
  while($row=$result_B->fetch_array()){
    //   echo "GET";
          $id=$cnt;
          $address=$row['address'];
          $u_lessor=$row['Uname_Lessor'];
          $bednum=$row['bednum'];
          $bathnum=$row['bathnum'];
          $plan=$row['plan'];
          $amenity=$row['amenity'];
          $areanum=$row['areanum'];
          $email=$row['email'];
          $start_year=$row['start_year'];
          $start_month=$row['start_month'];
          $start_day=$row['start_day'];
          
          $end_year=$row['end_year'];
          $end_month=$row['end_month'];
          $end_day=$row['end_day'];
          
          $schedule_year=$row['schedule_year'];
          $schedule_month=$row['schedule_month'];
          $schedule_day=$row['schedule_day'];
          
  echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$u_lessor</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td><td class='data'><div data-id='$id'>$amenity</div></td>"
                        . "<td class='data'><div data-id='$id'>$start_year</div></td><td class='data'><div data-id='$id'>$start_month</div></td><td class='data'><div data-id='$id'>$start_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$end_year</div></td><td class='data'><div data-id='$id'>$end_month</div></td><td class='data'><div data-id='$id'>$end_day</div></td>"
                        . "<td class='data'><div data-id='$id'>$schedule_year</div></td><td class='data'><div data-id='$id'>$schedule_month</div></td><td class='data'><div data-id='$id'>$schedule_day</div></td>"
                         . "<td class='data'><div data-id='$id'>$email</div></td>"
                        . "<td><a href='pre_email.php?email=$email'>
                                  Email
                                </a></td>"
                        . "<td><a href='delete_schedule_zliu93.php?address=$address&Uname_Lessor=$u_lessor&bednum=$bednum&bathnum=$bathnum&plan=$plan'>
                                  Delete
                                </a></td>"
      . "</tr> ";
           $cnt=$cnt+1;
 }


?>    

</table>