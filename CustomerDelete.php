<?php  
include('Connect.php');

$Customerid=$_GET['Customerid'];

$query="DELETE FROM Customer WHERE Customerid='$Customerid'";
$ret=mysqli_query($connection,$query);

if($ret) 
{
	echo "<script>window.alert('Customer Successfully Deleted.')</script>";
	echo "<script>window.location='CustomerProfile.php'</script>";
}
else
{
	echo "<p>Something went wrong in Customer Delete" . mysqli_error($connection) . "</p>";
}
?>