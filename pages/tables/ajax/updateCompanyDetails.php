<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $company_id = $_POST['company_id'];
        $company_name = $_POST['company_name'];
		$company_address = $_POST['company_address'];
        $company_phone = $_POST['company_phone'];
        $company_email = $_POST['company_email'];
		$user_id = $_POST['user_id'];

    // Updaste User details
    $query = "UPDATE company SET company_name = '$company_name', company_address = '$company_address', company_phone = '$company_phone', company_email='$company_email', user_id='$user_id' WHERE company_id = '$company_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}