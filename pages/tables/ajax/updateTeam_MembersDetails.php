<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $team_m_id = $_POST['team_m_id'];
        $team_m_first_name = $_POST['team_m_first_name'];
		$team_m_last_name = $_POST['team_m_last_name'];
        $team_m_position = $_POST['team_m_position'];
        $team_m_employement_status = $_POST['team_m_employement_status'];
		$team_id = $_POST['team_id'];

    // Updaste User details
    $query = "UPDATE team_members SET team_m_first_name = '$team_m_first_name', team_m_last_name = '$team_m_last_name', team_m_position = '$team_m_position', team_m_employement_status='$team_m_employement_status', team_id='$team_id' WHERE team_m_id = '$team_m_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}