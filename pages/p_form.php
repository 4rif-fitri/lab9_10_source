<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<?php include("../components/head.php") ?>


	<?php if (
		isset($_POST["fname"]) &&
		isset($_POST["lname"]) &&
		isset($_POST["address"]) &&
		isset($_POST["email"]) &&
		isset($_POST["phone"]) &&
		isset($_POST["gender"]) &&
		isset($_POST["site"]) &&
		isset($_POST["comment"])
	) : ?>

		<h2>WELCOME <?= $_POST["fname"] ?> <?= $_POST["lname"] ?></h2>

		<table border="1">
			<tbody>
				<tr>
					<td>
						First Name
					</td>
					<td>
						<?= $_POST["fname"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Last Name
					</td>
					<td>
						<?= $_POST["lname"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Address
					</td>
					<td>
						<?= $_POST["address"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Eamil
					</td>
					<td>
						<?= $_POST["email"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Phone Number
					</td>
					<td>
						<?= $_POST["phone"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Gender
					</td>
					<td>
						<?= $_POST["gender"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Favourite Site
					</td>
					<td>
						<!-- <?php var_dump($_POST["site"]) ?> -->
						<!-- <?= $_POST["site"] ?> -->
						<?php
						foreach ($_POST["site"] as $site) {
							echo $site . "<br>";
						}
						?>
					</td>
				</tr>
				<tr>
					<td>
						Comment
					</td>
					<td>
						<?= $_POST["comment"] ?>
					</td>
				</tr>
			</tbody>
		</table>

	<?php else : ?>
		<center>
			<h1>Upss, Plase Complate The Form!</h1>
		</center>
	<?php endif ?>

	<?php include("../components/footer.php") ?>

</body>

</html>