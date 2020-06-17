<?php

	//session_start();

	$con = mysqli_connect('localhost','root');
	if($con){
		echo'Connected';
	}
	else{
		echo'not Connected';
	}


	mysqli_select_db($con, 'tours');

	$uname = $_POST['username'];
	$place = $_POST['place'];
	$person = $_POST['number'];
    
    $q= "INSERT INTO book(uname, place, person) values('$uname', '$place', '$person') ";

    $res = mysqli_query($con, $q);







	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'tourism.phdc3@gmail.com';                 // SMTP username
	$mail->Password = 'Tourism@phd';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('tourism.phdc3@gmail.com', 'Tourism');
	$mail->addAddress($_POST['email']);     // Add a recipient
	              // Name is optional
	$mail->addReplyTo('tourism.phdc3@gmail.com');
	

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Booking In Tourism Online Website';
	$mail->Body    = '<b>You have successfully booked in Tourism----!!!</b>';
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$mail->send();
	  //  echo 'Message could not be sent.';
	    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	//} else {
	    header('location:Home.php');
	
?>