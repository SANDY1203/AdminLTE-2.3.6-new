<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");


		// get values 
		$id = $_POST['id'];
		$proserv_id = $_POST['proserv_id'];
        $project_contractor_id = $_POST['project_contractor_id'];
		$project_price = $_POST['project_price'];
        $project_team = $_POST['project_team'];
        $project_status = $_POST['project_status'];
		$category_proserv_project = $_POST['category_proserv_project'];

		$query = "INSERT INTO proserv_project(id,proserv_id,project_contractor_id,project_price,project_team,project_status,category_proserv_project) VALUES('$id', '$proserv_id', '$project_contractor_id', '$project_price', '$project_team', '$project_status', '$category_proserv_project')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>