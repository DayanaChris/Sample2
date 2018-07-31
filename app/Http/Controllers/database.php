<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="sample2";

 $mysqli = new mysqli($servername,$username, $password, $dbname);

    if($mysqli->connect_error){
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
?>

