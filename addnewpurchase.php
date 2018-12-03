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
<h1>Adding new purchase:</h1>
<ol>

<?php
   $whichCus= $_POST["customers"];
   $whichProd = $_POST["product"];
   $amount =$_POST["newquantity"];
   $query1 = 'SELECT * FROM purchases where purchases.cusID = "' . $whichCus . '" AND purchases.prodID = "' . $whichProd . '"';
   $result=mysqli_query($connection,$query1);
   $row=mysqli_fetch_assoc($result);
   if (empty($row))
   {
   $query = 'INSERT INTO purchases values("' . $whichCus . '","' . $whichProd . '","' . $amount . '")';
   echo "Added Purchase \n";
   }
   else{
   $query = 'UPDATE purchases SET quantity = quantity + "' . $amount . '" WHERE purchases.cusID = "' . $whichCus . '" AND purchases.prodID = "' . $whichProd . '"';
   echo "Updated  purchase\n";
   }
   if (!mysqli_query($connection, $query)) {
        die("Error: Purchase failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
