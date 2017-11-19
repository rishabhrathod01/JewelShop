<?php

if(isset($_POST["Iid"]) && isset($_POST["Iweight"]) && isset($_POST["Itype"]) && isset($_POST["Icategory"]) && isset($_POST["Icopies"]) && isset($_POST["Idate"])){

$Iid=$_POST["Iid"];
$Iweight=$_POST["Iweight"];
$Itype=$_POST["Itype"];
$Icategory=$_POST["Icategory"];
$Icopies=$_POST["Icopies"];
$Idate=$_POST["Idate"];
$conn=mysqli_connect('localhost','root','','jewelleryshop');

 if(!$conn ) {
      die('Could not connect');
   }
 if ($Itype=='gold') {
   $Imc=300;
} elseif ($Itype=='silver') {
    $imc=8; 
} else {
    $imc=0;
}	
   $sql1=" SELECT Iid FROM itemdetails WHERE Iid='$Iid'";
   $result = mysqli_query( $conn, $sql1 );
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 > 0 ){
   	echo "Item already exist";
   	header ("Location: items.php");
   }
   else
   {
	$sql= "INSERT into itemdetails (Iid,Iweight,Itype,Icategory,Imc,Icopies,Idate) VALUES('$Iid','$Iweight','$Itype','$Icategory','$Imc','$Icopies','$Idate') ";
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval) {
      die('Could not enter data');
   }
   
   header("Location: items.php");
}
mysqli_close($conn);
}
?>