<?php
session_start();
$servername = "premium28";
$dbusername = "oceoqbsp";
$dbpassword = "A8NqJDmvAWS4";
$dbname = "oceoqbsp_slti_db";



// connect to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

?>