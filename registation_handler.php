<?php
//Check if the button has been clicked
if (isset($_POST["btn_register"])){
    //Start receiving data from the form
    $name =$_POST["user"];
    $pass =$_POST["password"];
    //Now proceed to connect to the database to serve your data
    require_once "db_connection.php";
    $selectExistinguserquery = "SELECT * FROM `users` WHERE ''";
    $existingusers = mysqli_query($connection,$selectExistinguserquery);
    $countExistingUsers = mysqli_num_rows($existingusers);
    if ($countExistingUsers > 0 ){
        echo "Sorry username exists";
    }else{
        $save = mysqli_query($connection,$insertQuery);
        }
    $insertQuery="INSERT INTO `users`(`id`, `name`, `password`) VALUES (null,'$name','$pass')";
    //Finally save the data using mysqli_query()
    $save = mysqli_query($connection,$insertQuery);
    //Check if the saving was successful
    if (isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }







}