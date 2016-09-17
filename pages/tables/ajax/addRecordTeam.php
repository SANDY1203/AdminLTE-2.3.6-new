<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$team_id = $_POST['team_id'];
        $team_name = $_POST['team_name'];
		$team_lead = $_POST['team_lead'];
      

		$query = "INSERT INTO team(team_id,team_name,team_lead) VALUES('$team_id', '$team_name', '$team_lead')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>