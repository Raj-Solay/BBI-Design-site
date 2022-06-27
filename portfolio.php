<?php
// error_reporting(0);
include ('config.php');?>
<?php include_once('header.php');?>

<?php
if (isset($_POST['submitinsert']))
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $mail = $_POST['mail'];
    $location = $_POST['district'].','.$_POST['state'].','.$_POST['country'];

    $sql = "insert into visitor(name,contact,mail,location) values('$name','$contact','$mail','$location')";

    if (mysqli_query($con, $sql)) {
		//mail to Admin Team
        $subject = 'Franchise Registration Request'; 
        $to_email = $mail; //admin email
        $to_fullname = "Biz Bulls India";  
		
		// Sender 
		$from = 'developerattili@gmail.com'; 
		$fromName = 'Biz Bulls India'; 

		$message = '<html>
			<body>
			<table width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;">
			<tbody>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td>
			<b>Dear Admin,</b>
			</td>
			</tr>
			<tr><td><p>We have received a new register request from Visitor - '.$name.'</p></td></tr>
			<tr><td><b>Full Name: </b>'.$name.'</td></tr>
			<tr><td><b>Email: </b>'.$mail.'</td></tr>
			<tr><td><b>Contact Number: </b>'.$contact.'</td></tr>
			<tr><td><b>Location: </b>'.$location.'</td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td>Team,</td></tr>
			<tr><td>Biz Bulls India.</td></tr>
			</tbody>
			</table>
			</body>
			</html>'; 
			
			$headers = 'MIME-Version: 1.0'."\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
			$headers .= "Bcc: developerattili@gmail.com\r\n"; 
			$headers .= "From: $fromName"." <".$from.">"; 

        if (!mail($to_email, $subject, $message, $headers)) { 
          print_r(error_get_last());
        }
 

				//Mail to Visitor 

			$subject = 'Franchise Registration Request'; 
			$to_visitor = $mail;  
			// Attachment file 
			$file = "files/project_brochure.pdf"; 
			$file1 = "files/company_brochure.pdf"; 
			$file2 = "files/Franchisee Registration Form.pdf"; 

			// Email body content 
				$htmlContent = '<html>
				 <body>
				<table width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;">
				<tbody>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td><p>Hello '.$name.',</p></td></tr>
				<tr><td><p>This Mail is based on your interest</p></td></tr>
				<tr><td><b>Company Name:</b> BizzBullsIndia</td></tr>
				<tr><td><b>FDM details :</b> Rama Naide, Contact: 9876543210</td></tr>
				<tr><td><b>Name :</b> Rama Naidu</td></tr>
				<tr><td><b>Contact No :</b> 9876543210</td></tr>
				<tr><td><p>Required forms are attached please find the below list</p></td></tr>
				<tr><td><b>1.</b> Franchisee Requisition Form</td></tr>
				<tr><td><b>2.</b> Company Brochure</td></tr>
				<tr><td><b>3.</b> Project ROI Brochure</td></tr> 
				
				<tr><td></td></tr>
				<tr><td>Team,</td></tr>
				<tr><td>Biz Bulls India,</td></tr>
				</tbody>
				</table>
				</body>
				</html>'; 

				// Header for sender info 
				$headers = "Bcc: developerattili@gmail.com\r\n";
				$headers .= "From: $fromName"." <".$from.">";
							// Boundary  
				$semi_rand = md5(time());  
				$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
				
				// Headers for attachment  
				$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
				
				// Multipart boundary  
				$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
				"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
				
				// Preparing attachment 
				if(!empty($file) > 0){ 
					if(is_file($file)){ 
						$message .= "--{$mime_boundary}\n"; 
						$fp =    @fopen($file,"rb"); 
						$data =  @fread($fp,filesize($file)); 
				
						@fclose($fp); 
						$data = chunk_split(base64_encode($data)); 
						$message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
						"Content-Description: ".basename($file)."\n" . 
						"Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
						"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
					} 
				} 
				if(!empty($file1) > 0){ 
					if(is_file($file1)){ 
						$message .= "--{$mime_boundary}\n"; 
						$fp1 =    @fopen($file1,"rb"); 
						$data1 =  @fread($fp1,filesize($file1)); 
				
						@fclose($fp1); 
						$data1 = chunk_split(base64_encode($data1)); 
						$message .= "Content-Type: application/octet-stream; name=\"".basename($file1)."\"\n" .  
						"Content-Description: ".basename($file1)."\n" . 
						"Content-Disposition: attachment;\n" . " filename=\"".basename($file1)."\"; size=".filesize($file1).";\n" .  
						"Content-Transfer-Encoding: base64\n\n" . $data1 . "\n\n"; 
					} 
				} 
				if(!empty($file2) > 0){ 
					if(is_file($file2)){ 
						$message .= "--{$mime_boundary}\n"; 
						$fp2 =    @fopen($file2,"rb"); 
						$data2 =  @fread($fp2,filesize($file2)); 
				
						@fclose($fp2); 
						$data2 = chunk_split(base64_encode($data2)); 
						$message .= "Content-Type: application/octet-stream; name=\"".basename($file2)."\"\n" .  
						"Content-Description: ".basename($file2)."\n" . 
						"Content-Disposition: attachment;\n" . " filename=\"".basename($file2)."\"; size=".filesize($file2).";\n" .  
						"Content-Transfer-Encoding: base64\n\n" . $data2 . "\n\n"; 
					} 
				} 
				$message .= "--{$mime_boundary}--";
				$returnpath = "-f" . $from; 
				
				$mail = mail($to_visitor, $subject, $message, $headers, $returnpath); 


		  echo '<script>alert("Company details, Brochure & Requisition form have been forwarded to your mail ID & You may contact our FDM of district, Mr. RamaNaide,9876543210, for more details & registration")</script>';
			//header('refresh:0;url=index'); 
   
    } else {
    	echo '<script>alert("error")</script>';
         //echo "Error inserting record: " . $con->error;
    }

	
}
?>


<style type="text/css">
	.hero-area .slider_height {
    min-height: 65vh;
	}
	/* .contact-form .sevices-select .list {
    width: 100%;
    overflow: auto;
    height: 300px;
} */
</style>
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
            </div>
            <div class="modal-body">
                <p>Thanks for getting in touch!</p>                     
            </div>    
        </div>
    </div>
</div>
 <main>
        <!--page-title-area start-->
        <section class="page-title-area" style="background-image: url(assets/img/banners/Partners_vendors.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page-title-wrapper pt-80 text-center">
                            <h3 class="page-title mb-25">Portfolio</h3>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a href="index">Home <i class="far fa-chevron-right"></i></a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!--transmission-services-area start-->
        <section class="transmission-services-area pt-125 pb-50 dark-blue-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="services-details-wrapper sdw-padding">
                            <div class="services-details-box mb-40">
                                <div class="services-box__thumb mb-30">
                                    <div class="hero-area pos-rel">
							            <div class="slider-active">
							               <div class="single-slider">
							                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/service/p1.jpg);">
							                  </div>
							               </div>
							               <div class="single-slider">
							                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/service/p2.jpg);">
							                     
							                  </div>
							               </div>
							               <div class="single-slider">
							                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/service/p3.jpg);">
							                     
							                  </div>
							               </div>
							               <div class="single-slider">
							                  <div class="slider_height slider_before d-flex align-items-center" style="background-image: url(assets/img/service/p4.jpg);">
							                     
							                  </div>
							               </div>
							            </div>
							         </div>
                                </div>
                                <h3 class="service-title colorlight mb-5 mt-50">BIZ BULLS INDIA</h3>
                                <h3 class="service-title-2">Food & beverages</h3>

								<form class="contact-form pr-30 pt-30 pb-20" action="https://www.devsnews.com/template/gerez/gerez/mail.php" id="contact-form" method="POST">
								<div class="row">
								<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 mb-30">
								<select class="sevices-select" name="select-service" id="services">
								<option value="select-service">Project Level</option>
								<option value="wash">District Level</option>
								<option value="wash">Sub District Level</option>
								<option value="wash">Panchayat Level</option>
								</select>
								</div>
								<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 mb-30">
								<input class="place" name="email" type="text" placeholder="Project Cost: 200000" readonly="">
								</div>
								<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 mb-30">
								<select class="sevices-select" name="select-service" id="services">
								<option value="select-service">Place Required</option>
								<option value="wash">Hyderabad</option>
								<option value="wash">Vijayawada</option>
								</select>
								</div>
								</div>
								</form>

								<h3 class="service-title colorlight mb-5">About Company,</h3>
                                <p class="mb-25 mt-15 text-justify">At Biz Bulls, we are the industry experts of talented beings who believe in expanding and extending opportunities in the best ways. We innovate and execute the Finest Methodology for the budding Entrepreneurs to grow their thriving business to an extent as a franchisor. We enable both qualitative and quantitative approaches to make sure that, as a franchisor, you can reach the targeted audience to convince them about your business. On the other hand, we help the Franchisees take every possible step to build a business that they desire to witness. We promote Franchisors, giving utmost value to their brand, and formulate innovative methods to approach budding entrepreneurs and expand their business as per the requirement.</p>
                                <p class="mb-40">Our vision is growing together in leaps and bounds, offering the most edge-cutting upgraded service to the desired future entrepreneurs.</p>


                                <iframe width="100%" height="450" src="https://www.youtube.com/embed/kXNOXcj_m_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            
                           
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="services-details-right">
                            <div class="widget mb-40">
                                <h4 class="services-widget-title mb-35 colorlight">Details of Visitor</h4>
								<form class="contact-form" name="insertproduct" method="post" enctype="multipart/form-data">
								<div class="row">
								<div class="col-xxl-12 mb-30">
								<input name="name" type="text" required placeholder="Full Name">
								</div>
								<div class="col-xxl-12 mb-30">
								<input name="contact" type="number" required placeholder="Contact Number">
								</div>
								<div class="col-xxl-12 mb-30">
								<input name="mail" type="email" required placeholder="Mail ID">
								</div> 
								<div class="col-xxl-12 mb-30"> 
									<select  class="sevices-select" required name="country" id="country">
									<option value="">Select Country</option>
									<?php 
											$sql = "SELECT * FROM `countries` WHERE status = 1";
											$result1 = mysqli_query($con,$sql);									 
											// output data of each row
											while($row = mysqli_fetch_array($result1)) {
												?>
												<option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
											<?php } //while close                             
											?> 								 
									</select>
								</div>
								 
								 <div class="col-xxl-12 mb-30"> 
									<select class="sevices-select" required name="state" id="state">
										<option value="">Select State </option>										 
									</select>
								</div> 
								<div class="col-xxl-12 mb-30"> 
									<select class="sevices-select" required name="district" id="districtselect">
										<option value="">Select district </option>
									</select>
								</div>  
							 
								<div class="col-xxl-12 text-center">
								<div class="form_btn">
								<button class="theme_btn" style="width: 100%;" type="submit" name="submitinsert">Submit</button>
								</div>
								</div>
								</div>
								</form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--transmission-services-area end-->
    
    </main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	<script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val(); 
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){ 
                    $('#state').append(html);
                    $('#district').html('<option value="">Select District </option>'); 
					$('select').niceSelect('update');
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country </option>');
            $('#district').html('<option value="">Select District </option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $(this).val(); 
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){ 
                    $('#districtselect').html(html);
					$('select').niceSelect('update');
					//$('#state .nice-select').html(html);
                }
            }); 
			 
        }else{
            $('#district').html('<option value="">Select</option>'); 
        }
    });
});
</script>
  

<?php include_once('footer.php'); ?>