<!DOCTYPE HTML>

<html lang="en">

    <?php
    
        session_start();
        include("config.php");
        include("functions.php"); // include data sanitising...
        
        // Connect to database...
    
        $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
        if (mysqli_connect_errno())
            
        {
            echo "Connection failed:".mysqli_connect_error();
            exit;
        }
    ?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/no_side.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    
        <a href="index.php">
            <div class="box logo">
            
            </div>    <!-- / logo -->
        </a> <!-- / Link -->
        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        
            
            <h1>Book Review</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            <a href="index.php">Home</a> | 
            <a href="page1.html">Page 1</a> | 
            <a href="page2.html">Page 2</a> | 
            <a href="page3.html">Page 3</a> | 
            <a href="contact.html">Contact</a>
        </div>    <!-- / nav -->