<?php
	include 'config_contact.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];


	// SQL query to insert the booking details
	$sql = "INSERT INTO details (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

	// Execute query and check for success
	if (mysqli_query($conn,$sql)) {
			echo"<script>alert('Message saved Successfully!!')</script>";
			 header("Location:read_contact.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the database connection
	$conn->close();
?>