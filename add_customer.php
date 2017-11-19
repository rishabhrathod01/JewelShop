<?php

if(isset($_POST["Cid"]) && isset($_POST["Cname"]) && isset($_POST["Caddress"]) && isset($_POST["Cphoneno"]) && isset($_POST["Cdate"]) ){

$Cid=$_POST["Cid"];
$Cname=$_POST["Cname"];
$Caddress=$_POST["Caddress"];
$Cphoneno=$_POST["Cphoneno"];
$Cdate=$_POST["Cdate"];
 
$conn=mysqli_connect('localhost','root','','jewelleryshop');

 if(!$conn ) {
      die('Could not connect');
   }
   $sql1=" SELECT Cid FROM customerdetails WHERE Cid='$Cid' ";
   $result = mysqli_query( $conn, $sql1 );
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 > 0 ){
   	echo "Customer already exist";
   	header ("Location: customer.php");
   }
   else
   {
	$sql= "INSERT into customerdetails (Cid,Cname,Caddress,Cphoneno,Cdate) VALUES('$Cid','$Cname','$Caddress','$Cphoneno','$Cdate') ";
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval) {
      die('Could not enter data');
   }
   
   header("Location: customer.php");
}
mysqli_close($conn);
}
?>