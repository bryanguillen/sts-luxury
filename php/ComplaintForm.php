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
		<div class="container-fluid complaint-page-container">	
			<?php 
				$validMsg = True;
				$message = "";
				$to = "stsluxury@outlook.com";
				$subject = "Complaint Submission | STS Luxury";
				$data = array("name", "phone-number", "location", "complaint");

				if (strlen(trim($_POST["location"])) == 0 && strlen(trim($_POST["complaint"])) == 0) {
					$validMsg = False;
					echo "<div class=\"row\">
						<div class=\"col-sm-12 complaint-form-title\">
							<h1>Complaint Form</h1>
						</div>
						</div>
						<div class=\"row\">
							<div class=\"col-sm-6 col-sm-offset-3 full-height\">
								<p>YOU MUST FILL IN THE REQUIRED FIELDS (*)</p>	
								<form method=\"post\" action=\"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>\">
								<p>
									<label for=\"name\">Name:</label>							
								</p>
								<p>
									<input type=\"text\" name=\"name\" />
								</p>
								<p>
									<label for=\"phone-number\">Phone Number:</label>
								</p>
								<p>
									<input type=\"text\" name=\"phone-number\" />
								</p>
								<p>
									<label for=\"location\">Location:</label>
								</p>
								<p>
									<input type=\"text\" name=\"location\" required/>
								</p>
								<p>
									<label for=\"complaint\">Complaint:</label>
								</p>
								<p>
									<textarea name=\"complaint\" required></textarea>
								</p>
								<button type=\"submit\" class=\"complain-submit-button\">Submit</button>
							</form>
						</div>
					</div>";
				} else {
					for ($i = 0; $i<4; $i++) {
						$sumbittedFieldData = $data[$i];
						if (strlen(trim($_POST[$sumbittedFieldData])) > 0) {
							$message = $message . $sumbittedFieldData . ": " . $_POST[$sumbittedFieldData] . " \r\n"; 
							} 
						} 
		
						mail("bguillen95@gmail.com", $subject, $message);
						echo "<div class=\"row\">
								<div class=\"col-sm-12 full-height\" style=\"text-align: center;\">
									<h1>Your complaint has sent!</h1>
									<p>We shall respond in 1 - 2 business days!</p>
								</div>
							</div>";
				}
			?>				
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