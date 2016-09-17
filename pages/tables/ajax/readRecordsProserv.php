<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>id</th>
					  <th>product_name</th>
                      <th>product_description</th>
                      <th>product_start_price</th>
					  <th>product_end_price</th>
					  <th>category</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM proserv";

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
			     <td>'. $row['product_name'] . '</td>
				 <td>'. $row['product_description'] . '</td>
                <td>'. $row['product_start_price'] . '</td>
                <td>'. $row['product_end_price'] . '</td>
				<td>'. $row['category'] . '</td>
				<td>
					<button onclick="GetProservDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteProserv('.$row['id'].')" class="btn btn-danger">Delete</button>
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