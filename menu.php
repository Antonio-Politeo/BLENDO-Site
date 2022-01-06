<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">HOME</a></li>
		<li><a href="index.php?menu=2">NEWS</a></li>
		<li><a href="index.php?menu=3">CONTACT</a></li>
		<li><a href="index.php?menu=4">ABOUT</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">REGISTER</a></li>
			<li><a href="index.php?menu=6">SIGN IN</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">ADMIN</a></li>
			<li><a href="signout.php">SIGN OUT</a></li>';
		}
		print '
	</ul>';
?>