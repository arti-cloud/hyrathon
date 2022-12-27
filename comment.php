

<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $comments = $_POST['comments'];

        $user_id = $_POST['user_id'];
 
     

 
      

        $sql = "UPDATE `user_post` SET `comments`='$comments' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `user_post` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $comments = $row['comments'];    
        

            $id = $row['id'];

        } 

    ?>

        

        <form action="" method="post">

          <fieldset>

            <legend>Add comment:</legend>

           Comment:<br>

            <input type="text" name="comments" value="<?php echo $comments; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>



            
            

<br>
            
            <br>

            <input type="submit" value="Update" name="update">
            <br>
            <a href="view-post.php">View Post</a>

            
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




