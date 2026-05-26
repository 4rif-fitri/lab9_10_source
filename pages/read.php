<?php $file = fopen("../temp/detail.txt", "r"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php include("../components/head.php") ?>
	<h2>Read Flat Data</h2>
	<table border="1" style="margin: 1rem auto; width:90%">
		<thead>
			<tr>
				<td>Fisrt Name</td>
				<td>Last Name</td>
				<td>Tempat</td>
				<td>Email</td>
				<td>Phone Number</td>
				<td>Gender</td>
				<td>Fav Website</td>
				<td>Comment</td>
			</tr>
		</thead>
		<tbody>
			<?php

			while ($datas = fgets($file)) {
				// $datas = chop($datas);
				$datas = trim($datas);
				$datas = explode("\t", $datas);
				// var_dump($datas[0]);
				echo "<tr>";
				echo "<td>" . $datas[0] . "</td>";
				echo "<td>" . $datas[1] . "</td>";
				echo "<td>" . $datas[2] . "</td>";
				echo "<td>" . $datas[3] . "</td>";
				echo "<td>" . $datas[4] . "</td>";
				echo "<td>" . $datas[5] . "</td>";
				echo "<td>" . $datas[6] . "</td>";
				echo "<td>" . $datas[7] . "</td>";
				echo "</tr>";
			}
			fclose($file);
			
			?>

		</tbody>
	</table>

	<?php include("../components/footer.php") ?>
</body>

</html>