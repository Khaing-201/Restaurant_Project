<?php 
	session_start();
	include('Connect.php');
	include('header.php');
if(isset($_POST['btnSearch'])) 
{
	$btnsearch=$_POST['btnSearch'];

	
		$menutype=$_POST['selectmenutype'];

		 echo $query="SELECT m.*,mt.*
				FROM  menu m, menutype mt
				WHERE mt.MenuTypeName='$menutype'
				AND m.MenuTypeID=mt.MenuTypeID
				";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
	
}

elseif(isset($_POST['btnShowAll']))
	{
	echo $query="SELECT m.*,mt.* FROM menu m,menutype mt 
			WHERE m.MenuTypeID=mt.MenuTypeID
				";

	$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
	}

else
	{	
		echo $query="SELECT m.*,mt.* FROM menu m, menutype mt 
				WHERE m.MenuTypeID=mt.MenuTypeID";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);

	}



 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Display</title>
	<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css"/>
</head>
<body>
<form action="r.php" method="post" style="padding-top: 100px" enctype="multipart/form-data">
<table align="center" class="table table-striped table-hover">
<tr>
	
	<td type="btnSearch" name="selectSearchType" value="1" >Category
	
	<select name="selectmenutype" class="form-control">
		<option>Choose MenuType Name :</option>
		<?php
		$menutype_Query="SELECT * FROM menutype";
		$menutype_ret=mysqli_query($connection,$menutype_Query);
		$menutype_count=mysqli_num_rows($menutype_ret);
		for ($i=0; $i <$menutype_count; $i++) 
		{ 
			$menutype_arr=mysqli_fetch_array($menutype_ret);
			$MenuTypeName=$menutype_arr['MenuTypeName'];
			// $MenuImage=$menutype_arr['MenuImage'];
			echo "<option value='$MenuTypeName'>$MenuTypeName</option>";
			// echo "<img src='$MenuImage'>";
		}
		?>
	</select>
	
<td><input type="submit" name="btnSearch" value="Search" class="btn btn-primary">
	<input type="submit" name="btnShowAll" value="Show All" class="btn btn-info" />
	<input type="reset" value="Clear" class="btn btn-danger" />
	<a href="index.php" class="btn btn-info active">Back</a>
	</td>
</tr>
</table>



	<?php

	for ($i=0; $i < $count; $i++) 
	{ 	
		$row=mysqli_fetch_array($result);

		$MID=$row['MenuID'];
		$MenuName=$row['MenuName'];
		$MenuImage=$row['MenuImage'];
		$Price=$row['Price'];
		$MenuTypeName=$row['MenuTypeName'];
		$MenuTypeID=$row['MenuTypeID'];
		$Quantity=$row['Quantity'];
echo "<div>";
				echo " <img src='../admin/$MenuImage' height='253px' style='width:469px' alt='img'>";
				echo   " ." ; 
				
				echo "<b> $MenuName </b>";
				echo   " /" ; 
				echo   " " ; 
				echo " $Price ";
				 
			echo "</div><br>";
			echo "<div class='mu-send-btn'>";
			echo "<a href='orderdeail.php?MenuID=$MID'>OrderDetail</a>"; 
			echo "</div>";
			echo   " " ; 

			echo "<div class='mu-send-btn'>";
			echo "<a href='c.php?MenuID=$MID'>Comment</a>";	
			echo "</div>";
			echo "<hr>";




 	
 		
	}
	?>
	

</form>

<?php 
include('footer.php');
 ?>
