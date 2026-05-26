<html>

<head>
	<title>A Simple PHP: Hello World</title>
</head>

<body>
	<?php include("../components/head.php") ?>


	<section>
		<div class="container">
			<div class="login-container">
				<form method="post" action="./order.php">
					<table>
						<tr>
							<th colspan="3">PERSONAL DETAILS: </th>
						</tr>
						<tr>
							<th>Name: </th>
							<td colspan="2"><input type="text" name="name" required></td>
						</tr>
						<tr>
							<th>Email: </th>
							<td colspan="2"><input type="email" name="email" required></td>
						</tr>
						<tr>
							<th>Phone: </th>
							<td colspan="2"><input type="number" name="phone" required></td>
						</tr>
						<tr>
							<th>Address: </th>
							<td colspan="2"><textarea name="address" rows="5" required></textarea></td>
						</tr>
						<tr>
							<th colspan="3">ORDERING DETAILS: </th>
						</tr>
						<tr>
							<th>ITEM: </th>
							<th>PRICE (RM)</th>
							<th>QUANTITI</th>
						</tr>
						<tr>
							<th>Nasi Ayam: </th>
							<td><input type="number" name="p_nAyam" value="6.50" readonly></td>
							<td><input type="number" name="q_nAyam"></td>
						</tr>
						<tr>
							<th>Nasi Ambeng: </th>
							<td><input type="number" name="p_nAmbeng" value="7.80" readonly></td>
							<td><input type="number" name="q_nAmbeng"></td>
						</tr>
						<tr>
							<th>Nasi Tomato: </th>
							<td><input type="number" name="p_nTomato" value="7.80" readonly></td>
							<td><input type="number" name="q_nTomato"></td>
						</tr>
						<tr>
							<td colspan="3"><input type="submit" name="submit" value="SUBMIT ORDER">
								<input type="reset" name="reset" value="CLEAR ORDER">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</section>

	<?php include("../components/footer.php") ?>

	</center>
</body>

</html>