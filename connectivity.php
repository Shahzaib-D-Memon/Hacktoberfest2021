<?php  
    $db = mysqli_connect("localhost","root","","DatabaseName");

    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?> 
