<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Taoran Resources</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="project.php">Projects</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>contact us</h2>
                            <p>Home<span>//</span>contact us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: 7.135842, lng: 3.336057};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 7.135842, lng: 3.336057},
              zoom: 17,
             // styles: blue,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpOkAVc_xCHH32afrDvxkrwGAFBsDc1Es&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>5A, Lalubu Road Oke-Ilewo.</h3>
              <p>Abeokuta, Ogun State</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 8am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>info@taoranresources.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

 <!-- footer part start-->
 <footer class="footer-area ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="index.php"> <img src="img/footer_logo.png" alt=""> </a>
                    <p>Established in 2006 as a business name but grown to a limited company in 2012, due to the growth and success, The company has been able to Identify, develop and fine-tuned a successful  business synergy  </p>
                  </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="https://facebook.com/taoranresources"> <i class="ti-facebook"></i> </a>
                        <a href="https://twitter.com/taoranresources"> <i class="ti-twitter-alt"></i> </a>
                        <a href="https://instagram.com/taoranresources"> <i class="ti-instagram"></i> </a>
                        <a href="https://skype.com/taoranresources"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-xl-3">
                <div class="single-footer-widget footer_3">
                    <h4>Instagram</h4>
                    <div class="footer_img">
                        <div class="single_footer_img">
                            <img src="img/footer_img/footer_img_1.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="img/footer_img/footer_img_2.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="img/footer_img/footer_img_3.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="img/footer_img/footer_img_4.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="img/footer_img/footer_img_5.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="img/footer_img/footer_img_6.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://complanettechnologies.com.ng" target="_blank">Complanet Technologies</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/swiper.min.js"></script>
<!-- swiper js -->
<script src="js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel2.thumbs.min.js"></script>
<!-- particles js -->
<script src="js/contact.js"></script>
<!-- ajaxchimp js -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<!-- validate js -->
<script src="js/jquery.validate.min.js"></script>
<!-- form js -->
<script src="js/jquery.form.js"></script>
<!-- swiper js -->
<script src="js/slick.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>

</html>