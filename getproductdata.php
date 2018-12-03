<?php
   $query = "SELECT * FROM product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Choose a product: </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="product" value="';
        echo $row["prodID"];
        echo '">' . $row["prodID"] . " " . $row["description"] . "<br>";
   }
   mysqli_free_result($result);
?>
