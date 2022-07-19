<?php
//Check if the update button is clicked
if (isset($_POST["btn_update"])){
    //Receive the updated data from the form
    $userId = $_POST["u_id"];
    $updatedName = $_POST["user"];
    $updatedPassword =$_POST["password"];
    //Connect to the database to return data
    require_once "db_connection.php";
    //Create update query
    $updateQuery ="UPDATE `users` SET `id`=null,`name`='',`password`='' WHERE id =$'userId'";
    //Finally execute the update query by use of mysqli() query
    $update = mysqli_query($connection,$updateQuery);
    if (isset($update)){
        //Redirect the users to users.php to see changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }
}