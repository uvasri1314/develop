<?php include('../config/constant.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="login">
     <style>  
        body{
            align-items: center;
           
        }
    </style> 
    <form action="" method="POST" >
        <div class="container">
          <h1>LOGIN

          </h1>
      
          <label for="username"><b>username</b><br></label>
          <input type="text" placeholder="username" name="Username" required><br>
      
          
          <label for="psw"><b>Password</b><br></label>
          <input type="password" placeholder="Password"  name="Password" required><br>
      
          <label>
            <input type="checkbox" checked="checked"  style="margin-bottom:15px"> Remember me
          </label>
      
      
          <div class="clearfix">
            <button type="submit"  name="login" class="addbtn">login</button>
          </div>
        </div>
      </form>
</body>
</html>
<?php


if (isset($_POST['login']))
{
$username = $_POST['Username'];
$password = $_POST['Password'];


$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);

if($count==1)
{
    
    echo "login success";
}
else
{
    echo "login failed";

}

}

 ?>


