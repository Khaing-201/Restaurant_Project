<?php
function AddtoCart($MenuID,$qty)
{ 
  include('Connect.php');
  $sql="SELECT * FROM menu WHERE MenuID='$MenuID'";
  $ret=mysqli_query($connection,$sql);
  $data=mysqli_fetch_array($ret);
  $MenuName=$data['MenuName'];
  $Price=$data['Price'];

  if(!isset($_SESSION['Shoppingcart']))
  {

    $_SESSION['Shoppingcart']=array();

    $_SESSION['Shoppingcart'][0]['MenuID']=$MenuID;
    $_SESSION['Shoppingcart'][0]['MenuName']=$MenuName;
    $_SESSION['Shoppingcart'][0]['OrderQty']=$qty;
    $_SESSION['Shoppingcart'][0]['Price']=$Price;
    $_SESSION['Shoppingcart'][0]['Amount']=$Price*$qty;

  }
  else
  {

    $count=count($_SESSION['Shoppingcart']);
    if($count==0)
    {
      $_SESSION['Shoppingcart'][0]['MenuID']=$MenuID;
      $_SESSION['Shoppingcart'][0]['MenuName']=$MenuName;
      $_SESSION['Shoppingcart'][0]['OrderQty']=$qty;
      $_SESSION['Shoppingcart'][0]['Price']=$Price;
      $_SESSION['Shoppingcart'][0]['Amount']=$Price*$qty;
    }
    else
    {
      $check=RIndexOf($MenuID);
      if($check==-1)
      {
        $lastindex=count($_SESSION['Shoppingcart']);

        $_SESSION['Shoppingcart'][$lastindex]['MenuID']=$MenuID;
        $_SESSION['Shoppingcart'][$lastindex]['MenuName']=$MenuName;
        $_SESSION['Shoppingcart'][$lastindex]['OrderQty']=$qty;
        $_SESSION['Shoppingcart'][$lastindex]['Price']=$Price;
        $_SESSION['Shoppingcart'][$lastindex]['Amount']=$Price*$qty;
      }
      else
      {
        $_SESSION['Shoppingcart'][$check]['OrderQty']+=$qty;
        $_SESSION['Shoppingcart'][$check]['Amount']+=$qty*$Price;
      }
    }
  }
  echo "<script>
    alert('Product Added');
    location.assign('Shoppingcart.php');
  </script>";
}
  function RIndexOf($MenuID)
      {
        for($i=0;$i<count($_SESSION['Shoppingcart']);$i++)
        {
          if($MenuID==$_SESSION['Shoppingcart'][$i]['MenuID'])
          {
            return $i;
          }
        }
        return -1;
      }

  function clearShoppingcart()
    {
      unset($_SESSION['Shoppingcart']);
    }
function netamount()
  { 
      $sum=calculateTotal()+calculateTax();
      return $sum;

  }
  function calculateTotal()
    {
      $sum=0;
      for($i=0;$i<count($_SESSION['Shoppingcart']);$i++)
      {
        $sum+=$_SESSION['Shoppingcart'][$i]['Amount'];
      }
      return $sum;
    }
  function calculateTax()
    {
      $total=calculateTotal();
      $tax=$total*0.05;
      return $tax;
    }
  function Remove($MenuID)
    {
      $index=RIndexOf($MenuID);
      if ($index != -1) 
      {
        unset($_SESSION['Shoppingcart'][$index]);
        $_SESSION['Shoppingcart']=array_values($_SESSION['Shoppingcart']);
      }
      echo "<script>window.location='Shoppingcart.php'</script>";
    }
  function Clear()
    {
      unset($_SESSION['Shoppingcart']);
      echo "<script>window.location='Shoppingcart.php'</script>";
    }  
?>