<?php 
session_start();
  include('shoppingcartFunction.php');
  include('AutoIDFunction.php');
  include('Connect.php');
  include('Header.php');
  
if(isset($_POST['btnorders']))
  {
    $txtMenuID = $_POST['txtMenuID'];
      $orderQty=$_POST['txtorderqty'];
    AddtoCart($txtMenuID,$orderQty);

  }
  
  if (isset($_POST['btncheckout']))
  {
    $OrderID=AutoID('orders','OrderID','Or_',4);
    $OrderDate=date('Y-m-d');
    $MenuID=$_SESSION['MenuID'];
    $orderamount=calculateTotal();
    $taxamount=calculateTax();
    $netamount=netAmount();
    $Address=$_POST['txtAddress'];
    $Phonenumber=$_POST['txtPhonenumber'];
    $recipient=$_POST['txtrecepientname'];
    $PaymentType=$_POST['rdoPaymentType'];
    $Cardnumber=$_POST['txtCardnumber'];
   

     echo $insert="INSERT into orders
            values('$OrderID','$OrderDate','$MenuID','$orderamount','$taxamount','$netamount','$Address','$Phonenumber','$recipient','$PaymentType','$Cardnumber')";
    $run=mysqli_query($connection,$insert);

    // $update="UPDATE menu
    //                 set Quantity=Quantity-'$Quantity'
    //                 Where MenuID='$MenuID'";
    //        $update_run=mysqli_query($connection,$update);
           // if($update_run)
           // {
              clearShoppingcart();
              echo "<script>window.alert('Order Confirm:Ordering and Delivery Getting Started')</script>";
              echo "<script>window.location='r.php'</script>";
           // }

  //   $count=count($_SESSION['Shoppingcart']);
    
  //    for($i=0;$i<$count;$i++)
  //     {
  //        $MenuID=$_SESSION['Shoppingcart'][$i]['MenuID'];
  //        $Price=$_SESSION['Shoppingcart'][$i]['Price'];
  //        $Quantity=$_SESSION['Shoppingcart'][$i]['OrderQty'];

  //        $insert="INSERT into orderdetail values('$OrderID','$MenuID','$Price','$Quantity')";
  //        $run1=mysqli_query($connection,$insert);
        
  //        if($run1)
  //        {
           
  //        }
  // } 
}
  if (isset($_REQUEST['action'])) 
  {
    $Action=$_REQUEST['action'];
    if ($Action === "removel") 
    {
        $MenuID=$_REQUEST['MenuID'];
        Remove($MenuID);
    }
    else
    {
      clearShoppingcart();
    }
  }
  else
  {
    $Action="";
  }
  
 ?>
<html>
<head>
  <title></title>
</head>
<body>
   <form style="padding-top: 100px" action="Shoppingcart.php" method="post" enctype="multipart/form-data">
     <fieldset>
       <legend>Check Out The Information</legend>
         <table>
           <tr>
             <td>* Delivery Address</td>
             <td><textarea name="txtAddress" class="form-control"></textarea></td>
           </tr>
           <tr>
             <td> * Customer Phone</td>
             <td><input type="text" name="txtPhonenumber" class="form-control"/></td>
           </tr>
           <tr>
             <td>* Recipient Name</td>
             <td><input type="text" name="txtrecepientname" class="form-control"></td>
           </tr>
           <tr>
             <td>Payment Type</td>
             <td>
               <input type="radio" name="rdoPaymentType" value="Cash">Cash On Delivery
               <input type="radio" name="rdoPaymentType" value="KPay"><i class="fa fa-credit-card"> KPay</i>
               <input type="radio" name="rdoPaymentType" value="Visa/MPU"> <i class="fa fa-cc-visa"> VISA/MPU</i>
             </td>
           </tr>
           
           <tr>
             <td>Visa/MPU Cart Number or Kpay Phonenumber or Account.</td>
             <td><input type="text" name="txtCardnumber" class="form-control"></td>
           </tr>
           <tr>
             <td>Order Amount</td>
             <td><?php echo calculateTotal();?>MMK</td>
           </tr>
           <tr>
             <td>Tax Amount</td>
             <td><?php echo calculateTax();?>MMK</td>
           </tr>
           <tr>
             <td>Net Amount</td>
             <td><?php echo netAmount();?>MMK</td>
           </tr>
           <tr>
             <td><a href="r.php" class="btn btn-link">Back To Menu Display</a></td>
            <td><button type="submit" name="btncheckout" class="btn btn-success"> Checkout</button></td>

           </tr>
         </table>
     </fieldset>

       <fieldset>
        <legend>My Shopping List</legend>
          <table style="margin: auto;" border="1" cellpadding="5px" width="80%">
            <tr>
              <th>Menu Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Amount</th>
              <th>Action</th>
            </tr>
            <?php 
               for($i=0;$i<count($_SESSION['Shoppingcart']);$i++)
               {
                 $MenuID=$_SESSION['Shoppingcart'][$i]['MenuID'];
                  echo "<tr>";
                  echo "<td>" . $_SESSION['Shoppingcart'][$i]['MenuName'] . "</td>";
                  echo "<td>" . $_SESSION['Shoppingcart'][$i]['Price'] . "</td>";
                  echo "<td>" . $_SESSION['Shoppingcart'][$i]['OrderQty'] . "</td>";
                  echo "<td>" . $_SESSION['Shoppingcart'][$i]['Amount'] . "</td>";
                  echo"<td> 
                  <a href='orderdeail.php?action=add&MenuID=$MenuID' class='fa fa-pencil-square-o'>Add 
                  /
                  </a>
                  <a href='Shoppingcart.php?action=removel&MenuID=$MenuID' class='fa fa-trash-o'>Remove
                  </a>

                </td>";
                  echo "</tr>";
               }
             ?>
                                      

          </table>

       </fieldset>
   </form>
</body>
</html>



<?php 

include('footer.php');
  ?>
