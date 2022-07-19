<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/urembo.css">
</head>
<body class="body_one">
    <div class="container">
        <div class="login_box">
        <div class="row">
            <div class="col-md-6 login_left">
                <h2>Login Here</h2>
                <form method="post" action="login_handler.php">
                    <div class="form-group">
                        <label >Username</label>
                        <input class="form-control" name="user" type="text"><br>
                        <label >Password</label>
                        <input class="form-control" name="password" type="password"><br>
                        <button  class="btn btn-primary" name="btn_login" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login_right">
                <h2>Register Here</h2>
                <form method="post" action="registation_handler.php">
                    <div class="form-group">
                        <h6>Username</h6>
                        <input class="form-control" name="user"  type="text"><br>
                        <h6>Password</h6>
                        <input class="form-control" name="password" type="password"><br>
                        <button class="btn btn-primary" name="btn_register" type="submit">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</body>
</html>
