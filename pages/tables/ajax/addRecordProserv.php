<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");
		
		
		
		// get values 
		$id = $_POST['id'];
        $product_name = $_POST['product_name'];
		$product_description = $_POST['product_description'];
        $product_start_price = $_POST['product_start_price'];
        $product_end_price = $_POST['product_end_price'];
		$category = $_POST['category'];

		$query = "INSERT INTO proserv(id,product_name,product_description) VALUES('$id', '$product_name', '$product_description')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>