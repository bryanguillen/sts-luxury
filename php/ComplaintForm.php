<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Submission Success | STS Luxury</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<?php 
		$message = "";
		$to = "stsluxury@outlook.com";
		$subject = "Complaint Submission | STS Luxury";
		$data = array("name", "phone-number", "location", "complaint");

		for ($i = 0; $i<4; $i++) {
			$sumbittedFieldData = $data[$i];
			if (strlen(trim($_POST[$sumbittedFieldData])) > 0) {
				$message = $message . $sumbittedFieldData . ": " . $_POST[$sumbittedFieldData] . " \r\n"; 
			} 
		} 
		
		mail($to, $subject, $message);
	?>

	<nav class="navbar navbar-default unauthenticated-navbar">
		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a href="index.html"><img src="images/sts-brand.png" class="logo"></a>
      			<span class="call-tag">Call 777-777-7777</span>
    		</div>

    		<div class="collapse navbar-collapse unauthenticated-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav navbar-right unauthenticated-nav-list"><!-- all static pgs except the home page -->
        			<li class="mobile-white"><a href="index.html">Home</a></li>
        			<li class="mobile-white"><a href="about.html">About</a></li>
        			<li class="mobile-white"><a href="contact.html">Contact</a></li>
      				<li class="mobile-white"><a href="complaint.html">Complaint</a></li>

      			</ul>
    		</div>
  		</div>
	</nav>
	
	<main>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<p>Thank you for your submission!</p>
					<p>We value your business, and because of that, you will hear from us within 1-2 business days.</p>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container-fluid footer">
			<div class="row">
				<div class="col-xs-6 footer-logo-container">
					<a href="index.html"><img src="images/sts-brand.png" class="logo"></a>
				</div>
				<div class="col-xs-6 footer-links">
						<a href="index.html">Home</a>
						<span>|</span>
        				<a href="about.html">About</a>
						<span>|</span>
        				<a href="contact.html">Contact</a>
        				<span>|</span>
        				<a href="complaint.html">Complaint</a>
						<div class="copyright"><span>&copy; STS Luxury Inc 2017</span></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>