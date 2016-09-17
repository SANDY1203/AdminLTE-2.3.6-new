<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");
		
		// get values 
		$id = $_POST['id'];
		$contact_name = $_POST['contact_name'];
        $contact_position = $_POST['contact_position'];
		$contact_number_one = $_POST['contact_number_one'];
        $contact_number_two = $_POST['contact_number_two'];
        $contact_email_one = $_POST['contact_email_one'];
		$contact_email_two = $_POST['contact_email_two'];
		$contact_company_allo = $_POST['contact_company_allo'];

		$query = "INSERT INTO contact(id,contact_name,contact_position,contact_number_one,contact_number_two,contact_email_one,contact_email_two,contact_company_allo) VALUES('$id', '$contact_name', '$contact_position', '$contact_number_one', '$contact_number_two', '$contact_email_one', '$contact_email_two', '$contact_company_allo')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>