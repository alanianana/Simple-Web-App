<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>my app</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link"  href="index.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
            </ul></div>
        <?php if(!isset($_SESSION['id'])): ?>
        <form class="form-inline my-2 my-lg-0">
            <a href="login.php" class="btn btn-outline-warning">Log in</a>

            <a href="signup.php" class="btn btn-outline-warning">Sign up</a>
        </form>
        <?php else: ?>
        <div class="dropdown navbar-right">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                <?php $email=$_SESSION['email']; echo $email ?></button>
            <ul class="dropdown-menu">
                <li><a href="../views/logout.php">Logout</a></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</nav>



