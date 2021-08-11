<!DOCTYPE html>
<html>
<head>
	<?php
       		include 'style2.php';
        	include 'links.php';
    	?>
	<title>
		
	</title>
</head>
<body id="bdy">
	<h1>List of inquiry</h1>
	<div class="Center-div">
		<div class="table-responsive">
			<table>
				<thread>
					<tr id="info">
						<th class="col">id</th></pre></th>
						<th class="col">FName</pre></th>
						<th class="col">LName</t></th>
						<th class="col">Gender</t></th>
						<th class="col">Phone</t></th>
						<th class="col">Mail</t></th>
						<th class="col">Cource</t></th>
					</tr>

				</thread>
				<tbody>
					<?php
	include 'connection.php';

	$selectquery = " select * from regestration ";
	$query=mysqli_query($con,$selectquery);


$num=mysqli_num_rows($query);

$result=mysqli_fetch_array($query);
while($result=mysqli_fetch_array($query))
	{
		//echo $result['FName']."<br>";
		?>
					<tr id="result">
						<td class="col"><?php echo $result['id']; ?></pre></td>
						<td class="col"><?php echo $result['FName']; ?></pre></td>
						<td class="col"><?php echo $result['LName']; ?></t></td>
						<td class="col"><?php echo $result['Gender']; ?></t></td>
						<td class="col"><?php echo $result['Num']; ?></t></td>
						<td class="col"><?php echo $result['Mail']; ?></t></td>
						<td class="col"><?php echo $result['Cource']; ?></t></td>
					</tr>
		<?php

	}


?> 
					
				</tbody>

			</table>
			


		</div>
		


	</div>

</body>
</html>