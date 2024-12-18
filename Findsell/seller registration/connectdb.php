<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "findsell"; 

//connection making
$conn = new mysqli('localhost', 'root', '', 'findsell');


// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); //show error for not connecting
}


echo "Connected successfully!";
?>