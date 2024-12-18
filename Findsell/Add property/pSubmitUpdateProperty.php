<?php
	include_once'connectdb.php';
?>

<?php
if($_GET['submit']){
	$id = $_GET['id'];
	$type = $_GET['type'];
    $price =  $_GET['price'];
    $ltype = $_GET['ltype'];
    $location =  $_GET['location'];
    $description =  $_GET['description'];
    $ownerName =  $_GET['ownerName'];
    $phoneNo =  $_GET['phoneNo'];
	
	$query = "UPDATE addproperty SET
                        type = '$type',
                        price = '$price',
                        ltype = '$ltype',
                        location = '$location',
                        description = '$description',
                        ownerName = '$ownerName',
                        phoneNo = '$phoneNo'
                        WHERE id = '$id'";

					
	$data = mysqli_query($conn,$query);
	
	if($data){
		echo "<script>alert('Record Updated!')</script>";
        header("Location:pAddPropertyIndex.php");

	}
	else{
		echo "<script>alert('Error in Update')</script>";
	}
}
mysqli_close($conn);
?>
