<?php 
include('Connect.php');
include('header.php');
session_start();

if (isset($_POST['btnregister']))
{
    $MenuID=$_POST['txtMenuID'];
    $Comment=$_POST['txtComment'];

    
   

        $insert="Insert into Comment(Comment,MenuID)
                 values('$Comment','$MenuID')";

        $ret=mysqli_query($connection,$insert);

        if ($ret) 
        {
          
            echo "<script> alert('Comment has been made successfully') </script>";
            echo "<script>window.location='r.php'</script>";

        }
        else
        {
            echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
        }
    
    
    
}

 ?>

<html>
<head>
    <title>Comment</title>
</head>
<body>


<form action="c.php" method="POST" enctype="multipart/form-data" >
    <table align="center" height="600px">
       
       <tr>
            <td><input type="hidden" name="txtMenuID" value="<?php echo $_GET['MenuID'] ?>"/></td>
            </tr>

         <tr>
             <td></td>
         </tr>   
                
        <tr>

            <td>Comment</td>
            <td><textarea type="text" class="form-control" name="txtComment" placeholder="Enter Comment" required></textarea></td>
        </tr>   
        
        
        <tr>
            <td></td>
            <td>
                <input type="submit" class="btn btn-info submit_btn" name="btnregister" value="Comment">
                
            </td>
        </tr>

    </table>

</form>
</body>
</html>

<?php
include('footer.php');

?>