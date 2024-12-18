<?php
	include_once'connectdb.php';
?>
<?php
    $id = $_GET['id'];

    $query = "delete from addproperty where id = '$id'";

    $data = mysqli_query($conn, $query);
    
    if($data){
		echo "<script>alert('Property Deleted!'</script>)";
        header("Location:pAddPropertyIndex.php");

	}
	else{
		echo"<script>alert('Error in Delete')</script>";
	}

mysqli_close($conn);
?>