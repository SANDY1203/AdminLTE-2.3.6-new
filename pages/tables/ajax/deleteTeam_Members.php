<?php
// check request
if(isset($_POST['team_m_id']) && isset($_POST['team_m_id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $team_m_id = $_POST['team_m_id'];

    // delete User
    $query = "DELETE FROM team_members WHERE team_m_id = '$team_m_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>