<?php  
session_start();
include('Connect.php');
include('header.php');
if(isset($_POST['btnUpdate'])) 
{
	
	$txtCustomername=$_POST['txtCustomername'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];
	$txtPhonenumber=$_POST['txtPhonenumber'];
	$txtAddress=$_POST['txtAddress'];

	$update="UPDATE customer
			 SET 
			 
			 Customername='$txtCustomername',
			 Email='$txtEmail',
			 Password='$txtPassword',
			 Phonenumber='$txtPhonenumber',
			 Address='$txtAddress'
			 WHERE
			 Email='$txtEmail'";
			 
	$ret=mysqli_query($connection,$update);

	if($ret)  //True
	{
		echo "<script>window.alert('Customer Account Successfully Updated!')</script>";
		echo "<script>window.location='CustomerProfile.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Customer Update : " . mysqli_error($connection) . "</p>";
	}
}

if(isset($_GET['Customerid']))
{
	$Customerid=$_GET['Customerid'];

	$query="SELECT * FROM customer WHERE Customerid='$Customerid' ";
	$ret=mysqli_query($connection,$query);
	$count=mysqli_num_rows($ret);
	$rows=mysqli_fetch_array($ret);

	if ($count < 1) 
	{
		echo "<script>window.alert('Invalid Customer Profile.')</script>";
		echo "<script>window.location='CustomerUpdate.php'</script>";
	}
}
else
{
	$Customerid="";
	echo "<script>window.location='CustomerProfile.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Update</title>
</head>
<body>
<form action="CustomerUpdate.php" method="post" style="padding-top: 100px" enctype="multipart/form-data">
<fieldset>
<legend class="text-center">Enter Customer Updated Information :</legend>
<table style="margin: auto;" cellpadding="5px">
<tr>
	<td>
		CustomerName:<br/>
		<input type="text" name="txtCustomername" value="<?php echo $rows['Customername'] ?>" required class="form-control" />
	</td>
</tr>

<tr>
	<td>
		Phone Number:<br/>
		<input type="text" name="txtPhonenumber" value="<?php echo $rows['Phonenumber'] ?>" required class="form-control"/>
	</td>
</tr>
<tr>
	<td>
		Email:<br/>
		<input type="email" name="txtEmail" value="<?php echo $rows['Email'] ?>" required class="form-control"/>
	</td>
</tr>
<tr>
	<td>
		Password:<br/>
		<input type="password" name="txtPassword" value="<?php echo $rows['Password'] ?>" required class="form-control"/>
	</td>
</tr>
<tr>
	<td colspan="2">
		Address:<br/>
		<textarea name="txtAddress" cols="35" class="form-control"><?php echo $rows['Address'] ?></textarea>
	</td>
</tr>
<tr>
	<td> <br/>
		<input type="hidden" name="txtCustomerid" value="<?php echo $rows['Customerid'] ?>" />
		<input type="submit" name="btnUpdate" value="Update" class="btn btn-primary active"/>
		<input type="reset" value="Clear" class="btn btn-danger active"/>
	</td>
</tr>
</table>

<hr/>
</fieldset>

</form>
</body>
</html>

<?php
include('footer.php');
?> 