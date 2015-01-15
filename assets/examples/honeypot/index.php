<html>
<head>
<title>Honey pot test</title>
<!-- This example and tutorial can be found at http://devgrow.com/simple-php-honey-pot -->
<style>
	/* Optional Styling: */
	body { background: #fafafa; font-size: 13px; font-family: Verdana; padding: 40px; }
	fieldset { width: 280px; background: #fff; padding: 10px; display: block; }
	legend { font-size: 18px; margin: 0; }
	input, textarea { margin: 0; padding: 3px; border: 1px solid #aaa; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 278px }
	label { width: 100%; font-weight: bold; float: left; }
	.submit { background: #444; color: #fff; width: inherit; border: none; padding: 5 10px; cursor: pointer; } .submit:hover { background: #000; }
	.msg { padding: 10px; border: 1px solid #ccc; background: #fff; width: 285px; margin: 0 0 20px; }
	.msg.success { border-color: #86a62f; background: #faffec; }
	.msg.error { border-color: #cd5a5a; background: #fff7f7; }
	
	/* Required for Honey Pot: */
	.robotic { display: none; }
</style>
<script type="text/javascript">
	function showpot() {
		document.getElementById("pot").className = "";
		return false;
	}
</script>
<meta name="description" content="Tutorial on how to set up a simple Honeypot." />
<meta name="keywords" content="HTML tutorials, CSS resources, tips and tricks, honeypot, PHP, HTML" />

</head>
<body>
<?php
	if($_POST){
		$to = 'your-email-here@gmail.com';
		$subject = 'Contact Form Submission';
		$from_name = $_POST['name'];
		$from_email = $_POST['email'];
		$message = $_POST['message'];
		$robotest = $_POST['robotest'];
		if($robotest)
			$error = "You are a gutless robot.";
		else{
			if($from_name && $from_email && $message){
				$header = "From: $from_name <$from_email>";
				if(mail($to, $subject, $message, $header))
					$success = "You are human and your message was sent!";
				else
					$error = "You are human but there was a problem sending the e-mail.";
			}else
				$error = "All fields are required.";
		}
		if($error)
			echo '<div class="msg error">'.$error.'</div>';
		elseif($success)
			echo '<div class="msg success">'.$success.'</div>';
	}
?>
<form method="post" action="">
	<fieldset>
		<legend>Contact Me</legend>
		<p>
			<label>Name:</label>
			<input name="name" type="text" id="name" />
		</p>
		<p>
			<label>E-mail:</label>
			<input name="email" type="text" id="email" />
		</p>
		<p>
			<label>Message:</label>
			<textarea name="message" id="message"></textarea>
		</p>
		<!-- The following field is for robots only, invisible to humans: -->
		<p class="robotic" id="pot">
			<label>If you're human leave this blank:</label>
			<input name="robotest" type="text" id="robotest" class="robotest" />
		</p>
		<p>
			<input type="submit" value="Send Message" class="submit" />
		</p>
	</fieldset>
</form>
<br />
<a href="#" onclick="showpot();">Show honey pot field?</a><br />
<a href="http://devgrow.com/simple-php-honey-pot/">View Tutorial</a>
</body>
</html>
