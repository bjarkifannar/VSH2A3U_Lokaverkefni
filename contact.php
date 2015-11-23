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
				<form accept-charset="UTF-8">
					<table class="contact-table">
						<tr>
							<td>
								<label for="name">Name*:</label>
							</td>
							<td>
								<input type="text" name="name">
							</td>
						</tr>
						<tr>
							<td>
								<label for="email">Email*:</label>
							</td>
							<td>
								<input type="text" name="email">
							</td>
						</tr>
						<tr>
							<td>
								<label for="message">Message*:</label>
							</td>
							<td>
								<textarea cols="25" rows="5"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="button" name="submit" value="Send">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p>* required field</p>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div>
				<!-- Email -->
			    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
			        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
			    </a>
			 
			    <!-- Facebook -->
			    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
			        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
			    </a>
			    
			    <!-- Google+ -->
			    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
			        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
			    </a>
			     <a href="http://reddit.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
			        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
			    </a>
			</div>
		</div>
		<?php
			require "inc/footer.php";
		?>
	</body>
</html>