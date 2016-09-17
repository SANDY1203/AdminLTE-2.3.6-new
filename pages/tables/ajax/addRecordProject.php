<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");
		
		

		// get values 
		$id = $_POST['id'];
		$project_name = $_POST['project_name'];
        $project_desc = $_POST['project_desc'];
		$project_company_id = $_POST['project_company_id'];
        $project_price = $_POST['project_price'];
        $project_team = $_POST['project_team'];
		$project_status = $_POST['project_status'];
		$user_id = $_POST['user_id'];
		

		$query = "INSERT INTO projects(id,project_name,project_desc,project_company_id,project_price,project_team,project_status,user_id) VALUES('$id', '$project_name', '$project_desc', '$project_company_id', '$project_price', '$project_team', '$project_status', '$user_id')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>