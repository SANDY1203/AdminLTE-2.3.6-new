<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
        $first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		$role = $_POST['role'];

    // Updaste User details
    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', password='$password', role='$role' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}