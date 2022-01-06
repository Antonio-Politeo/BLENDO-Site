<!DOCTYPE html>
<html>
	<head>
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Blendo games.">
        <meta name="keywords" content="Blendo, Blendo games, Games, Video Games">
        <meta name="author" content="apolit1@vvg.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Example page - Contact</title>
	</head>
<body>
	<header>
		<div class="hero-image" style="height: 200px;"></div>
		<nav>
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="news.html">News</a></li>
			  <li><a href="contact.html">Contact</a></li>
			  <li><a href="about-us.html">About</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Contact Form</h1>
		<div id="contact">
			<iframe src="https://maps.google.com/maps?q=Los%20Angeles&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			<?php
				print '<p style="text-align:center; padding: 10px; background-color: #d7d6d6;border-radius: 5px;">We have recieved your question and will get back to you.</p>';
				$EmailHeaders  = "MIME-Version: 1.0\r\n";
				$EmailHeaders .= "Content-type: text/html; charset=utf-8\r\n";
				$EmailHeaders .= "From: <apolit1@vvg.hr>\r\n";
				$EmailHeaders .= "Reply-To:<politeoantonio@gmail.com>\r\n";
				$EmailHeaders .= "X-Mailer: PHP/".phpversion();
				$EmailSubject = 'Example page - Contact Form';
				$EmailBody  = '
				<html>
				<head>
				   <title>'.$EmailSubject.'</title>
				   <style>
					body {
					  background-color: #ffffff;
						font-family: Arial, Helvetica, sans-serif;
						font-size: 16px;
						padding: 0px;
						margin: 0px auto;
						width: 500px;
						color: #000000;
					}
					p {
						font-size: 14px;
					}
					a {
						color: #00bad6;
						text-decoration: underline;
						font-size: 14px;
					}
					
				   </style>
				   </head>
				<body>
					<p>First name: ' . $_POST['firstname'] . '</p>
					<p>Last name: ' . $_POST['lastname'] . '</p>
					<p>E-mail: <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a></p>
					<p>Country: ' . $_POST['country'] . '</p>
					<p>Subject: ' . $_POST['subject'] . '</p>
				</body>
				</html>';
				print '<p>First name: ' . $_POST['firstname'] . '</p>
				<p>Last name: ' . $_POST['lastname'] . '</p>
				<p>E-mail: ' . $_POST['email'] . '</p>
				<p>Country: ' . $_POST['country'] . '</p>
				<p>Subject: ' . $_POST['subject'] . '</p>';
				mail($_POST['email'], $EmailSubject, $EmailBody, $EmailHeaders);
			?>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; Antonio Politeo</p>
	</footer>
	<!-- Google Analytics code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-98455037-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- End Google Analytics code -->
</body>
</html>
