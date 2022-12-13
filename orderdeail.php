<?php 	
session_start();
include('Connect.php');
include('shoppingcartfunction.php');
include('header.php');

	if(isset($_REQUEST['MenuID']))
	{
			$MID=$_REQUEST['MenuID'];
			$_SESSION['MenuID']=$MID;	
			$select=mysqli_query($connection,"SELECT m.*,mt.* FROM menu m, menutype mt 
			WHERE m.MenuTypeID=mt.MenuTypeID 
			AND MenuID=$MID");
			$row=mysqli_fetch_array($select);
			$MenuName=$row['MenuName'];
			$MenuImage=$row['MenuImage'];
			$Price=$row['Price'];
			$MenuTypeName=$row['MenuTypeName'];
			$MenuTypeID=$row['MenuTypeID'];
			$Quantity=$row['Quantity'];

	if(isset($_POST['btnorders']))
	{
		$txtMenuID = $_POST['txtMenuID'];
    	$orderQty=$_POST['txtorderqty'];
		AddtoCart($txtMenuID,$orderQty);

	}
}
?>                           
<html>
<head>
	<title>	</title>
</head>
<body>
		<form style="padding-top: 100px" action="Shoppingcart.php" method="POST" enctype="multipart/form-data">
    			<input type="hidden" name="txtMenuID" value="<?php echo $row['MenuID'] ?>" readonly>
				<input type="hidden" name="txtPrice" value="<?php 	echo $Price ?>">	
				<input type="hidden" name="txtMID" value="<?php 	echo $MID ?>">	
				<table>	
						<tr>	
								<td>
									<img src="<?php echo $MenuImage ?>" width="400px" height="400px">	
							
								</td>

								<td>	
										<table width="440px" height="300px">	
												<tr>	
														<td> Menu Name	</td>
														<td>	:<?php 	echo $MenuName ?></td>	
												</tr>	
												<tr>	
														<td> Price	</td>
														<td>	:<?php 	echo $Price ?></td>
												</tr>
												
												<tr>	
														<td>	MenuTypeName</td>
														<td>	:<?php 	echo $MenuTypeName ?></td>	
												</tr>
												<tr>	
														<td>	Quantity </td>
														<td>	<?php 	echo $Quantity ?></td>	
												</tr>
												



										</table>

								</td>
						</tr>	
				</table>	
				<table align="center" width="400px" height="100px" >
						<tr>
							<td>Order Quantity :</td>
   							<td><input type="number" class="form-control" name="txtorderqty"></td>
						</tr>        
						<tr>	
								<td>	Order Date</td>
								<td>	: <?php 	echo date('d-M-Y') ?></td>
						</tr>	
						<tr>
								<td> MenuName</td>
								<td>:<?php echo $MenuName ?></td>
						</tr>	
						
						
							 		
	<tr>
		<td>						 			
	<input type="submit" value="Order Confirm" name="btnorders" class="btn btn-primary">	
	<a href="r.php" class="btn btn-info active">Back</a>
		</td>					 			
	</tr>						 		
				</table>
		</form>
</body>
</html>

<hr>
<?php 

include('footer.php');
  ?>