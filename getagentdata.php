<?php
$query = "SELECT * FROM agent ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Choose a agent to represent the new customer :</br>";
while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="agent" value="';
     echo $row["agentID"]; 
     echo'">' . $row["firstname"]. " " . $row["lastname"]. "   - City: " . $row["city"]. "<br>";

}
mysqli_free_result($result);
?>
