<!DOCTYPE html>
<html>
	<head>
		<?php
			require "inc/head.php";
		?>
	</head>
	<body>
		<?php
			require "inc/header.php";
		?>
		<div class="main">
			<div class="contact-div">
				<form action="contact.php" method="POST" accept-charset="UTF-8">
					<table class="contact-table">
						<tr>
							<td> <!-- this is where you insert you're name in contacts-->
								<label for="name">Name*:</label>
							</td>
							<td> 
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td> <!-- this is where you insert you're email in contacts-->
								<label for="email">Email*:</label>
							</td>
							<td>
								<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+" required>
							</td>
						</tr>
						<tr>
							<td> <!-- this is where you insert you're phone number in contacts-->
								<label for="phone">Phone*:</label>
							</td>
							<td>
								<input type="text" name="phone" pattern="[0-9](\d+)[\-]?[\ ]?(\d+)" required>
							</td>
						</tr>
						<tr>
							<td> <!-- this is where you insert a message in contacts-->
								<label for="message">Message*:</label>
							</td>
							<td>
								<textarea cols="25" rows="5" required></textarea>
							</td>
						</tr>
						<tr>
							<td></td> 
							<td> <!-- this is where you send all the info from the label in contacts-->
								<input type="submit" name="submit" value="Send">
							</td>
						</tr>
						<tr>
							<td colspan="2"> <!-- not needed -->
								<p>* required field</p>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php
			require "inc/footer.php";
		?>
	</body>
</html>