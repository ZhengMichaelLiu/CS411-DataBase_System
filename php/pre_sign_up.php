<h2>Sign Up Information</h2>
<br><br>
<form method="get" action="sign_up_info.php">
  User Name: <input type="varchar" name="Uname">
  <br><br>
  Password: <input type="varchar" name="passcode">
  <br><br>
  Confirm Password: <input type="varchar" name="confirm_passcode">
  <br><br>
  Name: <input type="varchar" name="name">
  <br><br>
  Phone Number:  <input type="int" name="phone">
  <br><br>
  User Type:   
  <input type="radio" name="usertype" value=0> Lessee
  <input type="radio" name="usertype" value=1> Company Lessor
  <input type="radio" name="usertype" value=2> Individual Lessor
  <br><br>
  If you are a company lessor, please enter company name:   
  <input type="varchar" name="company">
  <br><br>
  <input type="submit" name="submit" value="Sign Up Now">  
</form>