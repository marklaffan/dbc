
<!DOCTYPE html>
<html>
<head>
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-51510222-1', 'drumcondrabusinesscentre.com');
	  ga('send', 'pageview');



	</script>
	
	<!-- If you want your bootstrap styled website to be responsive on mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Drumcondra Business Centre</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

</head>
<body>

<?php
// define variables and set to empty values

$firstnameErr = $numberErr = $emailErr = "";
$firstname = $lastname = $company = $number = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
  	$firstnameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["lastname"])) {
  	$lastname = "";
  } else {
  	$lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["company"])) {
  	$company = "";
  } else {
  	$company = test_input($_POST["company"]);
  }

  if (empty($_POST["number"])) {
  	$numberErr = "Number is required";
  } else {
  	$number = test_input($_POST["number"]);
  }

  if (empty($_POST["email"])) {
  	$emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
  	$comment = "";
  } else {
  	$comment = test_input($_POST["comment"]);
  }

  	$to = "marklaffan4@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $comment = $firstname . " " . $lastname . " wrote the following:" . "\n\n" . $_POST['comment'];
    $comment2 = "Here is a copy of your comment " . $firstname . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$comment,$headers);
    mail($from,$subject2,$comment2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $firstname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<!-- SHORTCUTS ctrl and click to make several changes at once ie...
  this
  this
  this 

  ALSO if you press ctrl + right arrow key you can move multiple cursors left and right -->

<!-- SHORTCUTS in Sublime you can type tag name without <> and press tab to auto complete -->

	<div class="header-jumbo">
	  <div class="header">

	  	<nav class="navbar navbar-expand-md navbar-light" style="background-color: #0071bc;">
	  		<div class="nav-left">
	  			<ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	<a class="navbar-brand" href="#">
					    <img id="logo" src="images/logo.svg" height="auto" width="100%" alt="Drumbcondra Business Centre">
					  </a>
					</li>
				</ul>
	  		</div>
			  

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <img src="images/burger.png" />
			  </button>
			  <div class="nav-right">
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">	
				    <ul class="nav">
				      <li class="nav-item">
				        <a class="nav-link active" href="#locate">Location</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#contact">Contact</a>
				      </li>
				    </ul>
				  </div>
			  </div>
				
			</nav>
		</div>

	  <div class="jumbo">
	  		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    	
							  <div class="carousel-caption d-none d-md-block head">
							  	<p>Welcome to the</p>
							    <h1>Drumcondra Business Centre</h1>
								  <p><strong>Modern offices to let in the heart of Dublin</strong></p>
								  <p class="lead">
								    <a class="btn btn-info btn-lg" href="#contact" role="button">Enquire Now</a>
								  </p>
							  </div>
							
				      <img class="d-block w-100" src="images/jumbotron-dbc.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">

				    	<div class="carousel-caption d-none d-md-block head" style="background-color: rgb(0, 0, 0, 0.5);">
							    <h1>Drumcondra Business Centre</h1>
							    <p>Drumcondra Business Centre offers quality professional office space in a highly motivated business enviroment.</p>
							    <p class="lead">
								    <a class="btn btn-info btn-lg" href="#contact" role="button">Enquire Now</a>
								  </p>
							  </div>
				      <img class="d-block w-100" src="images/jumbotron-interior.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">

				    	<div class="carousel-caption d-none d-md-block head" style="background-color: rgb(0, 0, 0, 0.5);">
							    <h1>Drumcondra Business Centre</h1>
							    <p>With excellent facilities and in a location 5 minutes from Dublin City Centre, you can focus on running your business to its full capacity.</p>
							    <p class="lead">
								    <a class="btn btn-info btn-lg" href="#contact" role="button">Enquire Now</a>
								  </p>
							  </div>
				      <img class="d-block w-100" src="images/jumbotron-exterior.jpg" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
	  </div>
	</div>

	<div class="content">
	  <div class="content-left">
	  	<h2>Prime City Location</h2>
	    <div class="content-text">
	    	
	    	<p>Fully managed office space in two elegent, victorian buildings with 24 hour monitered security in a prime Dublin City location.</p>
	    </div>
	    <div class="content-img">
	    	<img class="interior-imgs" src="images/interior-left.jpg" >
	    </div>
	  </div>
	  <div class="content-right">
	  	<h2>Private Offices</h2>
	    <div class="content-text">
	    	
	    	<p>Spacious, fully furnished offices with excellent facilities. A perfect business hub for small to medium businesses or start-ups.</p>
	    </div>
	    <div class="content-img">
	    	<img class="interior-imgs" src="images/interior-right.jpg">
	    </div>
	  </div>
	</div>
	<div class="content-button">
		<p class="lead">
	    <a class="btn btn-info btn-lg" href="#contact" role="button">Enquire Now</a>
	  </p>
	</div>

	<div class="location" style="text-align: center;">
		<h3><a name="locate">WHERE TO FIND US</a></h3>
		<p style="text-align: center;">The property is situated in an established area with shops, colleges and recreational facilities in the locality.</p>
		
		<iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.359180405333!2d-6.254245684677176!3d53.372622580444535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e695c10ce77%3A0x850975e6b8481c15!2sDrumcondra+Business+Centre%2C+Drumcondra+Rd+Upper%2C+Drumcondra%2C+Dublin+9!5e0!3m2!1sen!2sie!4v1523340965441" frameborder="0" allowfullscreen></iframe>

	</br></br>

		<p style="text-align: center;">On one of the cities Quality Bus Corridor's (QBC), we enjoy easy access to the IFSC, East Point Business Park, Dublin Airport and the M1 & M50 motorways. 
		</p>
		<p><b>Address:</b><br> 
			118/120 Upper Drumcondra Rd,<br> 
			Drumcondra, Dublin 9<br>
			<b>Ph:</b>  01 837 6871/ 01 836 0574<br>
			<b>Mob:</b> 087 243 7631 / 086 258 3834<br>
			<b>Email:</b> info@dbc.com
		</p>
	</div>

	<div class="contact">
		<h3><a name="contact">GET IN TOUCH</a></h3>
		<p style="text-align: center;">For all enquiries regarding lettings, viewings or availability, fill out the form below.<br>
		We aim to reply to all emails within 24 hours.
		</p>
		<form name="myForm" id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
			<!-- action="#contact" -->
		  <label for="name">Name <span style="color: red;"></span></label>
		  <span style="color: red;"><?php echo $firstnameErr;?></span>
		  <input type="text" id="fname" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>">
		  <input type="text" id="lname" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">

		  <label for="company">Company</label>
		  <input type="text" id="company" name="company" value="<?php echo $company;?>">

		  <label for="number">Contact Number <span style="color: red;">*</span></label>
		  <span style="color: red;"><?php echo $numberErr;?></span>
		  <input type="text" id="number" name="number" value="<?php echo $number;?>">

		  <label for="email">Email <span style="color: red;">*</span></label>
		  <span style="color: red;"><?php echo $emailErr;?></span>
		  <input type="text" id="email" name="email" value="<?php echo $email;?>">
		  
		  <label for="comment">Your Message</label>
		  <textarea name="comment" placeholder="Don't be shy..."><?php echo $comment;?></textarea>

		  <input type="submit" value="Submit">
		</form>
	</div>
	
	<footer>
		<div class="foot-left">
			<p>Built by Websited</p>
		</div>
		<div class="foot-right">
			<img src="images/linkedIn.svg" width="45px" height="45px" alt="Connect with us on linkedIn">
		</div>
		
		
	</footer>

<script type="text/javascript" src="assets/js/dbc.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	
</body>


</html>