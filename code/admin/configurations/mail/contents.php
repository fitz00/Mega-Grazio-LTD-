<?php
// start session
session_start();
?>
<?php require "configurations/validation.php";?>
<html>
	<head>
		<link rel="shortcut icon" href="cash.exchange.jpg" type="image/x-icon">
		<link rel='stylesheet' href='../assets/w3/w3_v4.css' type='text/css' media='screen'>
		<link rel='stylesheet' href='../assets/libs/fitz_theme.css'>
	</head>
	<body>
		
		<section class='fitz-container' style='margin-top:20px'>
			Hey <? echo $firstname?>,
			
			<br><br><br>
			
			You're seeing this email because you registered for a DreamCash account!<br><br>
			
			Username is <? echo $username?> <br><br>
			
			<p align='center'>Yes! You're almost there.</p>
			
			<p style='background-color:lightgrey;height:30px;line-height:45px;border-radius:2px' align='center'>
				<a href='http://localhost/docs/dreamcash/verify'> Confirm your email address here </a> before you <a href='http://localhost/docs/dreamcash/login'> Login </a>.
			</p>
			
			<br>
			If you have forgitten your password, please <a href='http://localhost/docs/dreamcash/forgot_pass'> recover your password here </a>.
			
			
			<p style='margin-top:20px'> - Regards <b> DreamCash </b></p>
			
			<br>
			
			<p style='float:right'> Thank You! </p>
			<br>
		</section>
		
	</body>
</html>