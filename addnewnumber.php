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
<h1>Check below if successful update:</h1>
<ol>
<?php
   $whichOwner= $_POST["customers"];
   $fName = $_POST["firstname"];
   $lName = $_POST["lastname"];
   $city =$_POST["city"];
   $phonenumber=$_POST["newnumber"];
   $agentid=$_POST["agentID"];
   $query = 'UPDATE customer SET phonenumber = "' . $phonenumber . '" WHERE "' . $whichOwner . '"=cusID';
  if (!mysqli_query($connection, $query)) {
        die("Error: Update failed" . mysqli_error($connection));
    }
   echo "Update Successful.";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
