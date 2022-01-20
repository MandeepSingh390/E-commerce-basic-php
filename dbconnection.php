<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "flone";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	
	//echo "Connected successfully";

	//query for products in shop.php page

   	$proQ = mysqli_query($conn,"select * from products");
   	$data   = $proQ->fetch_all(MYSQLI_ASSOC);
   	//print_r($data);
   	//$row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
	//print_r($row);


   	//Cart Query
   	//$proQ = mysqli_query($conn,"select * from shopping_cart where user_id = 1");
   	//$cart_Data = $proQ->fetch_array(MYSQLI_ASSOC);
   	//var_dump($cart_Data);
?>