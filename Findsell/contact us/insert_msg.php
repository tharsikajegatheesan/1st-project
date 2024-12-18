<?php
   $con= new mysqli('localhost','root','','findsell');

   if($con->connect_error)
   {
    die('connection Error:'. $con->connect_error);
   }

$support_ID = $_POST["id"];
$support_Name = $_POST["name"];
$support_contact = $_POST["contact"];
$support_text= $_POST["message"];

$sql="INSERT INTO support_us VALUES('$support_ID','$support_Name','$support_contact','$support_text')";

if($con->query($sql))
{

}
else {
    echo "Error",$con->error;
}

header("Location: contact_us.php");
exit();
$con->close();

?>