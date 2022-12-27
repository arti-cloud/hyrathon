<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $title = $_POST['title'];

    $post = $_POST['post'];


    $sql = "INSERT INTO `user_post`(`title`, `post`) VALUES ('$title','$post')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New post added successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>



<form action="" method="POST">

  <fieldset>

    <legend>Adding post:</legend>

    Title:<br>

    <input type="text" name="title">

    <br>

    Post:<br>

    <input type="text" name="post">

    <br><br>


    <input type="submit" name="submit" value="submit">
    <br><br>
    <a href="view-post.php">View Post</a>

  </fieldset>

</form>

</body>

</html>