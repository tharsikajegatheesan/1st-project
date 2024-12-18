<?php
   $con= new mysqli('localhost','root','','findsell');

   if($con->connect_error)
   {
    die('connection Error:'. $con->connect_error);
   }
?>