<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    
       $id = $_POST['id'];
        $lead = $_POST['lead'];
		$opportunity = $_POST['opportunity'];
        $proposal = $_POST['proposal'];
        $quotation = $_POST['quotation'];
		$ra = $_POST['ra'];
		$design = $_POST['design'];
		$testing = $_POST['testing'];
		$development = $_POST['development'];
		$support = $_POST['support'];
		$maintenance = $_POST['maintenance'];
		$invoice = $_POST['invoice'];
		$delivery = $_POST['delivery'];
		$cancelled = $_POST['cancelled'];
		$delay = $_POST['delay'];
		$completed = $_POST['completed'];
		$user_id = $_POST['user_id'];

    // Updaste User details
    $query = "UPDATE quotation SET lead = '$lead', opportunity = '$opportunity', proposal = '$proposal', quotation = '$quotation', ra = '$ra', design = '$design', testing = '$testing', development= '$development', support = '$support', maintenance = '$maintenance', invoice = '$invoice', delivery = '$delivery', cancelled = '$cancelled', delay = '$delay', completed = '$completed', user_id = '$user_id' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}