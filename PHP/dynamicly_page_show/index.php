<?php

if(isset($_GET['page'])){

    $page = $_GET['page'] . '.php';
}else{
    $page = 'home.php';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg text-white bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=about">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="index.php?page=service">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="index.php?page=contact">Contact</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <?php 
        if(file_exists($page)){
            include $page;
        }else{
            include './404.php';
        }
     ?>
    

    <section class="bg-dark text-white text-center mt-5" style="line-height: 60px;">
        <p>Copy Right By Developer Biplob | 2022</p>
    </section>
</body>
</html>