<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mix - Electronic Music Label: Contact</title>
<link href="css/mix.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://use.typekit.com/snd4bop.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>
<div id="wrapper">
<?php 
  include 'ssi/header-nav.html';
?>

<div id="content">
  <h1>Contact</h1>
      <?php $name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "stephen@stephentvedt.com";
	$subject = "Mix Label Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	?>
<h2 class="green">Thank you! Someone will respond to you shortly!</h2>
</div>


</div>
</body>
</html>



 