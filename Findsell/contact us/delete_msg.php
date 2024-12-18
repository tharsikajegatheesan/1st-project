<?php
$con = new mysqli('localhost', 'root', '', 'findsell');

// connection
if ($con->connect_error) {
    die('Connection Error: ' . $con->connect_error);
}

// Get the support ID 
$support_ID = $_POST["id"];

//  delete query
$sql = "DELETE FROM support_us WHERE s_id='$support_ID'";

if ($con->query($sql) === TRUE) {
    // Successful deletion
    header("Location: contact_us.php");
    exit();
} else {
    // Error message if deletion fails
    echo "Not Deleted: " . $con->error;
}

// Close 
$con->close();
?>
