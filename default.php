<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if(isset($_POST['submit'])) {
$to = "v.louie91@gmail.com";
$subject = "DIY Dalek Feedback";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
//header('Location: confirmation.htm');
} else {
// handle the error somehow
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DIY Dalek - Exterminate! Enunciate! Procrastinate!</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="default.js"></script>
</head>
<body>
<div id="bg_overlay"></div>
<h1>DIY Dalek</h1>
<div id="container">
	<div id="left" class="module">
		Accessorize: <br />
		<img src="/img/accessories/bowtie01.png" />
		<img src="/img/accessories/fez01.png" />
		<img src="/img/accessories/3dglasses.png" />
	</div>
	<div id="center" class="module">
		Change Background Colour: <br />
		<button id="yellow" class="bgselect"></button>
		<button id="red" class="bgselect"></button>
		<button id="green" class="bgselect"></button>
		<button id="blue" class="bgselect"></button>
		<button id="white" class="bgselect"></button>
		<button id="default" class="bgselect"></button>
	</div>
	<div id="right" class="module">
		Pick a base: <br />
		<img class="daleks" src="/img/body/dalek01.png" />
		<img class="daleks" src="/img/body/dalek02.png" />
		<img class="daleks" src="/img/body/dalek03.png" />
		<img class="daleks" src="/img/body/dalek04.png" />
		<img class="daleks" src="/img/body/dalek05.png" />
	</div>
	<div id="bottom" class="module">
		Speech: <br />
		<img src="/img/speech/speech01.png" />
		<img src="/img/speech/speech02.png" />
		<img src="/img/speech/speech03.png" />
		<img src="/img/speech/speech04.png" />
		<img src="/img/speech/speech05.png" />
		<img src="/img/speech/speech06.png" />
		<img src="/img/speech/speech07.png" />
		<img src="/img/speech/speech08.png" />
	</div>
	<h1 id="contactHead">Copyright 2013 Victoria Louie - <button id="openContact">Contact</button></h1>
</div>
<div id="contact">
	<form id="contactform" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		<p>Name</p>
		<input name="name" type="text"> <br>
		<p>E-mail (Optional)</p>
		<input name="email" type="text">
		<br>
		<p>Comment</p>
		<textarea cols="30" name="comment" rows="9"></textarea>
		<br>
		<input id="sendbutton" name="submit" type="submit" value="Send!">
	</form>
	<p id="confirmation">Thank you for your feedback!</p>
	<button id="close">Close</button>
</div>
</body>
</html>