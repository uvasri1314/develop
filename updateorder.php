<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manageadmin.php">Admin</a></li>
                    <li><a href="managecategory.php">Category</a></li>
                    <li><a href="managefood.php">Food</a></li>
                    <li><a href="manageorder.php">Order</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->
<div class="main-content">
    <div class="wrapper">
        <h1>Update Order</h1>
        <br><br>


        
        <form action="" method="POST">
        
            <table class="tbl-30">
                <tbody><tr>
                    <td>Food Name</td>
                    <td><b> </b></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td>
                        <b> </b>
                    </td>
                </tr>

                <tr>
                    <td>Qty</td>
                    <td>
                        <input type="number" name="qty" value="1">
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option selected="" value="Ordered">Ordered</option>
                            <option value="On Delivery">On Delivery</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Customer Name: </td>
                    <td>
                        <input type="text" name="customer_name" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Contact: </td>
                    <td>
                        <input type="text" name="customer_contact" value="">
                    </td>
                </tr>

                
                <tr>
                    <td>Customer Email: </td>
                    <td>
                        <input type="text" name="customer_email" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Address: </td>
                    <td>
                        <textarea name="customer_address" cols="30" rows="5">fasdfas</textarea>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="21">
                        <input type="hidden" name="price" value="180">

                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>
            </tbody></table>
        
        </form>


        

    </div>
</div>  

</body>
</html>