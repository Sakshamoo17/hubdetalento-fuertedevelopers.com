<?php
	if(isset($_POST['Subscribe'])){
        $email=$_POST['mail'];
        
		$to='info@fuertedevelopers.com'; 
		$subject='Form Submission';
		$headers="From: ".$email;

		if(mail($to, $subject, $headers)){
			echo "<h1>Sent Successfully! Thank you , We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>