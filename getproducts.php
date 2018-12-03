<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products listed as chosen</title>
</head>
<body style="background-color:powderblue;">
<?php
include 'connectdb.php';
?>
<h1>Products listed by chosen requirements:</h1>
<ol>
<?php
   $whattype = $_POST["listtype"];
   if ($whattype == 1)
   {
   $query = 'SELECT * FROM product ORDER BY description ASC';
   }
   elseif ($whattype == 2)
   { 
   $query = 'SELECT * FROM product ORDER BY description DESC';
   }
   elseif ($whattype == 3)
   {
   $query = 'SELECT * FROM product ORDER BY cost ASC';
   }
   elseif ($whattype == 4)
   {
   $query = 'SELECT * FROM product ORDER BY cost DESC';
   }

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
