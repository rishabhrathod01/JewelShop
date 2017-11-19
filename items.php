<?php
  $Iid;
  $Iweight;
  $Itype;
  $Icategory;
  $Icopies;
  $Idate;

if(isset($_POST["Itemid"])){
$Itemid=$_POST["Itemid"];
$conn=mysqli_connect('localhost','root','','jewelleryshop');
 if(!$conn ) {
      die('Could not connect');
   }
   $sql1=" SELECT Iid,Iweight,Itype,Icategory,Imc,Icopies,Idate FROM itemdetails WHERE Iid=$Itemid ";
   $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 < 1){
    echo "No item found ";
   }
  else{
    $Iid=$retval1['Iid'];
    $Iweight=$retval1['Iweight'];
    $Itype=$retval1['Itype'];
    $Icategory=$retval1['Icategory'];
    $Icopies=$retval1['Icopies'];
    $Idate=$retval1['Idate'];
  }
mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<div>
<font color="gold" size="10"><b align="center"><pre>   J E W E L L E R S</pre></b></font>
</div>
<div class="topnav" id="myTopnav">
 <a href="index.php">Logout</a>
  <a href="rates.php">Rates</a>
  <a href="billing.php">Billing</a>
  <a href="items.php">Items</a>
  <a href="customer.php">Customer</a>
  <a href="supplier.php">Suppliers</a>
  <a href="aboutus.php">AboutUs</a>
</div>

<form method="post" action="add_item.php">
<h2>Add</h2>
<table>
  <tr>
    <td>Item id</td>
    <td>Weight</td>
    <td>Item Type</td>
    <td>Item Category</td>
    <td>No of Items</td>
    <td>Date</td>
  </tr>
  <tr>
    <td><input type="text" name="Iid"></td>
    <td><input type="text" name="Iweight"></td>
    <td><input list="ItemType" name="Itype"><datalist id="ItemType"><option value="gold"><option value="silver"><option value="platinum"></datalist></td>
    <td><input list="ItemCategory" name="Icategory"><datalist id="ItemCategory">
        <option value="ring"><option value="pendant"><option value="chain">
        <option value="earring"><option value="payal"><option value="braclet">  </td>
    <td><input type="text" name="Icopies"></td>
    <td><input type="date" name="Idate"></td>
  </tr>
</table>
<input type="submit" value="Submit">
</form>
<br>
<hr>
<br>
<form method="post" action="items.php">
<h2>  Check Item : [ Enter Item Id ] <input type="text" name="Itemid"><input type="submit" value="submit"></h2>
</form>
<table>
  <tr>
    <td>Item id</td>
    <td>Weight</td>
    <td>Item Type</td>
    <td>Item Category</td>
    <td>No of Items</td>
    <td>Date</td>
  </tr>
  <tr>
    <td><input type="text" name="Iid" value="<?php if(isset($_POST["Itemid"])){ echo "$Iid"; } ?>" ></td>
    <td><input type="text" name="Iweight" value="<?php if(isset($_POST["Itemid"])){ echo "$Iweight"; } ?>" ></td>
    <td><input type="text" name="Itype" value="<?php if(isset($_POST["Itemid"])){ echo "$Itype"; }?>"></td>
    <td><input type="text" name="Icategory" value="<?php if(isset($_POST["Itemid"])){ echo "$Icategory"; }?>"></td>
    <td><input type="text" name="Icopies" value="<?php if(isset($_POST["Itemid"])){ echo "$Icopies"; }?>"></td>
    <td><input type="date" name="Idate" value="<?php if(isset($_POST["Itemid"])){ echo "$Idate"; }?>"></td>
  </tr>

</table>

</body>
</html>