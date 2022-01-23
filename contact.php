<?php
    $title = "  Contact Us| 100Plywood";
     $meta =" Contact Us| 100Plywood";
   
  ?>
<?php include('inc/header.php')?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container clearfix">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="auto-container">
            <div class="upper-box">
                <h2>Write us a Message !</h2>
                <!-- <div class="text">Phosfluorescently engage worldwide methodologies with web-enabled technology.</div> -->
            </div>
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="contact-form">
                          <form action="#" method="post" name="feedback-form">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label></label>
							<input type="text" placeholder="Full Name" name="name" required>
						</div>
					</div>

					
					<div class="col-md-6">
						<div class="form-group">
							<label></label>
							<input type="email" placeholder="Email Address" name="email" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label></label>
							<input type="text" placeholder="Subject" name="subject" required>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label></label>
							<textarea placeholder="Message" name="message" required></textarea>
						</div>
					</div>
					<div class="col-md-12 mt-2 text-center">
						<div class="form-group">

							<button type="subit" name="subit" class="theme-btn btn-style-one">Send your inquiry
								<i class="fas fa-arrow-right fa-btn"></i></button>
						</div>
					</div>
				</div>





			</form>
                        </div>
                    </div>
                </div>

                <!-- Contact Column -->
                <div class="contact-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row no-gutters">
                            <!-- <div class="contact-info-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
                                    <span class="icon flaticon-worldwide"></span> 
                                    <h4>Address</h4>
                                    <p>Breaking Street, <br>Newyork, USA</p>
                                </div>
                            </div> -->

                            <div class="contact-info-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
                                    <span class="icon flaticon-phone"></span> 
                                    <h4>Call Us</h4>
                                    <p><a href="tel:+917830666100">+91 78306 66100</a></p>
                                   
                                </div>
                            </div>

                            <div class="contact-info-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
                                    <span class="icon flaticon-email"></span> 
                                    <h4>Mail Us</h4>
                                    <p><a href="mailto:hello@100plywood.com">hello@100plywood.com</a></p>
                                   
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
            
        </div>
    </section>
    <!-- End Map Section -->

    <?php include('inc/footer.php')?>
    
    

<?php 
if(isset($_POST['subit'])){
        
  require 'phpmailer/mail.php';

    $name = $_POST['name'];
        $email = $_POST['email'];
        
        $subject=$_POST['subject'];
	
        $content=$_POST['message'];
        
        $mail->From = 'adityanamansingh@gmail.com';
        $mail->FromName = "100Plywood WEB ADMIN"; // Name to indicate where the email came from when the recipient received
        $mail->AddAddress("hello@100plywood.com");
        $mail->AddBCC("");
        $mail->AddCC("adityanamansingh@gmail.com");
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML
        
        $mail->SMTPDebug = false;
        $mail->do_debug = 0;
        $mail->Subject = "100Plywood Contact Enquiry"; //used for mail subject
        $mail->Body = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body style="background-color:#f6f6f6; box-sizing: border-box; font-family: " Poppins", sans-serif;"><div style="margin:0px auto;background: #f3f3f3;padding: 10px;"><div
          style="border: 1px solid #ccc;background-color:#fff;clear:both;color:#666;line-height:32px;max-width:500px;margin:50px auto;border-radius:5px 5px 5px 5px"><div
          style="color:#fff;text-align:center;padding:0px 0px 0px;background-repeat:no-repeat;background-position:center;background-size:183px;background-image: url(https://100plywood.com/images/foot-logo.png);background-color:#000;width:100%;height:125px;border-radius:5px 5px 0px 0px"></div><div
          style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0;font-size:15px"><img src="https://100plywood.com/message.png"
          style=" display: block; margin: 0 auto;width: 100px; padding-top: 15px;"><table cellpadding="0" cellspacing="0"
          style="width: 100%;margin: 8px 1px;font-size: 12px;font-size:12px"><tbody><tr><td
          style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Name</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$name.'</td></tr><tr><td
          style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Email</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$email.'</td></tr>
		  
		  <tr><td
          style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Subject</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$subject.'</td></tr><tr><td
          style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Message</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$content.'</td></tr></tbody></table><p
          style="padding: 10px 30px;font-weight: 600;text-align: center;font-size: 14px;margin-bottom: 0;background-repeat:no-repeat;background-position:center;background-color:#000;background: #000;color: #fff;text-transform: capitalize;">100 Plywood  | All right reserved</p></div></div></div></div></body></html>';
           

        if($mail->Send())
        {
           echo "<script type='text/javascript'>alert('Your message has been saved successfully.We will contact you soon.')</script>";  
            echo "<script> window.location.href = 'contact.php';</script>"; 
        
        } else {

            $mailError = $mail->ErrorInfo;
            echo "<script type='text/javascript'>alert('There is an issue with the form you filled. Please try again.')</script>";
echo "<script> window.location.href = 'contact.php';</script>";
               }



}

?> 
