<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$id = $_POST['id'];
        $question = $_POST['question'];
		

		$query = "INSERT INTO questions(id,question) VALUES('$id', '$question')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>