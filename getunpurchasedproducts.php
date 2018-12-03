
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Unpurchased Products</title>
</head>
<body style="background-color:powderblue;">
<?php
include 'connectdb.php';
?>
<h1>Here are the unpurchased products:</h1>
<ol>
<?php
   $query = 'SELECT * FROM product WHERE product.prodID NOT IN (SELECT prodID FROM purchases)';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
