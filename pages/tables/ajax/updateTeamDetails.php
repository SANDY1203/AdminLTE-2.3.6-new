<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
		$team_id = $_POST['team_id'];
        $team_name = $_POST['team_name'];
		$team_lead = $_POST['team_lead'];


    // Updaste User details
    $query = "UPDATE team SET  team_name = '$team_name', team_lead = '$team_lead' WHERE team_id = '$team_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}