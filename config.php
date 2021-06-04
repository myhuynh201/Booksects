<?php
    define('DBHOST', 'localhost');
    define('DBNAME', 'library');
    define('DBUSER', 'testuser');
    define('DBPASS', 'mypassword');
    define('DBCONNSTRING','mysql:dbname=library;charset=utf8mb4');

    /* Attempt to connect to MySQL database */
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
