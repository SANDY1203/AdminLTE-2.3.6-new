<?php
// include Database connection file 
		

	if(isset($_POST))
	{
		// include Database connection file 
		include("db_connection.php");
		
		

		// get values 
		$team_m_id = $_POST['team_m_id'];
        $team_m_first_name = $_POST['team_m_first_name'];
		$team_m_last_name = $_POST['team_m_last_name'];
        $team_m_position = $_POST['team_m_position'];
        $team_m_employement_status = $_POST['team_m_employement_status'];
		$team_id = $_POST['team_id'];

		$query = "INSERT INTO team_members(team_m_id,team_m_first_name,team_m_last_name,team_m_position,team_m_employement_status,team_id) VALUES('$team_m_id','$team_m_first_name', '$team_m_last_name', '$team_m_position', '$team_m_employement_status', '$team_id')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>