<!-- contact -->
        <section class="padding-110px-tb bg-dark-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="padding-eighteen bg-gray tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Tell us about your issue ...</h5>
							<?php 
							extract($_REQUEST);
							if(isset($Submit))
							{	
								$to="hemantjain17@gmail.com";
								$sub="Appointment of ".$name;
								$message1=$message." \nName: ".$name." \nEmail Id: ".$email." \nMobile Number: ".$number;
								mail($to,$sub,$message1);
							}
							?>
                            <form action="index.php" method="post">
                                <input type="text" name="name" placeholder="Your Name" class="medium-input">                                    
                                <input type="email" name="email" placeholder="Your Email" class="medium-input">
								<input type="text" name="number" placeholder="Your Mobile Number" class="medium-input">
                                <textarea name="message" placeholder="Your Issue" class="medium-input"></textarea>                                    
                                <input type="submit" name="Submit" value="GET AN APPOINTMENT" class="btn-medium btn-circle btn border-2-chrome-yellow btn-border text-chrome-yellow margin-twenty-bottom">
                            </form>
                        </div>
                    </div>
                    <!-- end contact form -->
					 <!-- contact form -->
					 <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-fifteen-top">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.9395359275204!2d75.83815101459487!3d25.205261483892453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f9b0f49d9753b%3A0x6871daf0a27d726e!2sMahaveer+Homeo+Clinic!5e0!3m2!1sen!2sin!4v1498199299678" width="560" height="580" allowfullscreen class="border-radius-8"></iframe>
					 </div>
                    <!-- end contact form -->
                </div>
            </div>
        </section>
        <!-- end contact -->
		 <!-- footer -->
        <footer id="footer-section15" class="bg-dark-gray builder-bg padding-60px-tb xs-padding-40px-tb">
            <div class="container">
                <div class="row equalize">
                    <!-- links -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sm-margin-five-bottom text-left sm-text-center display-table">
                        <div class="display-table-cell-vertical-middle">
                            <div class="tz-text text-blue-gray"><p class="no-margin-bottom">&copy;<a class="text-blue-gray" href="http://www.themezaa.com/">Mahaveer Homeo Clinic</a></p></div>
                        </div>
                    </div>                    
                    <!-- end links -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center display-table">
                        <div class="display-table-cell-vertical-middle">
                            
                        </div>
                    </div>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-right md-text-center sm-text-center display-table md-margin-five-top">   
                        <div class="display-table-cell-vertical-middle social icon-extra-small">
                            <a class="margin-six no-margin-tb text-blue-gray" href="https://www.facebook.com/DOC9414654321/">
                                <i class="fa fa-facebook tz-icon-color"></i>
                            </a>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->