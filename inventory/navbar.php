<?php 
    session_start();
    include('../dbconnect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../res/css/bootstrap.min.css">
    </head>
    <body class="bg-info">
        <?php
            if(isset($_SESSION['user'])){
                ?>
                <nav class="nav navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <h1>Sasindu Products - <?php echo $_SESSION['user']; ?></h1>
                        <h2 class="text-center bg-primary p-2 m-3">Inventory Dashboard</h2>
                    </div>

                    <ul class="nav nav-navbar navbar-right">
                        <li><a class="nav nav-link fw-bold" href="../logout.php">LogOut</a></li>
                        <li><a class="nav nav-link fw-bold" href="../home.php">Go Home</a></li>                        
                    </ul>
                </nav>
                <?php
            }else{
                ?>
                <nav class="nav navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <h1>Sasindu Products</h1>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav nav-link fw-bold" href="../login.php">Login</a></li>
                    </ul>
                </nav>
                <?php
            }
        ?>
        