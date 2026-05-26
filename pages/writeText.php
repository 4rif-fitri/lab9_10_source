<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$file = "../temp/detail.txt";

	$data = array(
		$_POST['FirstName'],
		$_POST['LastName'],
		$_POST['Tempat'],
		$_POST['Email'],
		$_POST['PhoneNumber'],
		$_POST['Gender'],
		$_POST['FavWebsite'],
		$_POST['Comment']
	);

	$fp = fopen($file, "a");

	foreach ($data as $v) {
		fwrite($fp, $v . "\t");
	}

	fwrite($fp, "\n");
	fclose($fp);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php include("../components/head.php") ?>

	<h2>BUKU TAMU</h2>


	<form method="POST" action="" style="margin-bottom: 1rem;">
		<!-- <form method="POST" action="Write.php" style="margin-bottom: 1rem;"> -->
		<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse" width="40%">

			<tr>
				<td width="20%" align="left">Fisrt Name</td>
				<td width="30%"> <input type="text" name="FirstName" size="30"></td>
			</tr>
			<tr>
				<td width="20%" align="left">Last Name</td>
				<td width="30%"> <input type="text" name="LastName" size="30"></td>
			</tr>
			<tr>
				<td width="20%" align="left">Tempat</td>
				<td width="30%"> <input type="text" name="Tempat" size="30"> </td>

			</tr>
			<tr>
				<td width="20%" align="left">Email</td>
				<td width="30%"> <input type="email" name="Email" size="30"></td>
			</tr>
			<tr>
				<td width="20%" align="left">Phone Number</td>
				<td width="30%">
					<input type="number" name="PhoneNumber" size="30">
				</td>
			</tr>
			<tr>
				<td width="20%" align="left">Gender</td>
				<td>
					<input type="radio" name="Gender" id="Female" value="Female" size="30">
					<label for="Female">Female</label>
					<input type="radio" name="Gender" id="Male" value="Male" size="30">
					<label for="Male">Male</label>
				</td>
			</tr>

			<tr>
				<td width="20%" align="left">Fav Website</td>
				<td width="30%">
					<input type="text" name="FavWebsite" size="30">
				</td>
			</tr>

			<tr>
				<td width="20%" align="left">Comment</td>
				<td width="30%">
					<input type="text" name="Comment" size="30">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Submit Form" />
					<input type="reset" value="Clear Form" />
				</td>
			</tr>

		</table>
	</form>

	<?php include("../components/footer.php") ?>

</body>

</html>