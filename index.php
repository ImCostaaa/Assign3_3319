<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- title of my website -->
<title>Western's Sports Store Database</title>
</head>
<!-- make the background powderblue by choice and do this for every other webpage opened -->

<body style="background-color:powderblue;">
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Sports Store</h1>
<!-- This is the first part where i use getcustomerdata to print out radio buttons for each customer-->
<!-- when a customer is chosen it will invoke getcustomers.php which returns the purchases of that customer -->
<!-- NOTE ALL getcustomerdata work the same in showing radio buttons i just seperated the code to be safe since im unsure if you can resuse it -->
<h2>Customers in alphabetical order:</h2>
<h2>Our Customers</h2>
<form action="getcustomers.php" method="post">
<?php
   include 'getcustomerdata.php';
?>
<!-- this submit button triggers getcustomers.php and pulls that page up -->
<input type="submit" value="Get Customer Information">
</form>
<!-- NExt part which based on the button chosen will list products as described uses getproducts.php to check the value and does the listing according -->
<h2> Choose button on how to list products: </h2>
<form action="getproducts.php" method="post">
<input type="radio" name="listtype" value="1"> Ascending by Desc<br>
<input type="radio" name="listtype" value="2"> Descending by Desc<br>
<input type="radio" name="listtype" value="3"> Ascending by Price<br>
<input type="radio" name="listtype" value="4"> Descending by Price<br>
<input type="submit" value="Get Products as Listed">
</form>
<!-- This part lists all products which have not been purchased by a customer-->
<!-- uses getunpurchasedproducts.php to list the unpurchased products through a query which returns them -->
<h2> List Description of any unpurchased product: </h2>
<form action="getunpurchasedproducts.php" method="post">
<input type="submit" value="Get Unpurchased Products">
</form>
<!-- getproductdata.php just lists radio buttons of each products -->
<!-- getproductinfo.php returns the info neccessary and creates a new page and displays it appropriately to the screen
<h2> Pick product to get total purchases,description, and total money made in sales: </h2>
<form action="getproductinfo.php" method="post">
<?php
   include 'getproductdata.php';
?>
<input type="submit" value="Get Product Information">
</form>
<!-- addnewnumber.php adds a new number for the chosen customer, getcustomerdata2.php as stated earlier does the same as getcustomerdata.php and lists the radio buttons -->

<h2> Update Chosen Customers Phone Number: </h2>
<form action="addnewnumber.php" method="post">
<!-- input the new number and save it as newnumber to be accessed in addnewnumber.php -->
New Phone Number: <input type="text" name="newnumber"><br>
<?php
	include 'getcustomerdata2.php';
?>
<input type="submit" value="Update New Number">
</form>
<!-- getcustomerdata3.php same as explained before and deletecustomer.php will remove the chosen customer from the database and any purchases they have made -->
<h2>Choose a customer to delete:</h2>
<form action="deletecustomer.php" method="post">
<?php
   include 'getcustomerdata3.php';
?>
<input type="submit" value="Delete Customer">
</form>
<!-- getabovequantcust.php gets every customer that has bought an item witha  quantity above the quantity entered -->
<h2> Pick product to get customers who have bought above the entered quantity of this item</h2>

<form action="getabovequantcust.php" method="post">
<!-- quantity to be higher than is the one entered here -->

Quantity: <input type="text" name="quantityover"><br>

<input type="submit" value="Get Customer Info on that product purchase">
</form>
<!-- getcustomerdata and getproductdata do as their earlier versions describe -->
<!-- addnewpurchase.php checks whether or not that product has been purchased already by that customer if yes change quantity if no create new purchase -->

<h2> Enter quantity and choose product and customer to make purchase for: </h2>
<form action="addnewpurchase.php" method="post">
Quantity purchased: <input type="text" name="newquantity"><br>

<?php
        include 'getcustomerdata4.php';
?>
<?php
        include 'getproductdata2.php';
?>

<input type="submit" value="Make Purchase">
</form>
<!-- this will add a new customer by getting the highest id adding 1 in addnewcustomer.php and then adding that customer to the customer table -->

<h2> Add new Customer(ID WILL BE GENERATED FOR YOU) </h2>
<form action="addnewcustomer.php" method="post">
<!-- inputs all neccessary for adding a new customer, references the name of each in addnewcustomer.php to access the inputs-->

Firstname: <input type="text" name="fname"><br>
Lastname: <input type="text" name="lname"><br>
City: <input type="text" name="city"><br>
Phone number: <input type="text" name="pnumber"><br>

<?php
        include 'getagentdata.php';
?>
<input type="submit" value="Add Customer">
</form>
<!-- end of my website -->
<!-- the tasks are not in order but all are there and working perfectly through thorough tests. -->
<?php
mysqli_close($connection);
?> 
</body>
</html>
