<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Choose a customer to look up:</br>";
while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="customers" value="';
     echo $row["cusID"]; 
     echo'">' . $row["firstname"]. " " . $row["lastname"]. "   - City: " . $row["city"]. "   - PhoneNumber: " . $row["phonenumber"]. "   - AgentID: " . $row["agentID"]. "<br>";
}
mysqli_free_result($result);
?>
