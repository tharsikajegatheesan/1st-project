<?php
	include_once 'connectdb.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csst/addProperty.css">
<link rel="stylesheet" href="csst/back.css">

<title>Add Property</title>
<script>
	document.write(Date());
</script>
<script>
// JavaScript function for delete confirmation
function confirmDelete(url) {
    if (confirm("Are you sure you want to delete this property?")) {
        window.location.href = url;
    }
}

// JavaScript function for edit confirmation
function confirmEdit(url) {
    if (confirm("Are you sure you want to edit this property?")) {
        window.location.href = url;  // Proceed to the edit page if confirmed
    }
}
</script>
</head>
<body>
<div class="container">
            <nav class="navbar">
            <img class="logo" src="../images/logo.png">
            <ul>
            <li><a  href="../homepage/home.html">Home</a></li>
            <li><a href="../contact us/contact_us.php">Contact us</a></li>
            <li><a class="active" href="../Project/Property.html">Properties</a></li>
            <li><a href="../faq/faq.html">FAQ</a></li>
            <li><a href="../Get in touch/getintouch.html">Get in touch</a></li>
            <li><a href="../seller registration/index.php">Become a seller</a></li>
            <li><a href="../Sign Up/signUp.html">Sign up</a></li>
            <li><a href="../login/login.html">Login</a></li>
            </ul>
            </nav>
        </div>
<h1 class="edith1">Property Lists</h1>

<br>

<div class="EditProperty" style="border-style:groove; border-color: Darkblue">
    <table border="1" width="100%">
        <tr class="edittr">
            <th class="coll">ID</th>
            <th class="coll">Property Type</th>
            <th class="coll">Price</th>
            <th class="coll">Listing Type</th>
            <th class="coll">Location</th>
            <th class="coll">Description</th>
            <th class="coll">Owner Name</th>
            <th class="coll">Phone No</th>
            <th class="coll">Edit</th>
            <th class="coll">Delete</th>
        </tr>

        <?php
        $sql = "SELECT * FROM addproperty";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["type"] . "</td>
                    <td>" . $row["price"] . "</td>
                    <td>" . $row["ltype"] . "</td>
                    <td>" . $row["location"] . "</td>
                    <td>" . $row["description"] . "</td>
                    <td>" . $row["ownerName"] . "</td>
                    <td>" . $row["phoneNo"] . "</td>";
                
                // Edit link with confirmation
                echo "<td><a class='edit-link' href='#' onclick=\"confirmEdit('pEditProperty.php?id=" . $row['id'] . "&type=" . $row['type'] . "&price=" . $row['price'] . "&ltype=" . $row['ltype'] . "&location=" . $row['location'] . "&description=" . $row['description'] . "&ownerName=" . $row['ownerName'] . "&phoneNo=" . $row['phoneNo'] . "')\">Edit</a></td>";

                // Delete link with confirmation
                echo "<td><a class='delete-link' href='#' onclick=\"confirmDelete('pDeleteProperty.php?id=" . $row['id'] . "')\">Delete</a></td></tr>";
            }
        }

        echo "</table>";
        mysqli_close($conn);
        ?>
    </table>
</div>
<br><br>
<center>
    <li class="list" style="display: inline-block; margin-right: 15px;">
        <a href="pAddProperty.html" 
           style="text-decoration: none; color: white; font-size: 16px; font-family: Arial, sans-serif; padding: 10px 15px; 
           border-radius: 5px; background-color: blue;">
           Add new Property
        </a>
    </li>
</center>
<footer>
    <div class="footer-container">
        <h3>FindSell</h3>
        <br>
        <p> Our online property sales site offers a seamless platform for buying, selling and renting properties with ease.</p>
        <ul class="social-links">
            <li><a href="https://facebook.com" target="_blank"><img src="imaget/facebook1.png" alt="Facebook"></a></li>
            <li><a href="https://x.com" target="_blank"><img src="imaget/x.png" alt="x"></a></li>
            <li><a href="https://instagram.com" target="_blank"><img src="imaget/instagram.png" alt="Instagram"></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2024 FindSell</p>
    </div>
</footer>
</body>
</html>
``
