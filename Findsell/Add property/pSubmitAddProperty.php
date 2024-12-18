<?php
	include_once'connectdb.php';
?>

<?php
	$type = $_POST['type'];
    $price = $_POST['price'];
    $ltype = $_POST['ltype'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $ownerName = $_POST['ownerName'];
    $phoneNo = $_POST['phoneNo'];
	
	//sql query
	$sql = "INSERT INTO addproperty(id,type,price,ltype,location,description,ownerName,phoneNo)VALUES('','$type','$price','$ltype','$location','$description','$ownerName','$phoneNo')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted successfully')</script>";
		header("Location:pAddPropertyindex.php");
	}
	else{
		echo "<script>alert('Insertion Error')</script>";
		
		
	}
	//close connection
	mysqli_close($conn);
?>