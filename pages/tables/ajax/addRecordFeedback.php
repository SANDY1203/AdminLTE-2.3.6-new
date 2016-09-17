<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$id = $_POST['id'];
		$user_id = $_POST['user_id'];
        $ans_1 = $_POST['ans_1'];
		$ans_2 = $_POST['ans_2'];
        $ans_3 = $_POST['ans_3'];
        $ans_4 = $_POST['ans_4'];
		$ans_5 = $_POST['ans_5'];
		$remarks = $_POST['remarks'];
		$contact_id = $_POST['contact_id'];

		$query = "INSERT INTO feedback(id,user_id,ans_1,ans_2,ans_3,ans_4,ans_5,remarks,contact_id) VALUES('$id', '$user_id', '$ans_1', '$ans_2', '$ans_3', '$ans_4', '$ans_5', '$remarks', '$contact_id')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>