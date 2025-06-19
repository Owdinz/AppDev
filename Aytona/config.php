<?php

//database connection
    $host = "localhost";
    $username = "root"; //accessing root folder
    $password = ""; //MUST HAVE A PASSWORD
    $database = "democms"; //the name of your database

    //create the connection string
    $conn = mysqli_connect($host, $username, $password, $database);

    //check connection
    if(!$conn){
        die("Connection failed: " .mysqli_connect_error());
    }
    ?>