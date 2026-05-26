<html>

<head>
	<title>Sample form to take user input</title>
	<link rel="stylesheet" type="text/css" type="format.css">
</head>

<body>

	<?php include("../components/head.php") ?>

	<section>
		<div class="container">
			<div class="login-container">
				<center>
					<h3>Please fill in all fields and click Submit Form. </h3>
					<!-- Post form data to Display.php -->
					<form method="post" action="./p_form.php">
						<!-- create four text boxes for user input -->
						<table>
							<tr>
								<td>First Name</td>
								<td><input type="text" name="fname" /></td>
							</tr>
							<tr>
								<td>Last Name</td>
								<td> <input type="text" name="lname" /></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><textarea name="address" rows=5 cols=25></textarea></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" /></td>
							</tr>
							<tr>
								<td>Phone Number</td>
								<td><input type="text" name="phone" /></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><input type="radio" name="gender" value="Female" />FEMALE
									<input type="radio" name="gender" value="Male" />MALE
								</td>
							</tr>
							<tr>
								<td>Favourite Site</td>
								<td><input type="checkbox" name="site[]" value="Google" />GOOGLE
									<input type="checkbox" name="site[]" value="Facebook" />FACEBOOK
									<input type="checkbox" name="site[]" value="Utem" />UTEM
								</td>
							</tr>
							<tr>
								<td>Comment</td>
								<td><textarea name="comment" rows=5 cols=25></textarea></td>
							</tr>
							<tr>
								<br />
								<!-- create a submit button -->
								<td colspan="2"><input type="submit" value="Submit Form" />
									<input type="reset" value="Clear Form" />
								</td>
							</tr>
						</table>
					</form>
			</div>
		</div>
	</section>

	<?php include("../components/footer.php") ?>

</body>

</html>