<?php
// check request
if(isset($_POST['team_id']) && isset($_POST['team_id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $team_id = $_POST['team_id'];

    // delete User
    $query = "DELETE FROM team WHERE team_id = '$team_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>