<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $confirm_password = $_POST['confirm_password'];

    $password = $_POST['password'];

   

    $sql = "INSERT INTO `user_reg`(`email`, `phone`, `confirm_password`, `password`) VALUES ('$email','$phone','$confirm_password','$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    Email:<br>

    <input type="text" name="email">

    <br>

    Phone:<br>

    <input type="text" name="phone">

    <br>


    Password:<br>

    <input type="password" name="password">

    <br>

    confirm Password:<br>

<input type="confirm_password" name="confirm_password">

<br>

   <!-- Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>
-->
    <input type="submit" name="submit" value="submit">
<br>
<a href="view.php">View The Users</a>
  </fieldset>

</form>

</body>

</html>