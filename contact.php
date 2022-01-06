<?php 
	print '
	<h1>CONTACT US</h1>
	<div id="contact">
		<iframe src="https://maps.google.com/maps?q=Los%20Angeles&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="NY">New York</option>
				<option value="HR" selected>Croatia</option>
				<option value="NZ">New Zeland</option>
				<option value="GE">Germany</option>
			</select>
			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>';
?>