<?php  
session_start();
include('Connect.php');
include('h.php');
if(isset($_POST['btnSave'])) 
{
	$txtCustomerName=$_POST['txtCustomerName'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];
	$txtPhonenumber=$_POST['txtPhonenumber'];
	$txtAddress=$_POST['txtAddress'];

	
	$checkEmail="SELECT * FROM customer WHERE Email='$txtEmail' ";
	$ret=mysqli_query($connection,$checkEmail);
	$count=mysqli_num_rows($ret);

	if($count > 0) 
	{
		echo "<script>window.alert('Email address already exist.')</script>";
		echo "<script>window.location='CustomerRegister.php'</script>";
		exit();
	}
	//---------------------------------------------------

	$insert="INSERT INTO customer
			(CustomerName,Email,Password,Phonenumber,Address) 
			VALUES
			('$txtCustomerName','$txtEmail','$txtPassword','$txtPhonenumber','$txtAddress')
			";
	$ret=mysqli_query($connection,$insert);

	if($ret)  //True
	{
		echo "<script>window.alert('Customer Account Successfully Created!')</script>";
		echo "<script>window.location='Login.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Customer Entry : " . mysqli_error($connection) . "</p>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
</head>
<body>
<form style="padding-top: 100px" action="CustomerRegister.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend align="center">Enter Customer Information :</legend>
<table align="center" cellpadding="5px">
<tr>
	<td>
		CustomerName:<br/>
		<input type="text" name="txtCustomerName" required class="form-control"/>
	</td>
	
</tr>

<tr>
	<td>
		Email: (*Please Correctly the Email Address*)<br/>
		<input type="email" name="txtEmail"  required class="form-control"/>
	</td>
</tr>
<tr>
	<td>
		Password:<br/>
		<input type="password" name="txtPassword"  required class="form-control"/>
	</td>
</tr>
<tr>
	<td>
		Phone Number:<br/>
		<input type="text" name="txtPhonenumber" required class="form-control"/>
	</td>
</tr>

<tr>
	<td colspan="2">
		Address:<br/>
		<textarea name="txtAddress" cols="35" class="form-control"></textarea>
	</td>
</tr>
<tr>
	<td >
		<input type="submit" class="btn btn-primary" name="btnSave" value="Save"/>
		<input type="reset" class="btn btn-danger" value="Clear"/>
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