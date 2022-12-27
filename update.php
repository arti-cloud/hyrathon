<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $user_id = $_POST['user_id'];
 
        $lastname = $_POST['lastname'];

        $role = $_POST['role']; 
     

 
      

        $sql = "UPDATE `user_reg` SET `firstname`='$firstname',`lastname`='$lastname',`role`='$role' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `user_reg` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $role = $row['role'];

        

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="lastname" value="<?php echo $lastname; ?>">

            <br>


            Role:<br>

            <input type="radio" name="role" value="editor" <?php if($role == 'editor'){ echo "checked";} ?> onclick="show1();">editor

            <input type="radio" name="role" value="writer" <?php if($role == 'writer'){ echo "checked";} ?> onclick="show2();">Writer

            <br>
            

<br>
            
            <br>

            <input type="submit" value="Update" name="update">
            <br>
            <a href="view.php">Add a Post</a>

            
            <button>

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 

<script>
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
    </script>

    <style>
.hide {
  display: none;
}
        </style>