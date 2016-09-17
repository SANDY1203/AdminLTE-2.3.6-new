<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>company_id</th>
					  <th>company_name</th>
                      <th>company_address</th>
                      <th>company_phone</th>
					  <th>company_email</th>
					  <th>user_id</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM company";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'. $row['company_id'] . '</td>
			     <td>'. $row['company_name'] . '</td>
				 <td>'. $row['company_address'] . '</td>
                <td>'. $row['company_phone'] . '</td>
                <td>'. $row['company_email'] . '</td>
				<td>'. $row['user_id'] . '</td>
				<td>
					<button onclick="GetCompanyDetails('.$row['company_id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteCompany('.$row['company_id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>