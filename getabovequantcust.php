<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body style="background-color:powderblue;">
<?php
include 'connectdb.php';
?>
<h1>Here are your customers who bought above the quantity entered:</h1>
<ol>
<?php
   $quantover = $_POST["quantityover"];
   $query = 'SELECT * FROM customer,product,purchases WHERE product.prodID = purchases.prodID AND customer.cusID= purchases.cusID AND purchases.Quantity>"' . $quantover . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
	echo $row["firstname"];
        echo " ";
	echo $row["lastname"];
        echo " ";
        echo $row["description"];
	echo " ";
	echo $row["Quantity"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
