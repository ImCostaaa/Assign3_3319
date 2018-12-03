

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Deletion page</title>
</head>
<body style="background-color:powderblue;">
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $whichCus= $_POST["customers"];
   $fname = $_POST["firstname"];
   $lname =$_POST["lastname"];
   $city =$_POST["city"];
   $phonenumber = $_POST["phonenumber"];
   $agentid = $_POST["agentID"];
   $query = 'DELETE FROM purchases WHERE purchases.cusID = "' . $whichCus . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: Delete failed" . mysqli_error($connection));
    }
   $query = 'DELETE FROM customer WHERE customer.cusID = "' . $whichCus . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: Delete failed" . mysqli_error($connection));
    }
   echo "Customer deleted successfully";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
