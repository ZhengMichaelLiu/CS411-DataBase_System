<?php
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
    $company=$_GET["company"];
?>

<form method="get" action="schedule_zliu93.php">
    Address: <input type="varchar" name="address" value="<?php echo $_GET["address"]; ?>">
    <br><br>
    Number of bedrooms: <input type="int" name="bednum" value="<?php echo $_GET["bednum"]; ?>">
    <br><br>
    Number of bathrooms: <input type="int" name="bathnum" value="<?php echo $_GET["bathnum"]; ?>">
   <br><br>
  Plan number: <input type="varchar" name="plan" value="<?php echo $_GET["plan"]; ?>">
  <br><br>
  Area Number: <input type="int" name="areanum" value="<?php echo $_GET["areanum"]; ?>">
  <br><br>
  Price: <input type="float" name="price" value="<?php echo $_GET["price"]; ?>">
  <br><br>
  Amenity: <textarea name="amenity" rows="5" cols="40" ><?php echo $_GET["amenity"]; ?></textarea>
  <br><br>
  Water:   
  <input type="varchar" name="water" value="<?php echo $_GET["water"]; ?>">
  <br><br>
  Electricity:   
  <input type="varchar" name="electricity" value="<?php echo $_GET["electricity"]; ?>">
  <br><br>
  Internet:   
  <input type="varchar" name="internet" value="<?php echo $_GET["internet"]; ?>">
  <br><br>
  Company:   
  <input type="varchar" name="company" value="<?php echo $_GET["company"]; ?>">
  <br><br>
  
  Schedule Date to check: 
                Year:<select name = "schedule_date_year">
                                <option  value= 2018 >2018</option>
                 </select>
                 
                Month:<select name = "schedule_date_month">
                                <option  value= 1 >1</option>
                                <option  value= 2 >2</option>
                                <option  value= 3 >3</option>
                                <option  value= 4 >4</option>
                                <option  value= 5 >5</option>
                                <option  value= 6 >6</option>
                                <option  value= 7 >7</option>
                                <option  value= 8 >8</option>
                                <option  value= 9 >9</option>
                                <option  value= 10 >10</option>
                                <option  value= 11 >11</option>
                                <option  value= 12 >12</option>
                 </select>
                Day:<select name = "schedule_date_day">
                                <option  value= 1 >1</option>
                                <option  value= 2 >2</option>
                                <option  value= 3 >3</option>
                                <option  value= 4 >4</option>
                                <option  value= 5 >5</option>
                                <option  value= 6 >6</option>
                                <option  value= 7 >7</option>
                                <option  value= 8 >8</option>
                                <option  value= 9 >9</option>
                                <option  value= 10 >10</option>
                                <option  value= 11 >11</option>
                                <option  value= 12 >12</option>
                                <option  value= 13 >13</option>
                                <option  value= 14 >14</option>
                                <option  value= 15 >15</option>
                                <option  value= 16 >16</option>
                                <option  value= 17 >17</option>
                                <option  value= 18 >18</option>
                                <option  value= 19 >19</option>
                                <option  value= 20 >20</option>
                                <option  value= 21 >21</option>
                                <option  value= 22 >22</option>
                                <option  value= 23 >23</option>
                                <option  value= 24 >24</option>
                                <option  value= 25 >25</option>
                                <option  value= 26 >26</option>
                                <option  value= 27 >27</option>
                                <option  value= 28 >28</option>
                                <option  value= 29 >29</option>
                                <option  value= 30 >30</option>
                                <option  value= 31 >31</option>
                                
                 </select>
                 
  <br><br>
  Contract Start Date: 
                Year:<select name = "contract_start_year">
                                <option  value= 2018 >2018</option>
                                <option  value= 2019 >2019</option>
                                <option  value= 2020 >2020</option>
                </select>
                Month:<select name = "contract_start_month">
                                <option  value= 1 >1</option>
                                <option  value= 2 >2</option>
                                <option  value= 3 >3</option>
                                <option  value= 4 >4</option>
                                <option  value= 5 >5</option>
                                <option  value= 6 >6</option>
                                <option  value= 7 >7</option>
                                <option  value= 8 >8</option>
                                <option  value= 9 >9</option>
                                <option  value= 10 >10</option>
                                <option  value= 11 >11</option>
                                <option  value= 12 >12</option>
                 </select>
                Day:<select name = "contract_start_day">
                                <option  value= 1 >1</option>
                                <option  value= 2 >2</option>
                                <option  value= 3 >3</option>
                                <option  value= 4 >4</option>
                                <option  value= 5 >5</option>
                                <option  value= 6 >6</option>
                                <option  value= 7 >7</option>
                                <option  value= 8 >8</option>
                                <option  value= 9 >9</option>
                                <option  value= 10 >10</option>
                                <option  value= 11 >11</option>
                                <option  value= 12 >12</option>
                                <option  value= 13 >13</option>
                                <option  value= 14 >14</option>
                                <option  value= 15 >15</option>
                                <option  value= 16 >16</option>
                                <option  value= 17 >17</option>
                                <option  value= 18 >18</option>
                                <option  value= 19 >19</option>
                                <option  value= 20 >20</option>
                                <option  value= 21 >21</option>
                                <option  value= 22 >22</option>
                                <option  value= 23 >23</option>
                                <option  value= 24 >24</option>
                                <option  value= 25 >25</option>
                                <option  value= 26 >26</option>
                                <option  value= 27 >27</option>
                                <option  value= 28 >28</option>
                                <option  value= 29 >29</option>
                                <option  value= 30 >30</option>
                                <option  value= 31 >31</option>
                                
                 </select>
  <br><br>
  Contract End Date: 
                Year:<select name = "contract_end_year">
                                <option  value= 2018 >2018</option>
                                <option  value= 2019 >2019</option>
                                <option  value= 2020 >2020</option>
                </select>
                
                Month:<select name = "contract_end_month">
                                <option  value= 1 >1</option>
                                <option  value= 2 >2</option>
                                <option  value= 3 >3</option>
                                <option  value= 4 >4</option>
                                <option  value= 5 >5</option>
                                <option  value= 6 >6</option>
                                <option  value= 7 >7</option>
                                <option  value= 8 >8</option>
                                <option  value= 9 >9</option>
                                <option  value= 10 >10</option>
                                <option  value= 11 >11</option>
                                <option  value= 12 >12</option>
                 </select>
                Day:<select name = "contract_end_day">
                                <option  value= 1 >1</option>
                                <option  value= 2 >2</option>
                                <option  value= 3 >3</option>
                                <option  value= 4 >4</option>
                                <option  value= 5 >5</option>
                                <option  value= 6 >6</option>
                                <option  value= 7 >7</option>
                                <option  value= 8 >8</option>
                                <option  value= 9 >9</option>
                                <option  value= 10 >10</option>
                                <option  value= 11 >11</option>
                                <option  value= 12 >12</option>
                                <option  value= 13 >13</option>
                                <option  value= 14 >14</option>
                                <option  value= 15 >15</option>
                                <option  value= 16 >16</option>
                                <option  value= 17 >17</option>
                                <option  value= 18 >18</option>
                                <option  value= 19 >19</option>
                                <option  value= 20 >20</option>
                                <option  value= 21 >21</option>
                                <option  value= 22 >22</option>
                                <option  value= 23 >23</option>
                                <option  value= 24 >24</option>
                                <option  value= 25 >25</option>
                                <option  value= 26 >26</option>
                                <option  value= 27 >27</option>
                                <option  value= 28 >28</option>
                                <option  value= 29 >29</option>
                                <option  value= 30 >30</option>
                                <option  value= 31 >31</option>
                                
                 </select>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>