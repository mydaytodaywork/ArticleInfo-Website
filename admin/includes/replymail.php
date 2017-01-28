<?php
	$to = $email;
	$subject = "Reply From Data Compilation";
		
	$message = "
		<html>
		<head>
			<title> $subj </title>
		</head>
		<body>
		
		<p>Hi,<br/>
		$reply
		</p>
		
		Thanking You<br/>
		Kamal<br/>
		Founder,
		Data Compilation
		</body>
		</html>
	";
	
	// Always set content-type when sending HTML email
	$headers1 = "MIME-Version: 1.0" . "\r\n";
	$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers1 .= 'From: <kamal@iitmandi.esy.es>' . "\r\n";
	$headers1 .= 'Cc: '.$email . "\r\n";
	
	mail($to,$subject,$message,$headers1);	

?>