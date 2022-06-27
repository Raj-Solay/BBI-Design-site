<?php

error_reporting(0);
include ('config.php');


if (isset($_POST['submitinsert']))
{
    $name = $_POST['name'];
    $emails = $_POST['emails'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $sql = "insert into contact(name,email,phone,service,message) values('$name','$emails','$phone','$service','$message')";

    if (mysqli_query($con, $sql)) {
        echo '<script>alert("Your Request has been saved successfully")</script>';
    } else {
         echo "Error inserting record: " . $con->error;
    }
    header('refresh:0;url=index');  
}
?>
<?php include_once('header.php'); ?>
      <main>
         <!--hero-area start-->
         <div class="hero-area pos-rel">
            <div class="slider-active">
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider1.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">Still dreaming to <br> become a successful business man…?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">Why dreaming…. Make it to reality through BIZ BULLS Franchising <br> projects, from multiple industries</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider2.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">9 to 6 job <br> or your own BOSS…? </h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">Break the traditional rules coz BIZ BULLS is here to build your business <br> & make you a successful BOSS</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider3.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">Own Business or Franchisee…?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">If you don’t want to risk your money, time and relations, go for a Franchisee… <br> Coz it’s a readymade business, to be served with sure success</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider1.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">Want to start a <br> business but no huge investment…?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">Why worry… start from as low as Rs. 10,000/- remaining  can be <br> sourced by banks through our project reports</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider2.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">Family & friends are pulling <br> you back from business, fearing of LOSS..?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">BIZ BULLS franchisee system has beautiful & successful marketing <br> network, that will never let you down</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider3.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">Don’t have any knowledge <br> or training about any business..?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">Don’t worry… our support team is always there to help you through proper guidance, training, <br> marketing & Licensing a ready-made business for a hassle free success</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider1.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">Am I eligible to <br> start my own business…?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">If you have 30+ age, responsible and passion <br> in business…. YES, You’re</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider2.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">What is a Franchisee…? </h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">A ready-made business that gives you complete training, endless support, massive <br> business network & huge success to start your own business</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-slider">
                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/slider/slider3.jpg);">
                     <div class="container">
                        <div class="row d-flex align-items-center">
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="hero__content pt-150 text-center">
                                 <h1 class="main-title mb-40" data-animation="fadeInUp2" data-delay=".2s">How to be a BULL of BIZ (business)…?</h1>
                                 <span class="sub-title mb-25" data-animation="fadeInUp2" data-delay=".1s">Simple… take a franchisee of a successful brand… implement, what you have <br> trained… the rest, brand will take care…</span>
                                 <ul class="btn-list mt-35" data-animation="fadeInUp2" data-delay=".4s">
                                    <li>
                                       <a href="register" class="theme_btn">
                                          Register
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--hero-area end-->
         <!--gallery-area start-->
         <section class="gallery-area dark-blue-bg filter-wrapper pt-100 pb-50">
            <div class="container">
               <div class="row align-items-center mb-45">
                  <div class="col-xl-6">
                     <div class="section-title text-left mb-30">
                        <!-- <h6 class="mb-20">Portfolio</h6> -->
                        <h3>Our Portfolio!</h3>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="portfolio-btn-area text-start text-lg-end">
                        <div class="main-menu portfoliomenu">
                           <nav>
                              <ul>
                                 <li style="background-color: transparent; border: none;">
                                    <a class="active" href="#" style="font-size: 20px;">Select Industry <i class="far fa-chevron-down" style="padding-left: 10px;"></i></a>
                                    <ul class="submenu" style="padding: 10px 0; width: 200px;">
                                       <li style="margin: 0; background-color: transparent; border: none;"><a href="#" style="font-size: 18px; padding: 10px 20px; color: #000 !important;">Food & Beverages</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row grid">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat2">
                     <div class="gallery pos-rel mb-30">
                        <div class="gallery__thumb">
                           <img src="assets/img/gallery/03.jpg" alt="">
                        </div>
                        <div class="gallery__content text-center">
                           <div class="gallery-inner">
                              <p class="pb-50">It’s a franchising company, limited to only one per district in entire India, the main objective is to offer various types of franchisees in the concerned districts</p>
                              <!-- <br><br><br> -->
                              <h4 class="gal-title mb-10"><a href="#" class="colorlight">BIZ BULLS INDIA</a></h4>
                              <button class="theme_btn" onclick="location.href='portfolio'">Register</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat1">
                     <div class="gallery pos-rel mb-30">
                        <div class="gallery__thumb">
                           <img src="assets/img/gallery/01.jpg" alt="">
                        </div>
                        <div class="gallery__content text-center">
                           <div class="gallery-inner">
                              <p class="pb-50">This is a concept of cloud kitchens delivering a particular set of delicious food items, by taking bulk orders from various stores or outlets</p>
                              <!-- <br><br><br> -->
                              <h4 class="gal-title mb-10"><a href="#" class="colorlight">UNCLE KITCHENS</a></h4>
                              <button class="theme_btn" onclick="location.href='portfolio'">Register</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat1">
                     <div class="gallery pos-rel mb-30">
                        <div class="gallery__thumb">
                           <img src="assets/img/gallery/02.jpg" alt="">
                        </div>
                        <div class="gallery__content text-center">
                           <div class="gallery-inner">
                              <p class="pb-50">A brand that offers worldwide varieties of bakery food products with a high class quality and convenient availability, even in rural India</p>
                              <!-- <br><br><br> -->
                              <h4 class="gal-title mb-10"><a href="#" class="colorlight">FREAKY BAKES</a></h4>
                              <button class="theme_btn" onclick="location.href='portfolio'">Register</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat1">
                     <div class="gallery pos-rel mb-30">
                        <div class="gallery__thumb">
                           <img src="assets/img/gallery/p1.jpg" alt="">
                        </div>
                        <div class="gallery__content text-center">
                           <div class="gallery-inner">
                              <p class="pb-50">A brand that is well known for any beginning or any auspicious occasion. It’s also reputed for a wide range of area-specific sweets, as a SHAGUN</p>
                              <!-- <br><br><br> -->
                              <h4 class="gal-title mb-10"><a href="#" class="colorlight">SHAHI SHAGUN</a></h4>
                              <button class="theme_btn" onclick="location.href='portfolio'">Register</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat1">
                     <div class="gallery pos-rel mb-30">
                        <div class="gallery__thumb">
                           <img src="assets/img/gallery/p2.jpg" alt="">
                        </div>
                        <div class="gallery__content text-center">
                           <div class="gallery-inner">
                              <p class="pb-50">A chilling affection, caring love and a beautiful time of a couple or a family, best derives this brand. Quality un-comparable and bundle of items for suitable for any ages</p>
                              <!-- <br><br><br> -->
                              <h4 class="gal-title mb-10"><a href="#" class="colorlight">ICY DOVES</a></h4>
                              <button class="theme_btn" onclick="location.href='portfolio'">Register</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat1">
                     <div class="gallery pos-rel mb-30">
                        <div class="gallery__thumb">
                           <img src="assets/img/gallery/p3.jpg" alt="">
                        </div>
                        <div class="gallery__content text-center">
                           <div class="gallery-inner">
                              <p class="pb-50">A place that always wish for your success and invite you to spend your moments with friends and family, leisurely. Food with theme fun & entertainment.</p>
                              <!-- <br><br><br> -->
                              <h4 class="gal-title mb-10"><a href="#" class="colorlight">TREAT MORE</a></h4>
                              <button class="theme_btn" onclick="location.href='portfolio'">Register</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--gallery-area end-->
         <!--features-area start-->
         <section class="features-area dark-blue-bg pt-50 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="section-title text-center mb-80">
                        <!-- <h6 class="mb-20">Our Experience</h6> -->
                        <h3>Expertise matters a lot</h3>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-skill-wrapper mb-40 text-center text-md-start">
                        <div class="single-skill-box">
                           <div class="single-skill mb-50">
                              <!-- <div class="chart1" data-percent="73" data-scale-color="#ffb400">
                                 <span><b>85</b>%</span>
                                 </div> -->
                              <img src="assets/img/icon/5.png" width="30%">
                           </div>
                           <div class="single-skill-text">
                              <h3 class="mb-15">Guidance</h3>
                              <p>Our experienced counseling team is well trained to analyze your capabilities and requirements to provide you a best solution, which matches your pockets and dreams
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-skill-wrapper mb-40 text-center text-md-start">
                        <div class="single-skill-box">
                           <div class="single-skill mb-50">
                              <!-- <div class="chart1" data-percent="73" data-scale-color="#ffb400">
                                 <span><b>85</b>%</span>
                                 </div> -->
                              <img src="assets/img/icon/1.png" width="30%">
                           </div>
                           <div class="single-skill-text">
                              <h3 class="mb-15">Branding</h3>
                              <p>We promote Franchisors, giving utmost value to their brand and formulate innovative methods to approach budding entrepreneurs and expand their business as per the requirement
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-skill-wrapper mb-40 text-center text-md-start">
                        <div class="single-skill-box">
                           <div class="single-skill mb-50">
                              <img src="assets/img/icon/2.png" width="30%">
                           </div>
                           <div class="single-skill-text">
                              <h3 class="mb-15">Licensing</h3>
                              <p>We have a professional expert team to identify the right aspirants, train them; process various licenses required, to run the business and Recruiting genuine franchisees for tie-up & Licensing
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-skill-wrapper mb-40 text-center text-md-start">
                        <div class="single-skill-box">
                           <div class="single-skill mb-50">
                              <img src="assets/img/icon/3.png" width="30%">
                           </div>
                           <div class="single-skill-text">
                              <h3 class="mb-15">Facility Arrangement</h3>
                              <p>Third party (of Franchisor) vendor management for interior set-up, training , equipment & security monitoring; to match the Franchisor standards, within the budget assigned
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-skill-wrapper mb-40 text-center text-md-start">
                        <div class="single-skill-box">
                           <div class="single-skill mb-50">
                              <img src="assets/img/icon/4.png" width="30%">
                           </div>
                           <div class="single-skill-text">
                              <h3 class="mb-15">Support</h3>
                              <p>We have the best & biggest customer support network in India, having at least one office in each district, for the process and support of franchises with average query resolution time of 2 to 3 hours
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--features-area end-->
       
         <!--about-area start-->
         <section class="about-area pt-60 pb-50 dark-blue-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="section-title text-center mb-80">
                        <h3>Our service always wins the hearts</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5">
                     <div class="about_wrapper wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="section-title text-start mb-20">
                           <h3 class="mb-20 colorlight">Franchisor <span style="font-size: 25px;">(Company)</span></h3>
                           <p>For the franchisors, we make striving efforts to offer promising results. We make sure that your business reaches the enthusiastic franchisees in the best way, and that's our responsibility. We hold franchisors' hands from the beginning to the finish of the contracting procedure.
                           </p>
                        </div>
                        <h4 class="ser-text"> -- Benefits to Franchisors</h4>
                        <ul class="services_text_list mb-45">
                           <li class="white-color">Place & promote brand for marketing material & social portals </li>
                           <li class="white-color">Find genuine franchises for tie-up & licensing</li>
                           <li class="white-color">Processing all licensing & vendor management</li>
                           <li class="white-color">Expanding of franchise network</li>
                           <li class="white-color">Conducting brand awareness programs</li>
                           <li class="white-color">Offering complete franchisor support</li>
                        </ul>
                        <a href="services" class="theme_btn mt-35 martop">
                           Read More 
                           <div class="icon_box">
                              <span><i class="far fa-arrow-right"></i></span>
                              <span><i class="far fa-arrow-right"></i></span>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5">
                     <div class="about_wrapper wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="section-title text-start mb-20">
                           <h3 class="mb-20 colorlight">Franchisee <span style="font-size: 25px;">(Individuals)</span></h3>
                           <p>As Franchisees have lots of fear, we do offer exceptional end-to-end services. Our well qualified expert team discovers passionate business career aspirants; Train them as per franchisor’ standards & requirements; Assist them in establishing the Franchisee on a shoestring budget; and Support them throughout their journey
                           </p>
                        </div>
                        <h4 class="ser-text"> -- Benefits to Franchisee</h4>
                        <ul class="services_text_list mb-45">
                           <li class="white-color">Premium quality services in licensing & agreement with franchisor</li>
                           <li class="white-color">Complete entrepreneurial training to meet the franchisor standards & expectation</li>
                           <li class="white-color">Processing of bank loans to meet the franchisor requirement </li>
                           <li class="white-color">Processing licenses to run business</li>
                           <li class="white-color">Third-party vendor management for interior set up, training & equipment in budget</li>
                           <!-- <li class="white-color">Full Franchise support till the launch</li> -->
                        </ul>
                        <a href="services" class="theme_btn">
                           Read More 
                           <div class="icon_box">
                              <span><i class="far fa-arrow-right"></i></span>
                              <span><i class="far fa-arrow-right"></i></span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--about-area end-->
      
         <!--testimonial-area start-->
         <section class="testimonial-area testimonial-area-2 pt-60 pb-80 dark-blue-bg">
            <div class="container">
               <div class="row pb-25">
                  <div class="col-xxl-4 col-xl-4 pt-30">
                     <div class="section-title text-left pr-70">
                        <h6 class="mb-20">We are winning hearts</h6>
                        <h3 class="mb-25">Your opinion matters a lot</h3>
                        <!-- p>But I must explain to you how all this mista
                           ken idea of denouncing
                        </p> -->
                     </div>
                  </div>
                  <div class="col-xxl-8 col-xl-8">
                     <div class="row testimonial-active-2">
                        <div class="col-xxl-6">
                           <div class="testimonia_wrapper pl-60 mb-30">
                              <div class="quote_icon mb-15">
                                 <i class="flaticon-right-quote"></i>
                              </div>
                              <p class="mb-25">Being an IT partner, we got better knowledge of BIZ BULLS process of working and we highly recommend for the budding entrepreneurs for a ease of process towards success.</p>
                              <div class="author d-flex">
                                 <div class="author__img mr-20">
                                    <img src="assets/img/testimonial/01.png" alt="">
                                 </div>
                                 <div class="author__content">
                                    <h5>Saritha Akkineni</h5>
                                    <span>Ops Manager, PRILOR IT</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6">
                           <div class="testimonia_wrapper pl-60 mb-30">
                              <div class="quote_icon mb-15">
                                 <i class="flaticon-right-quote"></i>
                              </div>
                              <p class="mb-25">We are delighted to be the branding partner and feeling proud in taking part of the rapidly expansion of BIZ BULLS, throughout India. A well-organized structure always wins hearts, like ours’.</p>
                              <div class="author d-flex">
                                 <div class="author__img mr-20">
                                    <img src="assets/img/blog/12.png" alt="">
                                 </div>
                                 <div class="author__content">
                                    <h5>Pranathi Sudhakar</h5>
                                    <span>Brand Head, RAPRI PRO</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6">
                           <div class="testimonia_wrapper pl-60 mb-30">
                              <div class="quote_icon mb-15">
                                 <i class="flaticon-right-quote"></i>
                              </div>
                              <p class="mb-25">Highly encouraging partnership. We acknowledge guarantee in service delivery, as we have received.</p>
                              <div class="author d-flex">
                                 <div class="author__img mr-20">
                                    <img src="assets/img/blog/16.png" alt="">
                                 </div>
                                 <div class="author__content">
                                    <h5>Victor</h5>
                                    <span>Franchise Manager, UNCLE KITCHENS</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6">
                           <div class="testimonia_wrapper pl-60 mb-30">
                              <div class="quote_icon mb-15">
                                 <i class="flaticon-right-quote"></i>
                              </div>
                              <p class="mb-25">I don’t believe in others but when I met this team for a Franchisee, their projects attracted quite a lot. Registered immediately. Will update you all soon, after checking my first month revenue.</p>
                              <div class="author d-flex">
                                 <div class="author__img mr-20">
                                    <img src="assets/img/testimonial/01.png" alt="">
                                 </div>
                                 <div class="author__content">
                                    <h5>Mabu Vali Shaik</h5>
                                    <span>Franchisee Owner, BIZ BULLS</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6">
                           <div class="testimonia_wrapper pl-60 mb-30">
                              <div class="quote_icon mb-15">
                                 <i class="flaticon-right-quote"></i>
                              </div>
                              <p class="mb-25">Saw an ad in Facebook, in 25K franchise business, shocking right..? Me too…. But it’s 100% correct. Just got Licence… I can simply say, wowww.</p>
                              <div class="author d-flex">
                                 <div class="author__img mr-20">
                                    <img src="assets/img/testimonial/01.png" alt="">
                                 </div>
                                 <div class="author__content">
                                    <h5>Anil Kumar J</h5>
                                    <span>Franchise Owner, BIZ BULLS</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6">
                           <div class="testimonia_wrapper pl-60 mb-30">
                              <div class="quote_icon mb-15">
                                 <i class="flaticon-right-quote"></i>
                              </div>
                              <p class="mb-25">This company…. Like… a man of word… service delivery superb</p>
                              <div class="author d-flex">
                                 <div class="author__img mr-20">
                                    <img src="assets/img/testimonial/01.png" alt="">
                                 </div>
                                 <div class="author__content">
                                    <h5>Prasada Rao T</h5>
                                    <span>Franchise Owner, BIZ BULLS</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row text-right no-margin">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xxl-12 pr-30">
                     <button class="theme_btn" onclick="location.href='post-your-opinion'">Post your opinion</button>
                  </div>
               </div>
            </div>
         </section>
         <!--testimonial-area end-->
       
         <!--map-area start-->
         <section class="section-map-area map-style-2 dark-blue-bg">
            <div class="container-fluid px-0">
               <div class="row gx-0">
                  <div class="col-xxl-12">
                     <div class="map-area-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29177.737264607804!2d90.37629533955075!3d23.9173632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1612276950090!5m2!1sen!2sbd"></iframe>
                       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17399532.345762696!2d72.32829553237285!3d23.8083030016544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1634498080740!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--map-area end-->
        
         <!--contact-area start-->
         <section class="contact-area contact-area-2 dark-blue-bg pt-70 pb-70">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="contact-form-area">
                        <div class="section-title white-title text-center">
                           <!-- <h3 class="mb-25 colorlight">Register</h3> -->
                          <!--  <p>But must explain to you how all this mistaken idea of<br>  
                              pleasue praising pain was give
                           </p> -->
                        </div>
                        <form class="contact-form pl-30 pr-30" name="insertproduct" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-30">
                                 <input name="name" type="text" placeholder="Full Name" required="">
                              </div>
                              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-30">
                                 <input name="emails" type="text" placeholder="Contact Number" required="">
                              </div>
                              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-30">
                                 <input name="phone" type="text" placeholder="Mail ID" required="">
                              </div>
                              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-30">
                                 <select class="sevices-select" name="service" id="services" required="">
                                    <option value="select-service">Select Service</option>
                                    <option value="Freaky Bakes">Freaky Bakes</option>
                                    <option value="Icy Doves">Icy Doves</option>
                                    <option value="Shahishagun">Shahishagun</option>
                                    <option value="Uncle Kitchen">Uncle Kitchen</option>
                                    <option value="Treatmore">Treatmore</option>
                                 </select>
                              </div>
                              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-6">
                                 <input name="message" type="text" placeholder="Write Message" required="">
                                 <!-- <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea> -->
                              </div>
                              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 text-center">
                                 <div class="form_btn">
                                    <button class="theme_btn" style="width: 100%" type="submit" name="submitinsert">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--contact-area end-->
      </main>
<?php include_once('footer.php'); ?>