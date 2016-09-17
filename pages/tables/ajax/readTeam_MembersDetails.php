<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['team_m_id']) && isset($_POST['team_m_id']) != "")
{
    // get User ID
    $team_m_id = $_POST['team_m_id'];

    // Get User Details
    $query = "SELECT * FROM team_members WHERE team_m_id = '$team_m_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    $response = array();
    if(mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}