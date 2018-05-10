<?php
    $address = $_GET["address"];
    $areanum = $_GET['areanum'];
    $bednum = $_GET['bednum'];
    $bathnum = $_GET['bathnum'];
    $plan = $_GET['plan'];
    $price = $_GET['price'];
    $amenity = $_GET['amenity'];
    $water = $_GET['water'];
    $electricity = $_GET['electricity'];
    $internet = $_GET['internet'];
?>

<form method="get" action="housing_update.php">
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
  <input type="radio" name="water" value="No">Not Included
  <input type="radio" name="water" value="Yes">Included
  <br><br>
  Electricity:   
  <input type="radio" name="electricity" value="No">Not Included
  <input type="radio" name="electricity" value="Yes">Included
  <br><br>
  Internet:   
  <input type="radio" name="internet" value="No">Not Included
  <input type="radio" name="internet" value="Yes">Included
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>