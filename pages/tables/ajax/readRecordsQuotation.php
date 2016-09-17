<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>id</th>
					  <th>lead</th>
                      <th>opportunity</th>
                      <th>proposal</th>
					  <th>quotation</th>
					  <th>ra</th>
					  <th>design</th>
					  <th>testing</th>
                      <th>development</th>
                      <th>support</th>
					  <th>maintenance</th>
					  <th>invoice</th>
					  <th>delivery</th>
					  <th>cancelled</th>
                      <th>delay</th>
                      <th>completed</th>
					  <th>user_id</th>
					  
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM quotation";

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
			     <td>'. $row['lead'] . '</td>
				 <td>'. $row['opportunity'] . '</td>
                <td>'. $row['proposal'] . '</td>
                <td>'. $row['quotation'] . '</td>
				<td>'. $row['ra'] . '</td>
				<td>'. $row['design'] . '</td>
				<td>'. $row['testing'] . '</td>
				<td>'. $row['development'] . '</td>
				<td>'. $row['support'] . '</td>
				<td>'. $row['maintenance'] . '</td>
				<td>'. $row['invoice'] . '</td>
				<td>'. $row['delivery'] . '</td>
				<td>'. $row['cancelled'] . '</td>
				<td>'. $row['delay'] . '</td>
				<td>'. $row['completed'] . '</td>
				<td>'. $row['user_id'] . '</td>
				
				<td>
					<button onclick="GetQuotationDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteQuotation('.$row['id'].')" class="btn btn-danger">Delete</button>
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