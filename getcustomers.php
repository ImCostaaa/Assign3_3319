<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western Sports Store Customers</title>
</head>
<body style="background-color:powderblue;">
<?php
include 'connectdb.php';
?>
<h1>Here is the selected customers purchases:</h1>
<ol>
<?php
   $whichCustomer= $_POST["customers"];
   $query = 'SELECT description,quantity FROM purchases,customer,product WHERE purchases.cusID=customer.cusID AND purchases.prodID=product.prodID AND purchases.cusID="' . $whichCustomer . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
	echo "Product: ";
        echo $row["description"];
	echo "   Quantity: ";
	echo $row["quantity"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
