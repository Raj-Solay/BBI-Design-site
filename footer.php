<?php
error_reporting(0);
$name = $_POST['your-name'];

if(isset($_POST['booktour']))
{

// Send Message to mailid
$from = 'email-smtp.us-west-2.amazonaws.com';

$to = 'p.chinna369@gmail.com';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$from.''. "\r\n" .
'Reply-To: '.$from.'' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$subject = "Contact Information";
$messagetomail = '<html>
<head>
<title>' . $subject . '</title>
</head>
<body>
<p style="text-align:left;">Hello Admin,<br><br><strong>Contact Information</strong><br>
<strong>Name : </strong>' . $name . '<br>

</p></body></html>';


if(mail($to, $subject, $messagetomail, $headers))
{
header('refresh:0;url=index');
echo '<script>alert("Thank you. Our Staff will contact you soon.")</script>';
}
else
{
header('refresh:0;url=index');
echo '<script>alert("Something went wrong. Please try again later")</script>';
}
}

?>

      <!--footer-area start-->
      <footer class="footer-area dark-blue-bg pt-70">
         <div class="container">
            <div class="row border-bottom pb-20">
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4  wow fadeInUp2 animated" data-wow-delay='.1s'>
                  <div class="footer__widget mb-30">
                     <div class="footer-log mb-30">
                        <a href="index" class="footer-logo"><img src="assets/img/logo/footer-logo1.png"
                           alt=""></a>
                     </div>
                     <p class="white-color">As a start-up franchising consultation company, Biz Bulls serves a range of products for budding entrepreneurs. We also promote franchisors offering great value to the brand.
                     </p>
                     <div class="footer_social mt-30">
                        <a style="color: #0676e8;" href="#">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i>
                        </a>
                        <a style="color: #1da1f2;" href="#">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-twitter"></i>
                        </a>
                        <a style="color: #ff0101;" href="#">
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-youtube"></i>
                        </a>
                        <a style="color: #0a66c2;" href="#">
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-linkedin"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1"></div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6  wow fadeInUp2 animated" data-wow-delay='.2s'>
                  <div class="footer__widget mb-30 pl-70">
                     <h4 class="semi-title mb-25 colorlight">Quick Links</h4>
                     <ul class="fot-list">
                        <li><a href="index" class="white-color">Home</a></li>
                        <li><a href="about" class="white-color">About</a></li>
                        <li><a href="services" class="white-color">Services</a></li>
                        <li><a href="portfolio" class="white-color">Portfolio</a></li>
                        <li><a href="contact" class="white-color">Contact</a></li>
                        <li><a href="termcondition" class="white-color">Terms and Conditions</a></li>
                        <li><a href="privacypolicy" class="white-color">Privacy Policy</a></li>
                     </ul>
                  </div>
               </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6  wow fadeInUp2 animated" data-wow-delay='.4s'>
                  <div class="footer__widget mb-30 pl-35">
                      <h4 class="semi-title mb-25 colorlight">Newsletters</h4>
                     <!--  <p class="mb-25">Perspiciatis unde omnis natus 
                          error sit voluptatem accus</p> -->
                      <div class="foter-subscribe">
                          <form class="subscribe-form" action="" method="post">
                              <input type="text" name="your-name" placeholder="Email Address">
                              <button class="theme_btn" type="submit" name="booktour" style="width: 100%; margin-top: 15px;">Subscribe</button>
                          </form>
                      </div>
                  </div>
                  </div>
               <!-- <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6  wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="footer__widget mb-25 pl-85">
                     <h4 class="semi-title mb-25 colorlight">Contact</h4>
                     <ul class="fot-list address-list">
                        <li><a href="#" class="white-color"><span><i class="far fa-map-marker-alt"></i></span> -------------------------------- </a></li>
                        <li><a href="#" class="white-color"><span><i class="far fa-envelope"></i></span> -------------------------------- </a></li>
                        <li><a href="#" class="white-color"><span><i class="far fa-phone-volume"></i></span> -------------------------------- </a></li>
                     </ul>
                  </div> -->
               </div>
            </div>
            <!-- <div class="copy-right-area pt-30">
               <div class="row align-items-center">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                       <div class="copyright mb-25 text-center">
                           <p>© 2021 Copyright, All Right Reserved, Design By <a href="#">BDevs</a></p>
                       </div>
                   </div>
               </div>
               </div> -->
         </div>
      </footer>
      <!--footer-area end-->
      <!-- Fullscreen search -->
      <div class="search-wrap">
         <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
               <form method="get">
                  <div class="search-field-holder">
                     <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- end fullscreen search -->
      <!-- JS here -->
      <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
      
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/jquery.meanmenu.min.js"></script>
      <script src="assets/js/metisMenu.min.js"></script>
      <script src="assets/js/jquery.nice-select.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/jquery.counterup.min.js"></script>
      <script src="assets/js/waypoints.min.js"></script>
      <script src="assets/js/jquery.scrollUp.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.easypiechart.js"></script>
      <script src="assets/js/jquery-ui.js"></script>
      <script src="assets/js/tilt.jquery.js"></script>
      <script src="assets/js/main.js"></script>
      <script>
         $(document).ready(function(){
         $(".navhoverMenu").mouseenter(function() {
                 $('.navbarmenuCls').addClass('cart-info');
             });
             $(".cart-menu-right").mouseleave(function() {
                 $('.cart-menu-right').removeClass('cart-info');
             });
         });
      </script>    
   </body>
</html>