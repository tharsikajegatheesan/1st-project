<?php
include 'connectdb.php';

// Check  form  submitted for update
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sellerType = mysqli_real_escape_string($conn, $_POST['sellerType']);
   

    // Update query
    $sql = "UPDATE sellers SET name='$name', email='$email', seller_type='$sellerType' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Seller updated successfully');</script>";
        header("Location: manage_sellers.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Check seller ID  passed and get the details
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM sellers WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Seller not found!";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Seller</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>


<div class="container">
    <h2>Edit Seller</h2>

    <form action="edit_seller.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

        <label for="sellerType">Seller Type</label>
        <select id="sellerType" name="sellerType" required>
            <option value="realEstate" <?php if ($row['seller_type'] == 'realEstate') echo 'selected'; ?>>Real Estate seller</option>
            <option value="auctionSeller" <?php if ($row['seller_type'] == 'auctionSeller') echo 'selected'; ?>>Auction Seller</option>
            <option value="landOwner" <?php if ($row['seller_type'] == 'landOwner') echo 'selected'; ?>>Land Owners</option>
            <option value="commercial" <?php if ($row['seller_type'] == 'commercial') echo 'selected'; ?>>Commercial</option>
        </select>

        

        <button type="submit" name="update">Update Seller</button>
    </form>
</div>

</body>
</html>
