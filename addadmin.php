<?php include('../config/constant.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="signin">
     <style>
        body{
            align-items: center;
           
        }
    </style> 
    <form action="" method="POST" >
        <div class="container">
          <h1>Add Admin

          </h1>
      
          <label for="username"><b>username</b><br></label>
          <input type="text" placeholder="username" name="Username" required><br>
      
          <label for="fullname"><b>fullname</b><br></label>
          <input type="fullname" placeholder="fullname"  name="Fullname" required><br>
      
          <label for="psw"><b>Password</b><br></label>
          <input type="password" placeholder="Password"  name="Password" required><br>
      
          <label>
            <input type="checkbox" checked="checked"  style="margin-bottom:15px"> Remember me
          </label>
      
      
          <div class="clearfix">
            <button type="submit"  name="add" class="addbtn">Add</button>
          </div>
        </div>
      </form>
</body>
</html>
<?php

//echo "connect";
if(isset($_POST['add'])) 
{
  echo "connect";
    $username=$_POST['Username'];
    $fullname=$_POST['Fullname'];
    $password=$_POST['Password'];
    


    $sql = "INSERT INTO admin SET 
    Fullname='$fullname',
    Username='$username',
    Password='$password'
";


$res = mysqli_query($conn, $sql) or die($mysqli_error());

if($res==TRUE)
{

    echo "inserting";
     //header("location:".SITEURL.'admin/signup.php');

}
else
{
    echo "error inserting";
   // header("location:".SITEURL.'admin/addadmin.php');

   
    
}
}
?>





