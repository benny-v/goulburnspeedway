<?php
// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){
	// put your email address here
	//$youremail = 'tk.kactus@bigpond.com';
  $youremail = 'leighgittoes@gmail.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Phone: $_POST[phone]
	Company: $_POST[company]
	State: $_POST[state]
	Message: $_POST[message]";
	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: Speedway Contact Form";
	}
	// finally, send the message
	mail($youremail, 'Speedway Contact Form', $body, $headers );
}
// otherwise, let the spammer think that they got their message through
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Gouburn Speedway">
	<meta name="author" content="Crash Bang Creative Web Design">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="shortcut icon" href="img/favicon.png">

    <title>Goulburn Speedway - Contact</title>

    <!-- Bootstrap core CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>

<body>



<!-- ================= content ================= -->

	<div class="container-fluid bg-black border-bot-orange">
		<h1 class="pad-left-15 white"><i>Thanks!</i></h1>
	</div><!-- container -->
<div class="container-fluid bg-ltgrey pad-top-20">
	<div class="row">

		<div class="col-xs-12 col-sm-8 col-md-8">
			<!-- ================= page content here ================= -->

			<h2>We'll get back to you as soon as possible.</h2>

		</div><!-- /.col -->

		<div class="col-xs-12 col-sm-8 col-md-4">

			<!-- ================= sidebar ================= -->
<?php include("sidebar2.php"); ?>

		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container -->
