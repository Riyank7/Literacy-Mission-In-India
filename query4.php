<html>
<head>
</head>
<body>
<form action="query4.php" method="POST">
<h3>Enter the state<select name="dropdown">
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Tamilnadu">Tamilnadu</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
						</select></h3>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
  $states = $_POST['dropdown'];
}


$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'literacy'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}



$sql = 'SELECT DF.District_Name,DF.No_Schools 
		FROM District_F DF JOIN D_IN_S DS 
		ON DF.District_Code = DS.District_Code JOIN State_F SF 
		ON DS.State_Code = SF.State_Code WHERE SF.State_Name = "Kerala";';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
</body>
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
		<caption class="title">No Of Schools In A State (District Wise)</caption>
		<thead>
			<tr>
				<th>District Name </th>
				<th>No Of Schools</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['District_Name'].'</td>
					<td>'.$row['No_Schools'].'</td>
					
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