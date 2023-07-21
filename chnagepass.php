<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manageadmin.php">Admin</a></li>
                    <li><a href="managecategory.php">Category</a></li>
                    <li><a href="managefood.php">Food</a></li>
                    <li><a href="manageorder.php">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
       
<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        
        <form action="" method="POST">
        
            <table class="tbl-30">
                <tbody><tr>
                    <td>Current Password: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current Password">
                    </td>
                </tr>

                <tr>
                    <td>New Password:</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="3">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>

            </tbody></table>

        </form>

    </div>
</div>
</body>
</html>