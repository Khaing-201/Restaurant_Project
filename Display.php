<?php 
	session_start();
	include('Connect.php');

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
	<title>Food Menu</title>
</head>
<body>
	<form method="post" action="">	
<div>
	<tr>
		<td type="btnSearch" name="selectmenutype" value="2">Category:</td>
	<select name="selectmenutype"> 
	<option value="select">---Search Menu Type---</option>	
	<?php
		$menutype_Query="SELECT * FROM menutype";
		$menutype_ret=mysqli_query($connection,$menutype_Query);
		$menutype_count=mysqli_num_rows($menutype_ret);
		for ($i=0; $i <$menutype_count; $i++) 
		{ 
			$menutype_arr=mysqli_fetch_array($menutype_ret);
			$MenuTypeName=$menutype_arr['MenuTypeName'];
			echo "<option value='$MenuTypeName'>$MenuTypeName</option>";
		}

		?>
	</select>
	<td><input type="submit" name="btnSearch" value="Search" class="btn btn-primary">
		<input type="submit" name="btnShowAll" value="Show All" class="btn btn-info" />
	</td>
	</tr>
</div>

<div>
	<table>
		<tr>
			<td><img src="admin/MenuImage"></td>
		</tr>
	
	<?php 
		for ($i=0; $i < $count; $i++) 
		{ 
			$arr = mysqli_fetch_array($result);
			$MenuImage = $arr['MenuImage'];
			$name = $arr['MenuName'];
			$price = $arr['Price'];
			$quantity = $arr['Quantity'];

			echo "<tr>";
				echo "<td> <img src='../admin/$MenuImage' height='253px' style='width:469px'> </td>";
				echo "<td> $name </td>";
				echo "<td> $price </td>";
				echo "<td> $quantity </td>";


				echo "<a href='orderdeail.php?MenuID=$MID'>OrderDetail</a>";
			echo "</tr>";
		}
	?>
	</table>
	</form>
</div>
</body>
</html>