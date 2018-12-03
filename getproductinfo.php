<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is your product information:</h1>
<ol>
<?php
   $whichID= $_POST["product"];
   $query = 'SELECT SUM(quantity) AS sum,description,cost*SUM(quantity) AS money FROM product,purchases WHERE product.prodID=purchases.prodID AND purchases.prodID="' . $whichID .'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
	echo "Total Bought:  ";
        echo $row["sum"];
	echo "<br>   Decription: ";
	echo $row["description"];
	echo "<br>   Cost: ";
	echo $row["money"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
