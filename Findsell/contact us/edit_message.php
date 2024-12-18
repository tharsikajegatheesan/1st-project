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

   if(empty( $support_ID)||empty( $support_Name)||empty( $support_contact)||empty( $support_text))
   {
    echo "All required";
   }
   else {
           $sql="UPDATE support_us set s_name='$support_Name',s_contact='$support_contact',s_message='$support_text' WHERE s_id= ' $support_ID' ";
   
   if($con->query($sql))
   {}

   else{
    echo "Not Updated";
   }
}
 
header("Location: contact_us.php");
exit();
$con ->close();

?>