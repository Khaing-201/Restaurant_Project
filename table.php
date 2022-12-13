<?php  
	
	include('Connect.php');
	include('Header.php');
if(isset($_POST['btnregister'])) 
{
	$TableID=$_POST['txtTableID'];
	$cboTableName=$_POST['cboTableName'];
	$cboTableType=$_POST['cboTableType'];
	$txtPeople=$_POST['txtPeople'];
	$txtChair=$_POST['txtChair'];
	
	
	
	$CheckTableName="SELECT * FROM table1 WHERE TableName='$cboTableName'";
	$ret=mysqli_query($connection,$CheckTableName);
	$count=mysqli_num_rows($ret);

	if($count > 0) 
	{
		echo "<script>window.alert('Table Name already exist.')</script>";
		echo "<script>window.location='table.php'</script>";
		exit();
	}

	 $query="INSERT INTO table1
			(TableName,TableTypeID,People,Chair) 
			VALUES
			('$cboTableName','$cboTableType','$txtPeople','$txtChair')";
	$ret=mysqli_query($connection,$query);

	if($ret) //True
	{
		echo "<script>window.alert('Table Registration Completed.')</script>";
		echo "<script>window.location='r.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Table Registration" . mysqli_error($connection) . "</p>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form style="padding: 100px" action="" method="post" enctype="multipart/form-data">
<h1 class="text-center">Table Registration Form:</h1>
<table align="center">

			<tr>
			<td><input type="hidden" name="txtTableID" value="<?php echo $arr['TableID'] ?>"/></td>
			</tr>

			<tr>
				<td>Table Name:   	
			<select name="cboTableName" class="form-control">
				<option>Choose TableName</option>
				<?php 
				$query="SELECT * FROM tables";
				$ret=mysqli_query($connection,$query);
				$count=mysqli_num_rows($ret);

				for ($i=0; $i <$count ; $i++) 
				{ 
					$row=mysqli_fetch_array($ret);
					$TableID=$row['TableID'];
					$TableName=$row['TableName'];

					echo "<option value='$TableID'>$TableID - $TableName </option>";
				}

				 ?>
			</select></td>
			</tr>
			<br>

			<tr>
				<td>Choose TableType ID:
			<select name="cboTableType" class="form-control">
				<option>Choose TableType ID</option>
				<?php 
				$query="SELECT * FROM tabletype";
				$ret=mysqli_query($connection,$query);
				$count=mysqli_num_rows($ret);

				for ($i=0; $i <$count ; $i++) 
				{ 
					$row=mysqli_fetch_array($ret);
					$TableTypeID=$row['TableTypeID'];
					$TableTypeName=$row['TableTypeName'];

					echo "<option value='$TableTypeID'>$TableTypeID - $TableTypeName </option>";
				}

				 ?>
			</select></td>
			</tr>
			<br>
			
			<tr>
				<td>Person:	
			<input type="text" name="txtPeople" required/ class="form-control"></td>
			</tr>
			<br>

			<tr>
				<td>Chair:	
			<input type="text" name="txtChair" required/ class="form-control"></td>
			</tr>
			<br>

			<tr>		
			<td align="right" colspan="2">
				<input type="submit" name="btnregister" value="register" class="btn btn-primary">
				
				<input type="reset" name="btncanel" value="cancel" class="btn btn-danger">
			</td>
			</tr>
</table>

<hr/>

</form>
</body>
</html>


<?php  
include('Footer.php');

?>