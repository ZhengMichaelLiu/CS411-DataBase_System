<?php
$address = $_GET["address"];
echo $address
?>

<form method="get" action="housing_update.php">
  Address: <input type="varchar" name="address" value="<?php echo $_GET["address"]; ?>">
  <br><br>
  Number of bedrooms: <input type="int" name="bednum">
  <br><br>
  Number of bathrooms: <input type="int" name="bathnum">
  <br><br>
  Plan number: <input type="int" name="plan">
  <br><br>
  Area Number: <input type="int" name="areanum">
  <br><br>
  Price: <input type="float" name="price">
  <br><br>
  Amenity: <textarea name="amenity" rows="5" cols="40"></textarea>
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