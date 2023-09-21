<?php

if(isset($_POST['submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Number = $_POST['Number'];
     $subject = $_POST['subject'];
    $message = $_POST['message'];
  
  
   $to = 'harish@kriworld.in';
         $subject = "Contact Us Form - https://kriworld.in/";
       
         $message = "
<html>
<head>
<title>Index Page Form Details</title>
</head>
<body>


<p><b>Name:</b> ".$name."</p>
<p><b>Email:</b> ".$email."</p>
<p><b>Number :</b> ".$Number."</p>
<p><b>Subject :</b> ".$subject."</p>
<p><b>Message:</b> ".$message."</p>

</body>
</html>
";
       
         $header = "From:noreply@kriworld.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
       
         $retval = mail ($to,$subject,$message,$header);
  
  
       
}
?>
<!doctype html>
<html lang="zxx">
	

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		
		<!-- SITE TITLE -->
		<title>Kriworld | AI Development</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,700i,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800,900" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet"/>
		<link href="fonts/etline.css" rel="stylesheet"/>
		<link href="fonts/themify-icons.css" rel="stylesheet"/>
		<link href="css/plugins.css" rel="stylesheet"/>
		<link href="css/lightbox.min.css" rel="stylesheet"/>
		<link href="css/responsive.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
		
	</head>
	
	<body data-spy="scroll" data-target=".navbar" data-offset="70">

		<!-- START PRELOADER -->
			<!-- <div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div> -->
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
			<div class="navbar navbar-default navbar-fixed-top menu-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="https://kriworld.in/websitedesign.php" class="navbar-brand w-text"><img src="images/logo.png" alt="logo"></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="https://kriworld.in/websitedesign.php" class="smoothScroll">Home</a></li>
							<li><a href="https://kriworld.in/Seo/" class="smoothScroll">SEO</a></li>
							<li><a href="https://kriworld.in/mobile_app.php" class="smoothScroll">Mobile Apps</a></li>
							<li><a href="https://kriworld.in/AI-development/" class="smoothScroll">AI Development</a></li>
							<li><a href="https://kriworld.in/advertising/ecommerce.php" class="smoothScroll">Ecommerce Development </a></li>
							<li><a href="https://kriworld.in/advertising/" class="smoothScroll">Advertising</a></li>	
							<li><a href="https://kriworld.in/earn/index.php" class="smoothScroll">Learn with earn</a></li>													
							<li><a href="https://kriworld.in/earn/game-development.php" class="smoothScroll">Game Development</a></li>
						</ul>
					</div> 
				</div> <!--- END CONTAINER -->
			</div> 
		<!-- END NAVBAR -->			
		
		<!-- START BANNER-SHOW -->
			<section id="home" class="main_banner banner_bg">
				<div class="res-text">Artficial</div>
				<div class="display_table">
					<div class="display_table_cell">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="banner_content text-left">
										<span class="sm_title">Get Ready! AI Soluation to Improve Business Growth</span>
										<h1 class="cd-headline clip">
											<span class="fw_300">AI Solutions to more Business profit in</span>
											<span class="cd-words-wrapper c-cyan">
												<b class="is-visible fw_800">Digital Marketing</b>
												<b class="fw_800">Chatbot Business</b>
												<b class="fw_800">Machine Learning</b>
											</span>
										</h1>
										<p class="head-p">AI science aims to create computer systems that mimic human behavior, solving complex problems using cognitive processes similar to those of humans. This is accomplished through the use of a variety of techniques and technologies. </p>
										<div class="btn-wrap">
								            <a href="#0" class="btn btn-default main_btn"><span>Our Services</span></a>
								            <a href="tel:+18507455358" class="btn btn-default main_btn"><span>Contact us</span></a>
											
										</div>
									</div>
								</div>
							</div> <!--- END ROW -->
						</div> <!--- END CONTAINER -->
					</div>
				</div>
				<div class="mouse_scroll">
					<a href="#about" class="smoothScroll">
						<div class="mouse">
							<i class="ti-angle-double-down"></i>
						</div>
					</a>
				</div>
			</section>
		<!-- END BANNER-SHOW -->
		<section class="about2 section_padding relative">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="about2-wrap relative"></div>
					</div>	
					<div class="box-shadow purple-bg col-md-10">
							<div class="row">
								<div class="col-md-6 no-pl col-sm-12 col-xs-12">
									<div class="about_img">
										<img src="images/about2.png" alt="about-img">
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 no-pr">
									<div class="about_content_area custom">
										<h5 class="c-cyan has-before">Dedicated Artificial Intelligence</h5>
										<h3 class="w-text">Get Benefits of using latest Artificial Intelligence.</h3>
										<p class="g-text">Artificial intelligence can dramatically improve the efficiencies  can augment the work humans can do</p>
										
										<div class="row mt-30">
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-1.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Fully Responsive &amp; obile friendly</div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-2.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Clean &amp; Modern Design Layout</div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-3.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Multi-Device Testing System </div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-4.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">great User Experience</div>
			                                    </div>
			                                </div>
			                                
			                            </div>
			                            <div class="about_btn">
											<a href="tel:+18507455358" class="btn cyan-btn">contact Us</a>
										</div>
									</div>
								</div> 
								
							</div>
							
						</div>
				</div>
			</div>
		</section>
		
		<!-- START ABOUT -->
		<section id="testimonial_area" class="section_padding relative test-bg">
			<!-- <div class="testimonial-bg"></div> -->
			<div class="container">
				<div class="section_heading text-center">
					<h2 class="">Our Services</h2>
					
				</div>	
				<div class="row">		
					<div class="col-md-12 over-hiddern text-center">
  <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/eco.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>eCommerce Development</h3>
                                        <a href="https://kriworld.in/advertising/ecommerce.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                               <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/moblie.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Moblie Apps</h3>
                                        <a href="https://kriworld.in/mobile_app.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/seo.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Seo Development</h3>
                                        <a href="https://kriworld.in/Seo/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/game.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Game Development</h3>
                                        <a href="https://kriworld.in/earn/game-development.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                               <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/learn.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Learn With Earn</h3>
                                        <a href="https://kriworld.in/earn/index.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/soft.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Software Development</h3>
                                        <a href="https://kriworld.in/earn/softwaredevelopment.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                            <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/web.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Web Development</h3>
                                        <a href="https://kriworld.in/websitedesign.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/grapic.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Graphic Design</h3>
                                        <a href="https://kriworld.in/graphic_design.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/advert.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Advertsing</h3>
                                        <a href="https://kriworld.in/advertising/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                                <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/cyber.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Cyber Security</h3>
                                        <a href="https://kriworld.in/Cybersecurity/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="https://kriworld.in/assets_new/img/ai.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>AI Development</h3>
                                        <a href="https://kriworld.in/AI-development/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                            </div>
                            <!--<div class="swiper-button-next"></div>-->
                            <!--<div class="swiper-button-prev"></div>-->
                            <!--<div class="swiper-pagination"></div>-->
                          </div>
				
					</div>
				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		
		<!-- START FEATURES -->	
		<section  class="features section_padding pb_70">
			<div class="container">
				
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="resume-container">
							<div class="row">

								<div class="col-md-12">
									<h5 class="c-cyan">Why Choose Us</h5>
								    <h3 class=""><i class="icon-trophy"></i>Core Features:</h3>
									<div class="single_resume wow fadeInLeft" data-wow-delay="0.2s">
										<div class="icon-box">
											<img src="images/elements/i1.png" alt="">
										</div>
										<div class="resume-desc">
											<h5 class="w-text">Smart Analyzer of the News</h5>
										    <p class="g-text">One of the biggest advantages of Artificial Intelligence is that it can significantly reduce errors and increase accuracy and precision.</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="single_resume wow fadeInLeft" data-wow-delay="0.4s">
										<div class="icon-box">
											<img src="images/elements/i2.png" alt="">
										</div>
										<div class="resume-desc">
											<h5 class="w-text">Adaptive Chatbot Assistant</h5>
										    <p class="g-text">Chatbots are available 24×7 and can respond to your customers instantly</p>
										</div>
										
									</div>
								</div>
								<div class="col-md-12">
									<div class="single_resume wow fadeInLeft" data-wow-delay="0.6s">
										<div class="icon-box">
											<img src="images/elements/i3.png" alt="">
										</div>
										<div class="resume-desc">
											<h5 class="w-text">Creative AI Platform</h5>
										    <p class="g-text">This can significantly reduce the time needed for data-heavy tasks.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about_img pt-5">
							<img src="images/banner-img2.png" alt="about-img">
						</div>
					</div>
				</div> <!--- END ROW -->
			</div> <!--- END CONTAINER -->
		</section>
		<!-- END FEATURES -->

		

		<!-- <section  class="how-it-work section_padding pb_70">
			<div class="container">
				<div class="section_heading text-center">
					<h2 class="w-text">How It Works</h2>
					<p class="g-text">AI drives down the time taken to perform a task. It enables multi-tasking and eases the workload for existing resources.</p>
				</div>	
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="feat-box v2 text-center">
							<div class="overlay-f relative"></div>
							<img src="images/elements/step1.svg" alt="">
							<h4 class="feat-head">Create Account</h4>
							<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed  dolor sit amet, adipis  dolor sit amet.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feat-box v2 text-center">
							<img src="images/elements/step2.svg" alt="">
							<h4 class="feat-head">Describe your System</h4>
							<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed  dolor sit amet, adipis  dolor sit amet.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feat-box v2 text-center">
							<img src="images/elements/step3.svg" alt="">
							<h4 class="feat-head">Automate Solution</h4>
							<p class="feat-desc">Lorem ipsum dolor sit amet, adipiscing elit. Integer tellus estt congue sed  dolor sit amet, adipis  dolor sit amet.</p>
						</div>
					</div>

				</div>
			</div>
		</section> -->

		<!-- <section class="about2 section_padding relative">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="about2-wrap relative"></div>
					</div>	
					<div class="box-shadow purple-bg col-md-10">
							<div class="row">
								<div class="col-md-6 no-pl col-sm-12 col-xs-12">
									<div class="about_img">
										<img src="images/about2.png" alt="about-img" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 no-pr">
									<div class="about_content_area custom">
										<h5 class="c-cyan has-before">Dedicated Artificial Intelligence</h5>
										<h3 class="w-text">Get Benefits of using latest Artificial Intelligence.</h3>
										<p class="g-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tellus est, finibus ut congue sed, faucibus ut</p>
										
										<div class="row mt-30">
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-1.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Fully Responsive & obile friendly</div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-2.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Clean &amp; Modern Design Layout</div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-3.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">Multi-Device Testing System </div>
			                                    </div>
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="side-feature-list-item">
			                                        <img src="images/elements/feature-4.svg" class="check-mark-icon" alt="">
			                                        <div class="foot-c-info">great User Experience</div>
			                                    </div>
			                                </div>
			                                
			                            </div>
			                            <div class="about_btn">
											<a href="#0" class="btn cyan-btn">contact Us</a>
										</div>
									</div>
								</div> 
								
							</div>
							
						</div>
				</div>
			</div>
		</section> -->

		<section class="section_padding pt_70 pb_70">
			<div class="container">
				<div class="section_heading text-center ">
					<h2>Creative Business Solutions</h2>
					<p>Website Convert in to Android App and Submit to Play Store.</p>
				</div>	
				
				<div class="row text-center">
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="feat-box v2 border-b text-center">
							<img src="images/elements/feat1.png" alt="">
							<p class="feat-desc">Fully Responsive.</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="feat-box v2 border-b text-center">
							<img src="images/elements/feat2.png" alt="">
							<p class="feat-desc">Creative Team.</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="feat-box v2 border-b text-center">
							<img src="images/elements/feat3.png" alt="">
							<p class="feat-desc">Awards Win.</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="feat-box v2 border-b text-center">
							<img src="images/elements/feat4.png" alt="">
							<p class="feat-desc">24/7 Support.</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="feat-box v2 border-b text-center">
							<img src="images/elements/feat5.png" alt="">
							<p class="feat-desc">Happy Clients.</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="feat-box v2 border-b text-center">
							<img src="images/elements/feat6.png" alt="">
							<p class="feat-desc">Fully Responsive.</p>
						</div>
					</div>

				</div>
			</div>
		</section>

		
		<!-- START SERVICE -->
		
		
	

		<section class="Contact-us section_padding relative" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="about2-wrap relative"></div>
					</div>	
					<div class="box-shadow col-md-10">
						<div class="row">
							<div class="col-md-6 no-pl col-sm-12 col-xs-12">
								<div class="about_img">
									<img src="images/about3.png" alt="about-img" />
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="about_content_area">
									<h5 class="blue">You Are Welcome to become our Client</h5>
									<h3>Contact Us Now!</h3>
									<div class="contact">
										<form id="" method="POST">
											<div class="row">
												<div class="input_padding text-center">
													<div class="form-group col-sm-12">
														<input type="text" name="name" class="form-control" placeholder="Name *" required="required">
													</div>
													<div class="form-group col-sm-12">
														<input type="email" name="email" class="form-control" placeholder="Email *" required="required">
													</div>
														<div class="form-group col-sm-12">
														<input type="number" name="Number" class="form-control" placeholder="Mobile Number *" required="required">
													</div>
													<div class="form-group col-sm-12">
														<input type="text" name="subject" class="form-control" placeholder="Subject *" required="required">
													</div>
													<div class="form-group col-sm-12 mab-none">
														<textarea rows="8" name="message" class="form-control" placeholder="Your Message Here ..." required="required"></textarea>
													</div>
													<div class="form-group mb0 col-sm-12">
														<div class="actions">
															<button type="submit" value="Send Your Message" name="submit" class="btn graen-btn" title="Click here to submit your message!">Send Your Message</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- START FOOTER -->
		<footer class="footer-sec">
			<div class="container">
				<div class="row text-center">
				
					<div class="col-md-8 col-md-offset-2 col-xs-12">
						<div class="sub_title">
							<a href="#"><span>Home</span> </a>
							<a href="#"><span>About Us</span></a>
							<a href="#"><span>Technology</span> </a>
							<a href="#"><span>Products</span> </a>
							<a href="#"><span>Services</span> </a>
						</div>
						<ul class="banner_social_link">					
							<li><a href="#00"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#0"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#0"><i class="fa fa-linkedin"></i></a></li>		
							<li><a href="#0"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#0"><i class="fa fa-behance"></i></a></li>
						</ul>

						<p class="w-text">CopyRight © 2023 All Rights Reserved</p>
					</div> <!-- END COL -->
				</div> <!--- END ROW -->	
			</div> <!--- END CONTAINER -->
		</footer>
		
		      <section class="gng">
         <div class="container confloatBtn">
            <div class="row p-0">
               <div class="col-md-6 col-sm-6 col-xs-6" style="padding:0">
                  <div class="callBtnFloat"><a href="tel:+18507455358" style="color:#fff"><i class="fa fa-phone"></i> Call Now</a></div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-6" style="padding:0">
                  <div class="whatsBtnFloat"><a href="https://wa.me/+18507455358" style="color:#fff"><i class="fa fa-whatsapp"></i> WhatsApp</a></div>
               </div>
            </div>
         </div>
      </section>
		<!-- END FOOTER -->
		
		<!-- Latest jQuery -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/modernizr-2.8.3.min.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/animated-headline.js"></script>
		<!--<script src="js/lightbox.min.js"></script>-->
		<script src="js/SmoothScroll.js"></script>
		<!--<script src="js/form-contact.js"></script>-->
		<script src="js/jquery.hoverdir.js"></script>
		<script src="js/scrolltopcontrol.js"></script>
		<script src="js/wow.min.js"></script>
		
		<script src="js/main.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
       <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 1,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
      1500:{
          slidesPerView : 3
      },

      992:{
          slidesPerView : 3
      },

      768:{
          slidesPerView : 2
      },

      625:{
          slidesPerView : 2,
          spaceBetween : 15,
      },

      0:{
          slidesPerView : 1
      }
    }
    });
  </script>
	</body>


<style type="text/css">
    
.serv {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    border-radius: 10px;
}
.sev-head {
    padding: 15px 0;
    text-align: center;
}
a.servbtn {
    line-height: 40px;
    padding: 10px 10px;
    background: #ff5d22;
    color: #fff;
    border: 1px dashed #fff;
    border-radius: 0.125rem;
}

.serv img {
    width: 100%;
}
</style>
</html>		