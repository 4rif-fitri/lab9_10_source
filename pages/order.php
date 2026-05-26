<?php
$name = "";
$email = "";
$phone = "";
$address = "";

$p_nAyam = 0;
$q_nAyam = 0;

$p_nAmbeng = 0;
$q_nAmbeng = 0;

$p_nTomato = 0;
$q_nTomato = 0;

$t_nAyam = 0;
$t_nAmbeng = 0;
$t_nTomato = 0;

$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];

	$p_nAyam = $_POST["p_nAyam"] ?? 0;
	$q_nAyam = $_POST["q_nAyam"] ?? 0;

	$p_nAmbeng = $_POST["p_nAmbeng"] ?? 0;
	$q_nAmbeng = $_POST["q_nAmbeng"] ?? 0;

	$p_nTomato = $_POST["p_nTomato"] ?? 0;
	$q_nTomato = $_POST["q_nTomato"] ?? 0;

	$t_nAyam = number_format($p_nAyam * $q_nAyam, 2);
	$t_nAmbeng = number_format($p_nAmbeng * $q_nAmbeng, 2);
	$t_nTomato = number_format($p_nTomato * $q_nTomato, 2);

	$total = number_format($t_nAmbeng + $t_nAyam + $t_nTomato, 2);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		tr td:nth-child(1) {
			font-weight: bolder;
		}

		/* tr:has(td[colspan='1']) {
			font-weight: bold;
		} */

		tr:nth-child(5),
		tr:nth-child(9) {
			font-weight: bold;
		}
	</style>
</head>

<body>

	<?php include("../components/head.php") ?>


	<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
		<h2>
			Thank You
			<span style="color:red"><?= $name ?></span>
			For Ordering Food With Us
		</h2>

		<table border="1">
			<tbody>
				<tr>
					<td>Name:</td>
					<td colspan="3"><?= $name ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="3"><?= $email ?></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td colspan="3"><?= $phone ?></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td colspan="3"><?= $address ?></td>
				</tr>
				<tr>
					<td>Item:</td>
					<td colspan="1">PRICE (RM)</td>
					<td colspan="1">QUANTITY</td>
					<td colspan="1">TOTAL PRICE (RM)</td>
				</tr>
				<tr>
					<td>Nasi Ayam:</td>
					<td colspan="1"><?= $p_nAyam ?></td>
					<td colspan="1"><?= $q_nAyam ?></td>
					<td colspan="1"><?= $t_nAyam ?></td>
				</tr>
				<tr>
					<td>Nasi Ambang:</td>
					<td colspan="1"><?= $p_nAmbeng ?></td>
					<td colspan="1"><?= $q_nAmbeng ?></td>
					<td colspan="1"><?= $t_nAmbeng ?></td>
				</tr>
				<tr>
					<td>Nasi Tomato:</td>
					<td colspan="1"><?= $p_nTomato ?></td>
					<td colspan="1"><?= $q_nTomato ?></td>
					<td colspan="1"><?= $t_nTomato ?></td>
				</tr>
				<tr>
					<td>JUMLAH BAYARAN</td>
					<td colspan="3" style="color:red">
						<?= $total ?>
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