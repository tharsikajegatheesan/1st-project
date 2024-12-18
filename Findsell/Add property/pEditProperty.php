<?php
	include_once'connectdb.php';
?>
<?php
	$id = $_GET['id'];
	$type = $_GET['type'];
    $price =  $_GET['price'];
    $ltype = $_GET['ltype'];
    $location =  $_GET['location'];
    $description =  $_GET['description'];
    $ownerName =  $_GET['ownerName'];
    $phoneNo =  $_GET['phoneNo'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csst/addProperty.css">
<link rel="stylesheet" href="csst/back.css">

<script>
	document.write(Date());
</script>
<title>Add Property</title>

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

<h3 class="edith3">Edit the property details</h3>

<br>
<center>
	<div class="editData" style="border-style:groove; border-color:Darkblue;">
<form action="pSubmitUpdateProperty.php" method="GET">
<table class="table3" border="0" width="25%">
	<tr class="tr3">
		<td class="td3">Property ID </td>
		<td><input type="number" value="<?php echo "$id"?>" name="id" readonly></td>
	</tr>
	<tr class="tr3">
		<td class="td3">Property Type</td>
		<td><input type="text" value="<?php echo "$type" ?>" name="type"></td>
	</tr>
	<tr class="tr3">
		<td class="td3">Price </td>
		<td><input type="text" value="<?php echo "$price"?>" name="price"></td>
	</tr>
    <tr class="tr3">
		<td class="td3">Listing Type </td>
		<td><input type="text" value="<?php echo "$ltype"?>" name="ltype"></td>
	</tr>
    <tr class="tr3">
		<td class="td3">Location </td>
		<td><input type="text" value="<?php echo "$location"?>" name="location"></td>
	</tr>
	<tr class="tr3">
		<td class="td3">Description </td>
		<td><input type="text" value="<?php echo "$description"?>" name="description"></td>
	</tr>
		<td class="td3">Owner Name</td>
		<td><input type="text" value="<?php echo "$ownerName"?>" name="ownerName"></td>
	</tr>
    <tr class="tr3">
		<td class="td3">Phone Number </td>
		<td><input type="number" value="<?php echo "$phoneNo"?>" name="phoneNo"></td>
	</tr>
	<tr class="tr3">
		<td class="td3"></td>
		<td><input type="submit" class="submit3" value="Update" name="submit"></td>
	</tr>
	</table>
</form>
</div>
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