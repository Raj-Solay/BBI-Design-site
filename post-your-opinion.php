<?php
error_reporting(0);
include ('config.php');

$directory = "opinion-images/";
$opinionimages = '';

if (isset($_POST['submitinsert']))
{
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $company = $_POST['company'];
    $contact = $_POST['contact'];
    $emails = $_POST['emails'];
    $photo = rand(4, 676) . time() . basename($_FILES["opinionimages"]["name"]);
    $message = $_POST['message'];

    $sql = "insert into opinion(name,designation,company,contact,mail,photo,message) values('$name','$designation','$company','$contact','$emails','$photo','$message')";
    echo '<script>alert("Your registration completed 1")</script>';

       if ($sql)
         // echo '<script>alert("Your registration completed 2")</script>';
    {
      echo '<script>alert("Your registration completed 3")</script>';
        move_uploaded_file($_FILES["opinionimages"]["tmp_name"], $directory . $photo);

 echo '<script>alert("Your registration completed successfully")</script>';
    }
    else
    {
 echo "Error inserting record: " . $con->error;
    }

    header('refresh:0;url=index');

}
?>

<?php include_once('header.php'); ?>
      <main>
         <!--page-title-area start-->
         <section class="page-title-area" style="background-image: url(assets/img/bg/05.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page-title-wrapper pt-80 text-center">
                        <h3 class="page-title mb-25">Post Your Opinion</h3>
                        <div class="breadcrumb-list">
                           <ul class="breadcrumb">
                              <li><a href="index">Home <i class="far fa-chevron-right"></i></a></li>
                              <li><a href="#">Post Your Opinion</a></li>
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
                           <h3 class="mb-25 colorlight">Post Your Opinion</h3>
                           <!-- <p>But must explain to you how all this mistaken idea of<br>  
                              pleasue praising pain was give
                           </p> -->
                        </div>
                        <form class="contact-form pl-30 pr-30" name="insertproduct" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="name" type="text" placeholder="Full Name" required="">
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="designation" type="text" placeholder="Designation" required="">
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="company" type="text" placeholder="Company Name" required="">
                              </div>
                             <!--  <div class="col-xxl-6 mb-30">
                                 <input name="location" type="text" placeholder="Post your Opinion place">
                              </div> -->
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="contact" type="text" placeholder="Contact Number" required="">
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <input name="emails" type="text" placeholder="Mail ID" required="">
                              </div>
                               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30">
                                 <!-- <input name="location" type="file" placeholder="Attach Photo"> -->
                                 <input name="photo" type="file" id="upload-file" hidden placeholder="Attach Photo" />
                                 <label for="upload-file">Attach Photo</label>
                              </div>
                              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 mb-30">
                                 <textarea name="message" id="message" cols="30" rows="10" placeholder="Post your Opinion" required=""></textarea>
                              </div>
                              <div class="col-xxl-12 text-center">
                                 <div class="form_btn">
                                    <button class="theme_btn" type="submit" name="submitinsert">Submit</button>
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