<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>id</th>
					  <th>name</th>
                      <th>position</th>
                      <th>number_one</th>
					  <th>number_two</th>
					  <th>email_one</th>
					  <th>email_two</th>
					  <th>c_a</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM contact";

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
				<td>'. $row['id'] . '</td>
			     				 <td>'. $row['contact_name'] . '</td>
				 <td>'. $row['contact_position'] . '</td>
				 <td>'. $row['contact_number_one'] . '</td>
				 <td>'. $row['contact_number_two'] . '</td>
				 <td>'. $row['contact_email_one'] . '</td>
                <td>'. $row['contact_email_two'] . '</td>
				<td>'. $row['contact_company_allo'] . '</td>
				<td>
					<button onclick="GetContactDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteContact('.$row['id'].')" class="btn btn-danger">Delete</button>
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