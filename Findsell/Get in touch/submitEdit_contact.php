<?php
	include 'config_contact.php';

	if(isset($_GET['submit'])){
	$id = $_GET['id'];
	$name = $_GET['name'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$message = $_GET['message'];
	
	$query = "UPDATE details 
          SET 
              name = '$name', 
              email = '$email', 
              phone = '$phone', 
              message = '$message'
          WHERE id = '$id'";

		
		$data=mysqli_query($conn,$query);
		
		if($data){
			echo "<script>window.alert('Record Updated!!')</script>";
		 header("Location:read_contact.php");
	}
	else{
		echo"<script>window.alert('Error in Update!!')</script>";
	}
}
	
	mysqli_close($conn);
	
?>