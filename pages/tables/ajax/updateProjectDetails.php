<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
		$project_name = $_POST['project_name'];
        $project_desc = $_POST['project_desc'];
		$project_company_id = $_POST['project_company_id'];
        $project_price = $_POST['project_price'];
        $project_team = $_POST['project_team'];
		$project_status = $_POST['project_status'];
		$user_id = $_POST['user_id'];

    // Updaste User details
    $query = "UPDATE projects SET project_name = '$project_name', project_desc = '$project_desc', project_price = '$project_price', project_team = '$project_team', project_status = '$project_status', user_id = '$user_id', project_company_id='$project_company_id' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}