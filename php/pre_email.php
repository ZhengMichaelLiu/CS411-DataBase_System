<?php
$email = $_GET["email"];
echo $email
?>

<form method="get" action="email.php">
  Send to: <input type="varchar" name="email" value="<?php echo $_GET["email"]; ?>">
  <br><br>
  Send by: <input type="varchar" name="contact_name">
  <br><br>
  Contact email: <input type="varchar" name="return email">
  <br><br>
  Subject: <input type="varchar" name="subject">
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="send" value="Send"> 
</form>