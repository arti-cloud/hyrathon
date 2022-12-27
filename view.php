<?php 

include "config.php";

$sql = "SELECT * FROM user_reg";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

       

<table class="table">

    <thead>

        <tr>

        <th>ID</th>


        <th>Email</th>
        <th>Phone</th>

        <th>First Name</th>

        <th>Last Name</th>
        <th>Role</th>
    

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                  

                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                   
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Update Profile</a>&nbsp;&nbsp;
                    <?php 

if($row['role'] == 'writer'){
   ?>  <a class="btn btn-success" href="create-post.php?id=<?php echo $row['id']; ?>">Add Post</a>
 <?php   
}
else {
 
}
?>&nbsp;
<a class="btn btn-success" href="view-post.php?id=<?php echo $row['id']; ?>">View Post</a>

                </td>






                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

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