<?php

session_start();

if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
    header("location: admin.php");
}

if(isset($_POST['submit'])){

    define('EMAIL', 'admin@gmail.com');
    define('PASSWORD', 'password');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? $_POST['remember'] : NULL;
    
    if(EMAIL === $email){
        if(PASSWORD === $password){
            $_SESSION['email'] = $email;

            // set coolie
            if($remember){
                setcookie('email', $email, time() + 3600);
            }
            header("location: admin.php");
        }else{
            echo 'Password Not Match!';
        }
    }else{
        echo 'Email Not Match!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-md-offset-3 col-sm-12">
                <div class="card p-5">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="admin@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" name="submit" value="Login" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
