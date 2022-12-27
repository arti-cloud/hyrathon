<?php 

include "config.php";

$sql = "SELECT * FROM user_post";


$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Post</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

       

<table class="table">

    <thead>

        <tr>

        <th>ID</th>


       
        <th>Title</th>
        <th>Post</th>
        <th>Comments</th>
        
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
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['post']; ?></td>
                    <td><?php echo $row['comments']; ?></td>
                  
                    <td><a class="btn btn-info" href="comment.php?id=<?php echo $row['id']; ?>">Comment</a>&nbsp;
                    <a class="btn btn-success" href="delete.php?id=<?php echo $row['id']; ?>">Delete Post</a>
                    &nbsp;
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

