<!doctype html>
<?php
include 'koneksi.php'; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <?php
    if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($conn, $_POST['user']));
        $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['pass'])));
        $sql_login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'")
            or die(mysqli_error($conn));
        if (mysqli_num_rows($sql_login) > 0) {
            session_start();
            $_SESSION['username'] = $user;         
            $_SESSION['password'] = $pass;
            echo "<script>window.location='" . baseurl("index.php") . "';</script>";
            
        } else {
    ?>
            <div class="alert alert-danger" role="alert">
                Gagal Login
            </div>
    <?php
        }
    }

    ?>
  

    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="user">           
        </div>
       
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="pass">
            
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>