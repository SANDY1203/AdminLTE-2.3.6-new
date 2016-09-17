<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>id</th>
					  <th>user_id</th>
                      <th>ans_1</th>
                      <th>ans_2</th>
					  <th>ans_3</th>
					  <th>ans_4</th>
					  <th>ans_5</th>
					  <th>remarks</th>
					  <th>contact_id</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM feedback";

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
			     <td>'. $row['user_id'] . '</td>
				 <td>'. $row['ans_1'] . '</td>
				 <td>'. $row['ans_2'] . '</td>
				 <td>'. $row['ans_3'] . '</td>
				 <td>'. $row['ans_4'] . '</td>
				 <td>'. $row['ans_5'] . '</td>
                <td>'. $row['remarks'] . '</td>
				<td>'. $row['contact_id'] . '</td>
				<td>
					<button onclick="GetFeedbackDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteFeedback('.$row['id'].')" class="btn btn-danger">Delete</button>
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