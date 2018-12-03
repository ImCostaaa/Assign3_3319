

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Adding customer</title>
</head>
<body style="background-color:powderblue;">
<?php
   include 'connectdb.php';
?>
<h1>Was the add successful:</h1>
<ol>
<?php
   $fname= $_POST["fname"];
   $lname = $_POST["lname"];
   $city =$_POST["city"];
   $phonenumber=$_POST["pnumber"];
   $agentid=$_POST["agent"];
   $query1= 'select max(cusID) as maxid from customer';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $cusid = (string)$newkey;
   $query = 'INSERT INTO customer values("' . $cusid . '","' . $fname . '","' . $lname. '","' . $city . '","' . $phonenumber . '","' . $agentid . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your customer was added!";
   mysqli_close($connection);
?>
</ol>
</body>
