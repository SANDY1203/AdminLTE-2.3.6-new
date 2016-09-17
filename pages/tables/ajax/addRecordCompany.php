<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$company_id = $_POST['company_id'];
        $company_name = $_POST['company_name'];
		$company_address = $_POST['company_address'];
        $company_phone = $_POST['company_phone'];
        $company_email = $_POST['company_email'];
		$user_id = $_POST['user_id'];

		$query = "INSERT INTO company(company_id,company_name,company_address,company_phone,company_email,user_id) VALUES('$company_id', '$company_name', '$company_address', '$company_phone', '$company_email', '$user_id')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>