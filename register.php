<?php

error_reporting(0);
include ('config.php');


if (isset($_POST['submitinsert']))
{
    $name = $_POST['name'];
    $emails = $_POST['emails'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    $sql = "insert into register(name,email,phone,location,message) values('$name','$emails','$phone','$location','$message')";
    if (mysqli_query($con, $sql)) {


echo '<script>alert("1")</script>';

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
 
    /*
     * Setup email addresses and change it to your own
     */
    $from = "chiruwebdeveloper@gmail.com";
    $to = "p.chinna369@gmail.com";
    $subject = "Simple test for mail function";
    $message = "This is a test to check if php mail function sends out the email";
    $headers = "From:" . $from;
 
    /*
     * Test php mail function to see if it returns "true" or "false"
     * Remember that if mail returns true does not guarantee
     * that you will also receive the email
     */

echo '<script>alert("2")</script>';
   // $res = mail($to,$subject,$message, $headers);
   // echo '<script>alert("3")</script>';
   // echo '<script>alert('.$res.')</script>';
    if(mail($to,$subject,$message, $headers))
    {

      echo '<script>alert( "mail sent")</script>';
    } 
    else 
    {
      echo error_get_last()['message'];
      echo '<script>alert("something went wrong, pls try again " )</script>';
    }






        echo '<script>alert("Your registration completed successfully")</script>';
        // header('refresh:0;url=index'); 
    } else {
       echo '<script>alert("something went wrong, pls try again")</script>';
         echo "Error inserting record: " . $con->error;
    }
     
}
?>

<?php include_once('header.php'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


      <main>
         <!--page-title-area start-->
         <section class="page-title-area" style="background-image: url(assets/img/banners/Register.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page-title-wrapper pt-80 text-center">
                        <h3 class="page-title mb-25">Register</h3>
                        <div class="breadcrumb-list">
                           <ul class="breadcrumb">
                              <li><a href="index">Home <i class="far fa-chevron-right"></i></a></li>
                              <li><a href="#">Register</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--page-title-area end-->
         <!--contact-area start-->
         <section class="contact-area contact-area-2 dark-blue-bg pt-40 pb-40">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="contact-form-area heding-bg pt-40 pb-40 mb-30">
                        <div class="section-title white-title text-center mb-50">
                           <h3 class="mb-25 colorlight">Register</h3>
                          <!--  <p>But must explain to you how all this mistaken idea of<br>  
                              pleasue praising pain was give
                           </p> -->
                        </div>
                        <form class="contact-form pl-30 pr-30" name="insertproduct" action="" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="name" type="text" placeholder="Your Full Name" required="">
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="emails" type="text" placeholder="Email Address" required="">
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="phone" type="text" placeholder="Phone Number" required="">
                              </div>
                              <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="location" type="text" placeholder="Location" required="">
                              </div> -->
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <select class="sevices-select" name="location" id="services" required="">
                                    <option value="select-service">Select Location</option>
                                    <option value="Anantapur">Anantapur</option>
                                    <option value="Chittoor">Chittoor</option>
                                    <option value="East Godavari">East Godavari</option>
                                    <option value="Guntur">Guntur</option>
                                    <option value="Kadapa">Kadapa</option>
                                    <option value="Krishna">Krishna</option>
                                    <option value="Kurnool">Kurnool</option>
                                    <option value="Nellore">Nellore</option>
                                    <option value="Prakasam">Prakasam</option>
                                    <option value="Srikakulam">Srikakulam</option>
                                    <option value="Visakhapatnam">Visakhapatnam</option>
                                    <option value="Vizianagaram">Vizianagaram</option>
                                    <option value="West Godavari">West Godavari</option>
                                 </select>
                              </div>
                              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 mb-30">
                                 <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message" required=""></textarea>
                              </div>
                              <div class="col-xxl-12 text-center">
                                 <div class="form_btn">
                                    <!-- <button class="theme_btn">Register</button> -->
                                    <button type="submit" class="theme_btn" type="submit" name="submitinsert">Register</button>
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