<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'literacy'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'select ds.State_Code,sf.State_Name,ff.Govt_Funds from State_F sf join D_IN_S ds on sf.State_Code = ds.State_Code join Funds_F ff on ds.District_Code = ff.District_Code group by sf.State_Code,sf.State_Name order by ff.Govt_Funds desc limit 5;';
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1 style="background-color:DodgerBlue;">Query Details</h1>
	<table class="data-table">
		<caption class="title">Most Literate District In A State </caption>
		<thead>
			<tr>
				<th>State Code</th>
				<th>State Name</th>
				<th>Funds</th>
				
	
				
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['State_Code'].'</td>
						<td>'.$row['State_Name'].'</td>
						   <td>'.$row['Govt_Funds'].'</td>
					
			
					
				</tr>';
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
			</tr>
		</tfoot>
	</table>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<center>
            <form action="index1.php">
            
            <h4>Back</h4>
            <input type="submit" value="Return" />
            </form>
            </center>
</body>
</html> 