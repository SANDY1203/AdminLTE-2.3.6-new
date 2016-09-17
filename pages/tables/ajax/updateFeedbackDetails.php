<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
		$user_id = $_POST['user_id'];
        $ans_1 = $_POST['ans_1'];
		$ans_2 = $_POST['ans_2'];
        $ans_3 = $_POST['ans_3'];
        $ans_4 = $_POST['ans_4'];
		$ans_5 = $_POST['ans_5'];
		$remarks = $_POST['remarks'];
		$contact_id = $_POST['contact_id'];

    // Updaste User details
    $query = "UPDATE feedback SET user_id = '$user_id', ans_1 = '$ans_1', ans_2 = '$ans_2', ans_3 = '$ans_3', ans_4 = '$ans_4', ans_5 = '$ans_5', remarks = '$remarks', contact_id='$contact_id' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}