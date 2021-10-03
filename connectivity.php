<?php  
    $db = mysqli_connect("localhost","root","","weblabz");

    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?> 