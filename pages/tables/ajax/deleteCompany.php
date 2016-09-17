<?php
// check request
if(isset($_POST['company_id']) && isset($_POST['company_id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $company_id = $_POST['company_id'];

    // delete User
    $query = "DELETE FROM company WHERE company_id = '$company_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>