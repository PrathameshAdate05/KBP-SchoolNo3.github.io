

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Contact</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 



	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo1.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="facilities.html">FAcilities</a></li>
                        <li class="nav-item"><a class="nav-link" href="admission.html">Admission</a></li>

						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">Blog </a>
								<a class="dropdown-item" href="blog-single.html">Blog single </a>
							</div>
						</li> -->
						<li class="nav-item"><a class="nav-link" href="teachers.html">Teachers</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> -->
						<li class="nav-item active"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                    </ul> -->
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact</h1>
		</div>
	</div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
            <?php
                 if(isset($_POST['submit'])){
                    // include ('config.php');
                    $fname = $_POST['first_name'];
                    $laname = $_POST['last_name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $msg = $_POST['msg'];
                    $to_email = "prathameshadate9@gmail.com";
                    $subject = "Message from $fname $laname";
                    $body = "Phone :$phone  Email :$email  Message :$msg";
                    $headers = "From: karmveerbhauraopatil123@gmail.com";

                    if (mail($to_email, $subject, $body, $headers)) {

                        $result="Thamk you";
                        echo "<script type='text/JavaScript'>
                            alert('We got your responce $fname $laname Thank you...');
                            window.location.href='contact.php';
                            </script>";
                            

                        

                    } else {
                        echo '<script>alert("Something get wrong try again..!!")</script>';
                    }
                 }
                ?>
                <h3>Send Your Quires here</h3>
                <p class="lead"> We will try to resolve your problems</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-7 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" action="" name="contactform" method="post">
                            <!-- class="" action="contact.php" name="contactform" method="post" -->
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" name="submit"  id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				<!-- <div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
					</div>
				</div> -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p class="text-justify"> </p>   
                        <div class="footer-right">
							<ul class="footer-links-soi">
								<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="facilities.html">Facilities</a></li>
							<li><a href="teachers.html">Teachers</a></li>
							<li><a href="contact.html">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">Email - meenapatkulkar@gmail.com</a></li>

                            <li>Address - Manmath mandir shejari shala no. 3, vita dist. Sangli tal. Khanapur</li>
                            <li>Contact To - +918411005447</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->



    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script> -->
	<!-- Mapsed JavaScript -->
	<!-- <script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script> -->
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script> -->

    <!-- <script>

        function sendmail(){
            var fname = $('#first_name').val();
            var lname = $('#last_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var msg = $('#msg').val();

            var body = "Name :"+fname+" "+lname+"<br>Email :"+email+"<br>Phone :"+phone+"<br> Message :"+msg;

        }
        Email.send({
        Host : "smtp.gmail.com",
        Username : "karmveerbhauraopatil123@gmail.com",
        Password : "karmveer@123",
        To : 'prathameshadate9@gmail.com',
        From : "karmveerbhauraopatil123@gmail.com",
        Subject : "Reply from website",
        Body : ""
    }).then(
    message => {
        if(message=="OK"){
            alert("Thank You for your reply we will contact you..")
        }
        else{
            alert("Check Your connection and try again..!!")
        }
    }
);
    </script> -->
 

</body>
</html> 