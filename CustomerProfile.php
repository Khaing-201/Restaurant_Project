<?php 
session_start();
include('Connect.php');
include('header.php');

if(isset($_SESSION['Customerid']))
{
	$Customerid=$_SESSION['Customerid'];
	$select=mysqli_query($connection,"SELECT * FROM customer WHERE Customerid='$Customerid'");
	$row=mysqli_fetch_array($select);
}
 ?>
<form style="padding-top: 100px">
 <table style="margin: auto;" border="1" width=100% align="center" height="200px">
 	<tr>
 		<td>CustomerName</td>
 		<td><?php echo $row['Customername'] ?></td>
 	</tr>
 	<tr>
 		<td>Email</td>
 		<td><?php echo $row['Email'] ?></td>
 	</tr>
 	<tr>
 		<td>Password</td>
 		<td><?php echo $row['Password'] ?></td>
 	</tr>
 	<tr>
 		<td>PhoneNumber</td>
 		<td><?php echo $row['Phonenumber'] ?></td>
 	</tr>
 	
 	<tr>
 		<td>Address</td>
 		<td><?php echo $row['Address'] ?></td>
 	</tr>
 	
 </table>
 <hr>
 <?php
 echo "<a href='CustomerUpdate.php?Customerid=$Customerid' class='btn btn-success active'>Update Profile</a>";
 ?>


<a href="index.php" class="btn btn-info active">Back</a>
</form>
				
				</div>
			</div>
		</div>
	

 </body>
 </html>
<hr>
 <?php
 include('footer.php'); 

 ?>

 