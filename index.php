<?php
	$viewInfo = $_GET['viewInfo'];
	if ($viewInfo == '1') {
		phpinfo();
	} else {
		?>
		<html>
			<head>
				<title>Test Page</title>
					<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
			</head>
			<body>
				<h2>Welcome!</h2>
					<p>This page was generated by KSWEB web package! </p>
					<p>Use KSWEB menu item "Tools" to configure the entrance to KSWEB Web Interface. Default login data:</a> <b>login</b> and <b>password</b> are both "admin" by default.</p>
					<p>We strongly recommend to change the password for security reasons!</p>
					<p>Thank you for using our product. We are welcome your suggestions and comments. Mail to us: <a href = 'mailto:dkcocto@gmail.com'>dkcocto@gmail.com</a> </p>
					<p>We have a website: <a href = 'http://www.kslabs.ru/'>http://www.kslabs.ru/</a></p>
						<a href = 'index.php?viewInfo=1'>Click</a> to view PHP info.
			</body>
		</html>
		<?php
	}
?>