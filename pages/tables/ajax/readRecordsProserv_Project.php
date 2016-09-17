<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>id</th>
					  <th>proserv_id</th>
                      <th>project_contractor_id</th>
                      <th>project_price</th>
					  <th>project_team</th>
					  <th>project_status</th>
					  <th>category_proserv_project</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM proserv_project";

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
			     <td>'. $row['proserv_id'] . '</td>
				 <td>'. $row['project_contractor_id'] . '</td>
				 <td>'. $row['project_price'] . '</td>
				 <td>'. $row['project_team'] . '</td>
				 <td>'. $row['project_status'] . '</td>
				 <td>'. $row['category_proserv_project'] . '</td>
                
				<td>
					<button onclick="GetProserv_ProjectDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteProserv_Project('.$row['id'].')" class="btn btn-danger">Delete</button>
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