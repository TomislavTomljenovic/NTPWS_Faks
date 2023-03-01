<!DOCTYPE html>
<html>
	<body>
		<main>
			<h1>Contact Form</h1>
			<div id="contact">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.4740418953556!2d15.966992458410761!3d45.801763866557465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6f193f520cf%3A0xb5269626cc776fda!2sKoranska%20ul.%201A%2C%2010000%2C%20Zagreb!5e0!3m2!1sen!2shr!4v1676288895184!5m2!1sen!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>			
				<form action="http://localhost/projekt/send-contact.php" id="contact_form" name="contact_form" method="POST">
					<label for="fname">First Name *</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

					<label for="lname">Last Name *</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
					
					<label for="lname">Your E-mail *</label>
					<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

					<label for="country">Country</label>
					<select id="country" name="country">
					<option value="">Please select</option>
					<option value="EN">England</option>
					<option value="HR">Croatia</option>
					<option value="DE">Germany</option>
					<option value="FR">France</option>
					</select>

					<label for="subject">Subject</label>
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

					<input type="submit" value="Submit">
				</form>
			</div>
		</main>
	</body>
</html>

