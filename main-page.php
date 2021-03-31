<?php
include("db-connection.php");

session_start();
$email  = "fff";

if(!$_SESSION['email'])
{
 header("location: index.php");
}
else{ $email = $_SESSION['email']; 
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Falcon - Workshop</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logonew.JPG" type="image/x-icon" />
    <link rel="apple-touch-icon" href="logonew.JPG">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="bootstrap.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('images/banner2.jpg')">
		<div class="heading">
			<h1>Falcon Workshop</h1>			
			<h3 class="cd-headline clip is-full-width">
			
				<div class="btn-ber">
					<a class="learn_btn hvr-bounce-to-top" href="store-add.php">Add Item</a>
					<span>&nbsp;&nbsp;</span>
					<a class="learn_btn hvr-bounce-to-top" href="store-view.php">View Item</a>
				</div>
			</h3>
		</div>
	</section>
	</div>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
    
                    <p class="footer-company-name"><a href="#"></a> Design & Developed By : 
					<a href="https://infusiblecoder.com/">Infusible Coders</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>