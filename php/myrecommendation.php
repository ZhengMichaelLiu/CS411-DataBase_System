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
        <th>Company</th>
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

    $sql = "SELECT
                   Request.bednum,
                   Private_Apartment.areanum,
                   Private_Apartment.price,
                   Private_Apartment.internet
                   
            FROM    Request, Private_Apartment 
            WHERE   Uname_Lessee ='$Uname' AND
                    Request.address=Private_Apartment.address AND
                    Request.bednum=Private_Apartment.bednum AND
                    Request.bathnum=Private_Apartment.bathnum AND
                    Request.plan=Private_Apartment.plan";
    $sql2 = "SELECT
                   Request.bednum,
                   Apartment.areanum,
                   Apartment.price,
                   Apartment.internet
                   
            FROM    Request, Apartment 
            WHERE   Uname_Lessee ='$Uname' AND
                    Request.address=Apartment.address AND
                    Request.bednum=Apartment.bednum AND
                    Request.bathnum=Apartment.bathnum AND
                    Request.plan=Apartment.plan";

$my_schedule = $conn->query($sql);
//echo $Uname;
$bed_cnt = array(0,0,0,0,0,0);
$area_cnt = array(0,0,0,0,0,0,0);

$cnt = 1;
$min_price=10000;
$max_price=0;
$internet_yes=0;
$internet_no =0;

$rec_bednum=0;
$rec_areanum=0;
$rec_min_price=0;
$rec_max_price=0;
$rec_internet=0;

while($row = $my_schedule->fetch_array()){
           $curr_bednum     =   $row['bednum'];
           $curr_areanum    =   $row['areanum'];
           $curr_price      =   $row['price'];
           $curr_internet   =   $row['Private_Apartment.internet'];
           //echo $bednum;

            if ($curr_bednum <= 5) {
                $bed_cnt[$curr_bednum-1] += 1;
            }
            else {
                $bed_cnt[5] += 1;
            }
        
            if ($curr_areanum!=8) {
                $area_cnt[$curr_areanum-1]+=1;
            }
            else {
                $area_cnt[6]+=1;
            }
           
            if ($curr_price < $min_price) {
                $min_price = $curr_price;
            }
            if ($curr_price > $max_price) {
                $max_price = $curr_price;
            }
           
            if ($curr_internet == "Yes") {
                $internet_yes = $internet_yes+1;
            }
            else {
                $internet_no = $internet_no+1;
            }
}

$my_schedule2 = $conn->query($sql2);
while($row = $my_schedule2->fetch_array()){
           $curr_bednum =$row['bednum'];
           $curr_areanum=$row['areanum'];
           $curr_price  =$row['price'];
           $curr_internet = $row['Apartment.internet'];
           //echo $bednum;
            if ($curr_bednum <= 5) {
                $bed_cnt[$curr_bednum-1] += 1;
            }
            else {
                $bed_cnt[5] += 1;
            }
        
            if ($curr_areanum!=8) {
                $area_cnt[$curr_areanum-1]+=1;
            }
            else {
                $area_cnt[6]+=1;
            }
           
            if ($curr_price < $min_price) {
                $min_price = $curr_price;
            }
            if ($curr_price > $max_price) {
                $max_price = $curr_price;
            }
           
            if ($curr_internet == "Yes") {
                $internet_yes = $internet_yes+1;
            }
            else {
                $internet_no = $internet_no+1;
            }
}

// after this loop, 
// find most popular bed num,
$max_bednum = max($bed_cnt);
$rec_bednum = array_search($max_bednum, $bed_cnt);
$rec_bednum = $rec_bednum + 1;

// find most popular area num,
$max_areanum = max($area_cnt);
$rec_areanum = array_search($max_areanum, $area_cnt);
$rec_areanum = $rec_areanum + 1;

// find price range (min_price - max_price)
$rec_min_price = $min_price;
$rec_max_price = $max_price;

// find if include internet ('Yes', 'No')
if(internet_yes >= internet_no){
    $rec_internet = 'Yes';
}
else{
    $rec_internet = 'No';
}
// Then search Through the database

$recommendation_sql_apartment = " SELECT address, areanum, bednum, bathnum, plan, price, amenity, water, electricity, internet, company
                                  FROM Apartment
                                  WHERE bednum=$rec_bednum AND areanum=$rec_areanum AND internet='$rec_internet' AND price > $rec_min_price AND price < $rec_max_price";

$recommendation_sql_private_apartment = " SELECT address, areanum, bednum, bathnum, plan, price, amenity, water, electricity, internet, company
                                          FROM Private_Apartment
                                          WHERE bednum=$rec_bednum AND areanum=$rec_areanum AND internet='$rec_internet' AND price > $rec_min_price AND price < $rec_max_price";

$my_rec1 = $conn->query($recommendation_sql_apartment);
$idnum = 1;

while($row=$my_rec1->fetch_array()){
          $id=$idnum;
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
          $company=$row['company'];
   echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td>"
                        . "<td class='data'><div data-id='$id'>$price</div></td><td class='data'><div data-id='$id'>$amenity</div></td><td class='data'><div data-id='$id'>$water</div></td>"
                        . "<td class='data'><div data-id='$id'>$electricity</div></td><td class='data'><div data-id='$id'>$internet</div></td><td class='data'><div data-id='$id'>$company</div></td>"
                        . "<td><a href='pre_schedule_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet&company=$company'>
                                  Schedule
                                </a></td>"
                        // . "<td><a href='pre_housing_update_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet'>
                        //           Update
                        //         </a></td>"
                        // . "<td><a href='delete_zliu93.php?address=$address&bednum=$bednum&bathnum=$bathnum&plan=$plan'>
                        //           Delete
                        //         </a></td>"
      . "</tr> ";
           $idnum=$idnum+1;
 }


$my_rec2 = $conn->query($recommendation_sql_private_apartment);
while($row=$my_rec2->fetch_array()){
          $id=$idnum;
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
          $company=$row['company'];
   echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td>"
                        . "<td class='data'><div data-id='$id'>$price</div></td><td class='data'><div data-id='$id'>$amenity</div></td><td class='data'><div data-id='$id'>$water</div></td>"
                        . "<td class='data'><div data-id='$id'>$electricity</div></td><td class='data'><div data-id='$id'>$internet</div></td><td class='data'><div data-id='$id'>$company</div></td>"
                        . "<td><a href='pre_schedule_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet&company=$company'>
                                  Schedule
                                </a></td>"
                        // . "<td><a href='pre_housing_update_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet'>
                        //           Update
                        //         </a></td>"
                        // . "<td><a href='delete_zliu93.php?address=$address&bednum=$bednum&bathnum=$bathnum&plan=$plan'>
                        //           Delete
                        //         </a></td>"
      . "</tr> ";
           $idnum=$idnum+1;
 }

?>    

</table>