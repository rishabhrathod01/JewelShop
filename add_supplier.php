<?php

if(isset($_POST["Sid"]) && isset($_POST["Sname"]) && isset($_POST["Saddress"]) && isset($_POST["Sphoneno"]) && isset($_POST["Sdate"]) ){

$Sid=$_POST["Sid"];
$Sname=$_POST["Sname"];
$Saddress=$_POST["Saddress"];
$Sphoneno=$_POST["Sphoneno"];
$Sdate=$_POST["Sdate"];
echo "$Sid $Sname";
 
$conn=mysqli_connect('localhost','root','','jewelleryshop');

 if(!$conn ) {
      die('Could not connect');
   }
   $sql1=" SELECT Sid FROM supplierdetails WHERE Sid='$Sid' ";
   $result = mysqli_query( $conn, $sql1 );
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 > 0 ){
   	echo "Customer already exist";
   }
   else
   {
	$sql= "INSERT into supplierdetails (Sid,Sname,Saddress,Sphoneno,Sdate) VALUES('$Sid','$Sname','$Saddress','$Sphoneno','$Sdate') ";
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval) {
      die('Could not enter data');
   }
   echo "SuccessFul";
   header("Location: supplier.php");
}
mysqli_close($conn);
}
?>