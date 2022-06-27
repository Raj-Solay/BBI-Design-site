<?php
// error_reporting(0);
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
        header('refresh:0;url=index'); 
    } else {
      echo '<script>alert("error")</script>';
         echo "Error inserting record: " . $con->error;
    }
     
}
?>

<?php include_once('header.php'); ?>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<style type="text/css">
   .swal2-popup {
    padding: 4em 6em !important;
}
</style>
      <main>
         <!--page-title-area start-->
         <section class="page-title-area" style="background-image: url(assets/img/banners/contact-us.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page-title-wrapper pt-80 text-center">
                        <h3 class="page-title mb-25">Contact Us</h3>
                        <div class="breadcrumb-list">
                           <ul class="breadcrumb">
                              <li><a href="index">Home <i class="far fa-chevron-right"></i></a></li>
                              <li><a href="#">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--page-title-area end-->
         <!--contact-area start-->
         <section class="contact-area contact-area-2 dark-blue-bg pt-50">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-xxl-4 col-xl-6 col-lg-6">
                     <div class="about_wrapper mb-30 wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="section-title text-start mb-35">
                           <h6 class="mb-20">Contact Us</h6>
                           <h3 class="mb-25 colorlight">Need Any Services ?</h3>
                           <!-- <p>But I must explain to you how all this mista
                              ken idea of denouncing
                           </p> -->
                        </div>
                        <ul class="about_list mb-20">
                           <li>
                              <div class="about_list__inner contact-list mb-30">
                                 <div class="list-number float-start mr-25"><i class="fal fa-map-marker-alt"></i></div>
                                 <div class="about_list__inner-content">
                                    <h5>Our Location</h5>
                                    <p>BIZ BULLS Franchising Pvt Ltd., Near Nagarjuna Circle, Punjagutta, Hyderabad, Telangana - 500016</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="about_list__inner contact-list mb-30">
                                 <div class="list-number float-start mr-25"><i class="fal fa-envelope"></i></div>
                                 <div class="about_list__inner-content">
                                    <h5>Email Address</h5>
                                    <p>info@bizbullsindia.com</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="about_list__inner contact-list mb-30">
                                 <div class="list-number float-start mr-25"><i class="fal fa-phone"></i></div>
                                 <div class="about_list__inner-content">
                                    <h5>Phone No</h5>
                                    <p>+91 - 8977 36 24 36</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="contact-form-area heding-bg pt-70 pb-80 mb-30">
                        <div class="section-title white-title text-center mb-50">
                           <h3 class="mb-25 colorlight">Make Appointment</h3>
                           <!-- <p>But must explain to you how all this mistaken idea of<br>  
                              pleasue praising pain was give
                           </p> -->
                        </div>
                        <form class="contact-form pl-30 pr-30" name="insertproduct" action="" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-xxl-6 mb-30">
                                 <input name="name" type="text" placeholder="Your Full Name" required="">
                              </div>
                              <div class="col-xxl-6 mb-30">
                                 <input name="emails" type="text" placeholder="Email Address" required="">
                              </div>
                              <div class="col-xxl-6 mb-30">
                                 <input name="phone" type="text" placeholder="Phone Number" required="">
                              </div>
                              <div class="col-xxl-6 mb-30">
                                 <select class="sevices-select" name="service" id="services" required="">
                                    <option value="select-service">Select Service</option>
                                    <option value="Freaky Bakes">Freaky Bakes</option>
                                    <option value="Icy Doves">Icy Doves</option>
                                    <option value="Shahishagun">Shahishagun</option>
                                    <option value="Uncle Kitchen">Uncle Kitchen</option>
                                    <option value="Treatmore">Treatmore</option>
                                 </select>
                              </div>
                              <div class="col-xxl-12 mb-30">
                                 <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message" required=""></textarea>
                              </div>
                              <div class="col-xxl-12 text-center">
                                 <div class="form_btn">
                                    <button class="theme_btn" type="submit" name="submitinsert">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <p class="ajax-response"></p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
   
         <!--map-area start-->
         <section class="section-map-area map-style-2">
            <div class="container-fluid px-0">
               <div class="row gx-0">
                  <div class="col-xxl-12">
                     <div class="map-area-2">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29177.737264607804!2d90.37629533955075!3d23.9173632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1612276950090!5m2!1sen!2sbd"></iframe>-->
                        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=BIZ%20BULLS%20Franchising%20Pvt%20Ltd.,%20Near%20Nagarjuna%20Circle,%20Punjagutta,%20Hyderabad,%20Telangana%20-%20500016+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--map-area end-->
      </main>
      <script type="text/javascript">
      function submitResult(e) {
      e.preventDefault();
      Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Your Request has been saved',
      showConfirmButton: false,
      timer: 5000
      }).then(function() {
      window.location = "index";
      });
      }
      </script>
<?php include_once('footer.php'); ?>