<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$dbusername ="null";
$dbpassword = "null";
$dbtype= "null";
if($username && $password)
{
	$connect = mysql_connect("localhost","root","");
	mysql_select_db("sales management");
	$query = mysql_query("select * from users where email='$username'");
	
	while($log = mysql_fetch_assoc($query))
	{
		$dbusername =$log["email"];
		$dbpassword =$log["password"];
		$dbtype =$log["role"];
	}
	 
	if($dbusername == $username && $dbpassword == $password && $dbtype == "admin")
	{
		
		header("Location: ../../index.html");
	}
	elseif($dbusername == $username && $dbpassword == $password && $dbtype == "sales")
	{
		header("Location: ../../sales_index.html");
	}
	elseif($dbusername == $username && $dbpassword == $password && $dbtype == "project_manager")
	{
		header("Location: ../../project_manager_index.html");
	}
	elseif($dbusername == $username && $dbpassword == $password && $dbtype == "company")
	{
		header("Location: ../../company_index.html");
	}
	else
	{
		header("Location: ../../indeex.php");
	}
}


?>