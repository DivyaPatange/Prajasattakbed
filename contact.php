<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="icon" href="img/icon/logo.png" type="image/png">
        <title>Prajasattak College</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php include('includes/header.php') ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contact Us</h2>
						<div class="banner_link">
							<a href="index.php" class="text-white pr-1">Home</a><i class="fa fa-arrow-right text-white"></i>
							<a href="contact.php" class="text-white">Contact</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <div class="container p_50">
            <div class="col-md-12 col-sm-12">
                <div id="mapBox" class="mapBox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.022463914628!2d79.15005851440937!3d21.15150428895366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c70afce61439%3A0xe9c7158311966566!2sPrajasattak%20Ded%20College!5e0!3m2!1sen!2sin!4v1569589806664!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0 ;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <section class="contact_area p_50">
            <div class="container">
                <!--<div id="mapBox" class="mapBox" -->
                <!--    data-lat="40.701083" -->
                <!--    data-lon="-74.1522848" -->
                <!--    data-zoom="13" -->
                <!--    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."-->
                <!--    data-mlat="40.701083"-->
                <!--    data-mlon="-74.1522848">-->
                <!--</div>-->
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="fa fa-home"></i>
                                <h6>Dr. Bhimrao Gote</h6>
                                <p class="text-justify pr-2">Prajasattak college of education, old pardi naka,
                                royal complex, Bhandara road, Pardi, Nagpur 440035.</p>
                            </div>
                            <div class="info_item">
                                <i class="fa fa-phone"></i>
                                <p><a href="#"><b class="text-dark">9423408757</a></b></p>
                                <p><a href="#"><b class="text-dark">9360035294</a></b></p>
                                <p><a href="#"><b class="text-dark">9423409276</a></b></p>
                            
                            </div>
                            <div class="info_item">
                                <i class="fa fa-envelope"></i>
                                <h6><a href="#">sheetalmesh77@gmail.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                        <form class="contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
        <?php include('includes/footer.php') ?>
		<!--================ End footer Area  =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>