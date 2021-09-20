<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>

	<!--Ad Sense-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <!-- Site Metas -->
	<title>Perak the guide - Contact Us</title>
	<meta name="keywords" content="Enquiry Contact Us ">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/subsection.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

  <link href="css/styleB.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Ads CSS -->
  <link rel="stylesheet" href="css/ads.css">
  <!-- Header and Footer CSS -->
  <link rel="stylesheet" href="css/header_footer.css">
  <!--Owl bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <!--Tab bootstrap-->


  <!-- Latest compiled and minified CSS -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<style>	 
	body,html {
    height: 100%;
}

* {
    box-sizing: border-box;
}

.bg-image {
    height: 30%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

@media screen and (max-width:768px) {
    .bg-image {
        margin-top: 0px;
    }
} 

.h{
font-size: 30px;
font-family: Arial, Helvetica, sans-serif;
font-weight:bold;
text-shadow: 2px 2px 5px black;
}

.htitile{
	font-size: 25px;
font-family: Arial, Helvetica, sans-serif;
font-weight:bold;
text-shadow: 2px 2px 5px black;

}

.h1{
	font-size: 35px;
font-family: Arial, Helvetica, sans-serif;
font-weight:bold;
color: black;
}
	
.card{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}  

.body{
	font-family: Arial, Helvetica, sans-serif;
}
	</style>
</head>

<body>
	<!--start header-->
<?php $page = 'contactus'; include_once('includes/header.php');?>
<!--end header-->

<div style="background-image: url(images/Banner/Contact.png)" class="bg-image"></div>

<br>

    
        <div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Enquiry</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form action="process1.php" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" name="Name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="tel" placeholder="Eg: 0131231231 or +901623478988" class="form-control" name="Phone" pattern='^\+?\d{0,13}'  required data-error="Please enter your contact">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
                                <input type="email" placeholder="Your email"  class="form-control" name="Email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control"  type="text" name="msg" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
                                    <button class="btn btn-success" name="btn-send">Send</button>
									
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9185901870746!2d101.59316791470455!3d3.1162383977308417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4ea1af0b4501%3A0x91b05b7a16f14b2e!2sBluedale%20Group%20Of%20Companies!5e0!3m2!1sen!2smy!4v1598093419689!5m2!1sen!2smy" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<br><br>
<!--start footer--> 
<?php include_once('includes/footer.php');?>
<!--end footer-->


	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: ''
				}
			]
		});	
	</script>
</body>
</html>