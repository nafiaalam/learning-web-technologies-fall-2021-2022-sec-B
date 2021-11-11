<?php

include "db.php"; // Using database connection file here

$id = isset($_GET['id']) ? $_GET['id'] : ''; // get id through query string

$qry = mysqli_query($conn,"select * from products where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['edit'])) // when click on Update button
{
    $Name = $_POST['Name'];
    $buyingPrice = $_POST['buyingPrice'];
     $sellingPrice = $_POST['sellingPrice'];
	
    $edit = mysqli_query($conn,"update products set Name='$Name', buyingPrice='$buyingPrice', sellingPrice='$sellingPrice' where id='$id'");
	
        	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="Name" value="<?php echo $data['Name'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="buyingPrice" value="<?php echo $data['buyingPrice'] ?>" placeholder="Enter Buying Price" Required>
  <input type="text" name="sellingPrice" value="<?php echo $data['sellingPrice'] ?>" placeholder="Enter Selling Price" Required>
  <input type="submit" name="update" value="Update">
</form>