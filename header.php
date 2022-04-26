<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<title>PHP Website</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
    <div class="wrapper">
        <div class ="inner-wrapper">
        <div class ="logo-container">
        <h1>MY<span>blog</span></h1>
        </div>

        <ul class="navigation">
        <a href="index.php"><li>Home</li></a>
        <a href="discover.php"><li>About</li></a>
        
        <a href="blog.php"><li>Find Blogs</li></a>
        <?php
        if(isset($_SESSION["useruid"])){
            echo "<a href='profile.php'><li>Profile up</li></a>";
            echo "<a href='logout.php'><li>Logout</li></a>";
        }
        else{
            echo "<a href='signup.php'><li>Sign up</li></a>";
            echo "<a href='login.php'><li>Log in</li></a>";
        }
        ?>
       
        </ul>
        </div>
    </div>
    </nav> 

    <div class="center">
