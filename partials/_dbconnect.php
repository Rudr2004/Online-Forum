<?php
//Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "rdiscuss";

$conn = mysqli_connect("localhost", "root","");
if(!$conn){
    die("Error to connect".mysql_error());
}
mysqli_select_db($conn,"rdiscuss"); //65 completed


?> 
