<?php

if (isset($_POST['sendBtn'])) {
    $fromEmail = $_POST['fromEmail'];
    $toEmail = $_POST['toEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' .phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$message.'<br/>
                    Regards<br/>
                  '.$fromEmail.'
				</div>
			</body>
			</html>';

    $result = mail($toEmail, $subject, $message, $headers);

    if ($result) {
        echo "<script>alert('Success')</script>";
    }
    else {
        echo "<script>alert('Failed')</script>";
    }

    // echo '<script>alert("Email sent successfully!")</script>';
    echo '<script>window.location.href="../contact.php";</script>';
}