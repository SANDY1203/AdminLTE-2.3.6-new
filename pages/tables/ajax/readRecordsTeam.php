<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>team_id</th>
					  <th>team_name</th>
                      <th>team_lead</th>
                      
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM team";

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
				<td>'. $row['team_id'] . '</td>
			     <td>'. $row['team_name'] . '</td>
				 <td>'. $row['team_lead'] . '</td>
              
				<td>
					<button onclick="GetTeamDetails('.$row['team_id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteTeam('.$row['team_id'].')" class="btn btn-danger">Delete</button>
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