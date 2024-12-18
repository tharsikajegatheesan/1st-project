<?php
include 'connectdb.php';

// Fetch all sellers from the db
$sql = "SELECT * FROM sellers";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Sellers</title>
    <link rel="stylesheet" href="manage_sellers.css">
</head>
<body>
<div class="nav">
        <nav class="navbar">
            <img class="logo" src="..\images\logo.png">
            <ul>
            <li><a class="active" href="#">Home</a></li>
                <li><a href="..\contact us\contact_us.php">Contact us</a></li>
                <li><a href="..\Project\Property.html">Properties</a></li>
                <li><a href="../faq/faq.html">FAQ</a></li>
                <li><a href="..\seller registration\index.php">Become a seller</a></li>
                <li><a href="..\Sign Up\signUp.html">Sign up</a></li>
                <li><a href="..\login\login.html">Login</a></li>

            </ul>
        </nav>
    </div>

<div class="container">
    <h2>Manage Sellers</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Seller Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // display table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['seller_type'] . "</td>";
                echo "<td>
                        <a href='edit_seller.php?id=" . $row['id'] . "'>Edit</a> | 
                        <a href='delete_seller.php?id=" . $row['id'] . "' onclick=\"return confirm(' delete this seller?');\">Delete</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
