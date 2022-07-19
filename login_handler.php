
    <?php
    if (isset($_POST["btn_login"])) {
        $name =$_POST["user"];
        $pass =$_POST["password"];
        //Redirect the user to users.php
        header("location:users.php");
        //connect to the database to fetch all users
        require_once "db_connection.php";
        //Prepare the select query to fetch users
        $selectQuery = "SELECT * FROM `users` WHERE name = '$name' and password = '$password'";
        $existingusers = mysqli_query($connection,$selectExistinguserquery);
        $countExistingUsers = mysqli_num_rows($existingusers);
        if ($countExistingUsers >0){
            session_start();
            $_SESSION["user"] = $name;
            header("home.php");
        }else{
            echo "Wrong username or password";
        }
        //Finally group the users using mysqli_query
        $users = mysqli_query($connection, $selectQuery);
        //use a loop to display all users
        foreach ($users as $user) {
            $name = $user["user"];
            $password = $user["password"];
            $id = $user["u_id"];
            echo "<tr>
                <td>$name</td>
                <td><a class='btn  btn-danger' href='delete_handler.php?u_id=$id'></a>Delete</td>
                <td><a class='btn btn-info' href='update.php?u_id=$id'></a>Update</td>

</tr>";
        }
    }
    ?>
</table>
</body>
</html>
















<?php
if (isset($_POST["btn_login"])){
    $username = $_POST["user"];
    $password = $_POST["password"];
    //Connect to the database to return data
    require_once "db_connection.php";
    header("location:users_handler.php");

}
