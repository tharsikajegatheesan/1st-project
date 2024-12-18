<?php
include 'connectdb.php';

// Check seller ID  in  URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Delete query
    $sql = "DELETE FROM sellers WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Seller deleted successfully');</script>";
        header("Location: manage_sellers.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
