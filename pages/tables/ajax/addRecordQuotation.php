<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$id = $_POST['id'];
        $lead = $_POST['lead'];
		$opportunity = $_POST['opportunity'];
        $proposal = $_POST['proposal'];
        $quotation = $_POST['quotation'];
		$ra = $_POST['ra'];
		$design = $_POST['design'];
		$testing = $_POST['testing'];
		$development = $_POST['development'];
		$support = $_POST['support'];
		$maintenance = $_POST['maintenance'];
		$invoice = $_POST['invoice'];
		$delivery = $_POST['delivery'];
		$cancelled = $_POST['cancelled'];
		$delay = $_POST['delay'];
		$completed = $_POST['completed'];
		$user_id = $_POST['user_id'];

		$query = "INSERT INTO quotation(lead,opportunity,proposal,quotation,ra,design,development,testing,support,maintenance,invoice,delivery,cancelled,delay,completed,user_id) VALUES('$lead','$opportunity','$proposal','$quotation','$ra','$design','$development','$testing','$support','$maintenance','$invoice','$delivery','$cancelled','$delay','$completed', '$user_id')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>