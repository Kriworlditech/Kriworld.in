
<?php

if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
     $mob = $_POST['mob'];
    $message1 = $_POST['message'];
  
  
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
<p><b>Mobile :</b> ".$mob."</p>
<p><b>Message:</b> ".$message1."</p>

</body>
</html>
";
       
         $header = "From:noreply@kriworld.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
       
         $retval = mail ($to,$subject,$message,$header);
  
  
       
}
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta name="theme-color" content="#9bd5fe">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <link rel="stylesheet" href="assets_new/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets_new/css/animate.min.css">
      <link rel="stylesheet" href="assets_new/css/boxicons.min.css">
      <link rel="stylesheet" href="assets_new/css/meanmenu.min.css">
      <link rel="stylesheet" href="assets_new/css/magnific-popup.min.css">
      <link rel="stylesheet" href="assets_new/css/style.css">
      <link rel="stylesheet" href="assets_new/css/responsive.css">
      <link rel="stylesheet" href="assets_new/css/stylee.css">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   
      <title>Home | Kriworld</title>
      <link rel="icon" type="image/png" href="assets_new/img/favicon.png">
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11301579940"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11301579940');
</script>
<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11301579940/MtNKCJOaz9IYEKTZgY0q'});
</script>

<style>
.single-pricing-box {
    height: 650px;
}
.section-title h2 {
       font-size: 40px !important;
}

.banner-animation .eight {
    display: none;
}

.banner-animation .two {
    display: none;
}


    @media only screen and (max-width: 600px){
        
.rs-banner.banner-style6 .content-wrap .rs-animated-heading .title-inner .title {
    font-size: 29px;
    
}
.rs-banner.banner-style6 .content-wrap {
    padding: 160px 0 150px;
}
.rs-banner.banner-style6 .content-wrap .rs-animated-heading .title-inner .cd-headline {
    margin-top: 28px;
}
.single-pricing-box {
    height: auto;
}
.about-content .content p {
  
    text-align: justify;
}
.cd-intro h1 {
    font-size: 42px !important;
    padding: 74px 0 0 0;
}
.cd-intro h2 {
    font-size: 38px !important;
    padding:0 0 74px 0 ;
}
.about-img {
    margin-top: 25px;
}
.rs-banner.banner-style6 .banner-animation .animate-style.three {
    right: 48%;
    top: 50%;
    max-width: 15px;
}
        .rs-banner.banner-style6 .content-wrap .rs-animated-heading .title-inner .cd-headline.clip span {
   
  font-size: 20px;
    line-height:40px;
    text-align:left !important;
}

.banner-animation .three {
    display: none;
}
.banner-animation .five {
    display: none;
}
.banner-animation .four {
    display: none;
}

.contact-text{
    padding-bottom: 5px!important;
}

.section-title2{
    padding-top: 50px!important;
     padding-bottom: 50px!important;

}
.about_image {
    display: none;
}
}
</style>
   </head>
   <body>
      <div class="navbar-area"> 
         <div class="tracer-responsive-nav">
            <div class="container">
               <div class="tracer-responsive-menu">
                  <div class="logo"><a href="https://kriworld.in/websitedesign.php"><img src="assets_new/img/logo.png" alt="logo"></a></div>
               </div>
            </div>
         </div>
         <div class="tracer-nav">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="https://kriworld.in/websitedesign.php"><img src="assets_new/img/logo.png" alt="logo"></a>
                  <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav">
                        <li class="nav-item"><a href="https://kriworld.in/websitedesign.php" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="https://kriworld.in/Seo/" class="nav-link">SEO</a></li>
                        <li class="nav-item"><a href="https://kriworld.in/mobile_app.php" class="nav-link">Mobile Apps</a></li>
                        <li class="nav-item">
                              <a href="https://kriworld.in/AI-development/" class="nav-link">AI Development </a>
                              <!--<ul class="dropdown-menu">-->
                              <!--  <li><a href="marketing_service.php">Marketing</a></li>-->
                              <!--  <li><a href="web_hosting.php">Web Hosting</a></li>-->
                              <!--  <li><a href="video_creation.php">Video Creation</a></li>-->
                              <!--  <li><a href="business_solution.php">Business Solution</a></li>-->
                              <!--</ul>-->
                            </li> 
                        <li class="nav-item">
                           <a href="https://kriworld.in/advertising/ecommerce.php" class="nav-link"> Ecommerce Development <i class="bx bx-chevron-down"></i></a>
                           <!-- <ul class="dropdown-menu">
                              <li class="nav-item"><a href="marketing_service.php" class="nav-link">Marketing</a></li>
                              <li class="nav-item"><a href="web_hosting.php" class="nav-link">Web Hosting</a></li>
                              <li class="nav-item"><a href="video_creation.php" class="nav-link">Video Creation</a></li>
                              <li class="nav-item"><a href="business_solution.php" class="nav-link">Business Solution</a></li>
                           </ul> -->
                        </li>
                        <li class="nav-item"><a href="https://kriworld.in/advertising/" class="nav-link"> Advertising</a></li>
                         <li class="nav-item"><a href="https://kriworld.in/earn/index.php" class="nav-link">Learn with earn</a></li>
                         <li class="nav-item">
                            <a href="https://kriworld.in/earn/game-development.php" class="nav-link">Game Development</a>
                          </li>
                       <!--  <li class="nav-item"><a href="career_s.php" class="nav-link">Career</a></li> -->
                     </ul>
                     <!--<div class="others-option d-flex align-items-center">-->
                     <!--   <div class="option-item"><a href="contact_us.php" class="default-btn"><i class="flaticon-right"></i>Contact Us<span></span></a></div>-->
                     <!--</div>-->
                  </div>
               </nav>
            </div>
         </div>
         <div class="others-option-for-responsive">
            <div class="container">
               <div class="dot-menu">
                  <div class="inner">
                     <div class="circle circle-one"></div>
                     <div class="circle circle-two"></div>
                     <div class="circle circle-three"></div>
                  </div>
               </div>
               <div class="container">
                  <div class="option-inner">
                     <div class="others-option">
                        <div class="option-item"><a href="contact_us.php" class="default-btn"><i class="flaticon-right"></i>Get Started<span></span></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- Banner Start -->
      <div class="rs-banner banner-style6">
        <div class="container">
          <div class="row y-middle">
            <div class="col-lg-7">
              <div class="content-wrap" style="padding-top: 150px">
                <div class="rs-animated-heading">
                  <div class="title-inner">
                    <!--<h2 class="title">-->
                    <!-- WE DO: -->
                        <!--<br />+<br /> Free Android App -->
                    <!--</h2>-->
                    <div class="cd-intro" style="position: relative;left: -10px;">
                        
                        <!--<h3 style=" color: #548a24; font-size: 54px;">Business Information Website + Android App just 7500 Rs</h3>-->
                        <!--<h2 class="cd-headline clip is-full-width" style="font-size: 46px;" >-->
                        <!--    Contact for more details at +91 9315578826-->
                        <!--</h2>-->
                      
                      
                        <h3 style=" color: #548a24; font-size: 40px;"> We Build Websites that Convert Visitors into Customers
                        </h3> <h3 style=" color: #548a24; font-size: 38px;">"Your Vision, Our Web Expertise"
                        </h3><a href="#cf" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility:visible;animation-duration:1000ms;animation-delay:200ms;animation-name:fadeInRight; margin-top:30px;    padding: 12px 25px 12px 25px;"><i class="flaticon-right"></i>Contact Now<span style="top: 48.501px; left: -0.640625px;"></span><br></a>
                        
                                                                </div>
                    <!-- cd-intro -->
                  </div>
                  
                </div>
                
              </div>
            </div>
            <div class="col-lg-5 websitedesign">
              <div class="main-img">
                <!--<img class="js-tilt" src="assets_new/img/winter.gif" alt="Images" />-->
                <img class="js-tilt" src="assets_new/img/websitedesign.jpg" alt="Images" />
              </div>
            </div>
          </div>
        </div>
        <div class="banner-animation">
          <!--<div class="animate-style one">-->
          <!--  <img-->
          <!--    class="scale"-->
          <!--    src="assets_new/img/win.png"-->
          <!--    alt="Images"-->
          <!--  />-->
          <!--</div>-->
          <div class="animate-style two">
            <img
              class="spine"
              src="assets_new/img/shape-2.png"
              alt="Images"
            />
          </div>
          <div class="animate-style three">
            <img
              class="scale"
              src="assets_new/img/shape-3.png"
              alt="Images"
            />
          </div>
          <div class="animate-style four">
            <img
              class="spine"
              src="assets_new/img/shape-4.png"
              alt="Images"
            />
          </div>
          <div class="animate-style five">
            <img
              class="scale"
              src="assets_new/img/shape-5.png"
              alt="Images"
            />
          </div>
          <div class="animate-style six">
            <img
              class="veritcal"
              src="assets_new/img/shape-6.png"
              alt="Images"
            />
          </div>
          <div class="animate-style seven">
            <img
              class="scale"
              src="assets_new/img/shape-4.png"
              alt="Images"
            />
          </div>
          <div class="animate-style eight">
            <img
              class="spine"
              src="assets_new/img/shape-7.png"
              alt="Images"
            />
          </div>
          <div class="animate-style nine">
            <img
              class="spine"
              src="assets_new/img/shape-1.png"
              alt="Images"
            />
          </div>
          <div class="animate-style ten">
            <img
              class="scale"
              src="assets_new/img/shape-5.png"
              alt="Images"
            />
          </div>
        </div>
      </div>
      <!-- Banner End -->
      
      
      
       <!-- about-us start -->
       <section class="about-area pb-100" style="background:#9bd5fe1f">
          <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12 about_image">
                  <div class="about-img"><img src="assets_new/img/about.gif" alt="image" loading="lazy"></div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="about-content">
                     <div class="content">
                        <span class="sub-title mt-2"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> About-Us</span>
                        <!--<h2>Stand out from the crowd – get a polished, custom website that’s 100% unique to your brand.</h2>-->
                        <p style="font-size:medium">I am the proud owner of Kriworld Itech Private Ltd, a web development business in Delhi, India. We specialize in creating high-quality, custom websites for our clients. We strive to provide the best customer experience possible and take great pride in our work. Our team of web developers is highly skilled and experienced in its craft, which allows us to deliver quality results. At Kriworld Itech Private Ltd, we understand that having a website is essential for any business. We strive to create a website that best reflects the business’s brand and identity. We provide a wide variety of services, such as e-commerce websites, content management systems, SEO, and more. Our team is also available to answer any questions and provide guidance on how to best optimize the website for maximum reach. We take the time to ensure that our clients are always satisfied with the results.</p>
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about-us End -->
<!--      <div class="it-services-banner">-->
<!--         <div class="container">-->
<!--            <div class="row align-items-center">-->
<!--               <div class="col-lg-6 col-md-12">-->
<!--                  <div class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">-->
<!--                     <div class="icon-bx-wraper center p-a30">-->
<!--                        <div style="text-align:center;margin-bottom:25px;margin-top:15px">-->
                        
<!--                        <video width="100%" height="300" controls autoplay>-->
<!--                          <source src="assets_new/img/home.mp4" type="video/mp4">-->
<!--                        </video></div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
             
			   
<!--			<div class="col-lg-6 col-md-12">-->
<!--			<div class="about-content">-->
<!--                     <div class="content"><br>-->
<!--                        <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> -->
<!--						We provide you complete services</span>-->
<!--                        <h3>Guaranteed Profits and earning from Website other wise 100% amount Refund.-->
<!--You start your online business without any risk and tension.</h3>-->
						
<!--						<p style="font-size:larger">What we will provide -</p>-->
<!--                        <ul class="about-listt himi mb-0">-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Your Business Information Website -->
<!--                              </span>-->
<!--                           </li>-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                               Website Convert in to Android App and Submit to Play Store.-->
<!--                              </span>-->
<!--                           </li>-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                 Your Website SEO so that people can easily search you on Google.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                 Your Business Listing to all Local Directories.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Social Media Pages - Facebook, Instagram,  and twitter connect with website.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  From all these services you will get leads for your business and <b>guaranteed profits</b> with in 1 months only otherwise 100% amount will be refundable.-->
<!--                              </span>-->
<!--                           </li>-->
						   
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Our Cost is all for this is just 15000 Rs but now New Year Offer 70% off so price is only 10,500 Rs now.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--                        </ul>-->
						
						 
<!--                     </div>-->
<!--                  </div>-->
<!--			</div>-->
			
			
             
<!--            </div>-->
			
<!--			<div class="row d-flex justify-content-center mt-2">-->
<!--               <div class="col-lg-8 col-md-8">-->
<!--                  <div class="btn-box mt-5 text-center" style="margin-bottom:25px"><a href="#" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility:visible;animation-duration:1000ms;animation-delay:200ms;animation-name:fadeInRight"><i class="flaticon-right"></i>Starts in just Rs 15,000 + Free Android App<span style="top:27px;left:-6px"></span><br></a></div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
      <section class="pricing-area pt-100 pb-70 bg-f4f7fe">
         <div class="container">
            <div class="section-title">
               <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> Our Services</span>
               <h2>We Provide Best Web Development<span class="overlay" style="transform:matrix(0,0,0,1,0,0);transform-origin:left 50% 0"></span></h2>
            </div>
            <div class="row">
                 <div class="col-lg-3 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3><img src="assets/img/icon/analytics.png" alt="image" loading="lazy"><br>Website development and maintenance</h3>
                     </div>
                     <hr>
                     <div class="pricing-features new">
                        <p>We have a team of web developers who carry decades of experience in building and maintaining innovative websites for a range of different industries. All the while, we engineer websites to come with the promise of low learnability, immersiveness, and high security.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3><img src="assets_new/img/icon/digital-campaign.png" alt="image" loading="lazy"><br>Content Marketing</h3>
                     </div>
                     <hr>
                     <div class="pricing-features new">
                        <p>A service that helps a website to create and distribute valuable, relevant, and consistent content to reach and engage their target audience while driving website traffic and leads.</p>
                        
                       
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                      
                         <h3><img src="assets/img/app-design.png" alt="image" loading="lazy"><br>Search Engine Optimization (SEO)</h3>
                     </div>
                     <hr>
                     <div class="pricing-features new">
                        <p>A service that helps a website to be more visible on search engines through the use of techniques that focus on improving the website’s visibility in organic search results.</p>
                       
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3><img src="assets/img/icon/shopping.png" alt="image" loading="lazy"><br>Social Media Marketing</h3>
                     </div>
                     <hr>
                     <div class="pricing-features new">
                        <p>A service that helps a website to build and maintain relationships with customers and potential customers via social media channels like Facebook, Twitter, and Instagram.</p>
                        
                     </div>
                  </div>
               </div>
              
              
            </div>
            <!--<div class="row d-flex justify-content-center mt-2">-->
            <!--   <div class="col-lg-8 col-md-8">-->
            <!--      <div class="btn-box mt-5 text-center" style="margin-bottom:25px"><a href="#" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility:visible;animation-duration:1000ms;animation-delay:200ms;animation-name:fadeInRight"><i class="flaticon-right"></i>eCommerce Website Development <span style="top:27px;left:-6px"></span><br></a></div>-->
            <!--   </div>-->
            <!--</div>-->
         </div>
      </section>
      
	  
<!--	  <section class="about-area pb-100" style="background:#fff">-->
<!--         <div class="container-fluid">-->
<!--            <div class="row align-items-center">-->
<!--               <div class="col-lg-6 col-md-12">-->
<!--                  <div class="about-img"><img src="assets_new/img/aaa.jpg" alt="image" loading="lazy"></div>-->
				  
				  
<!--               </div>-->
<!--               <div class="col-lg-6 col-md-12">-->
<!--                  <div class="about-content">-->
<!--                     <div class="content"><br>-->
<!--                        <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> -->
<!--						We provide you complete services</span>-->
<!--                        <h3>Guaranteed Profits and earning from Website other wise 100% amount Refund.-->
<!--You start your online business without any risk and tension.</h3>-->
						
<!--						<p style="font-size:larger">What we will provide -</p>-->
<!--                        <ul class="about-listt himi mb-0">-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Your Business Information Website -->
<!--                              </span>-->
<!--                           </li>-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                               Website Convert in to Android App and Submit to Play Store.-->
<!--                              </span>-->
<!--                           </li>-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                 Your Website SEO so that people can easily search you on Google.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                 Your Business Listing to all Local Directories.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Social Media Pages - Facebook, Instagram,  and twitter connect with website.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  From all these services you will get leads for your business and <b>guaranteed profits</b> with in 1 months only otherwise 100% amount will be refundable.-->
<!--                              </span>-->
<!--                           </li>-->
						   
						   
	<!--					    <li>-->
 <!--<span style=" color: tomato; font-weight: 900;">-->
 <!--                                <div class="icon"><i class="flaticon-tick"></i></div>-->
                                  <!--Our Cost is all for this is just 50,000 Rs but now New Year Offer 70% off so price is only 15,000 Rs now.-->
 <!--                             </span>-->
 <!--                          </li>-->
						   
<!--                        </ul>-->
						
						 
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
			   
			   
			   
<!--            </div>-->
			
			
<!--			   <div class="row d-flex justify-content-center mt-2">-->
<!--               <div class="col-lg-8 col-md-8">-->
<!--                  <div class="btn-box mt-5 text-center" style="margin-bottom:25px"><a href="#" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility:visible;animation-duration:1000ms;animation-delay:200ms;animation-name:fadeInRight"><i class="flaticon-right"></i>Call Now - 9315578826<span style="top: 62.6104px; left: 72.2656px;"></span><br></a></div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
      <section class="about-area pt-100 pb-100">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12">
                  <div class="our-mission-content" style="text-align: center;">
                     <div class="">
                        <span class="sub-title" style="text-align: center;"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy">Web Design</span>
                        <h2 style="text-align: center;">Our Services</h2>
                          <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/eco.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>eCommerce Development</h3>
                                        <a href="https://kriworld.in/advertising/ecommerce.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                               <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/moblie.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Moblie Apps</h3>
                                        <a href="https://kriworld.in/mobile_app.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/seo.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Seo Development</h3>
                                        <a href="https://kriworld.in/Seo/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/game.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Game Development</h3>
                                        <a href="https://kriworld.in/earn/game-development.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                               <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/learn.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Learn With Earn</h3>
                                        <a href="https://kriworld.in/earn/index.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/soft.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Software Development</h3>
                                        <a href="https://kriworld.in/earn/softwaredevelopment.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                            <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/web.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Web Development</h3>
                                        <a href="https://kriworld.in/websitedesign.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/grapic.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Graphic Design</h3>
                                        <a href="https://kriworld.in/graphic_design.php" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/advert.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Advertsing</h3>
                                        <a href="https://kriworld.in/advertising/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                                <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/cyber.jpg" alt="image" loading="lazy">
                                    <div class="sev-head">
                                        <h3>Cyber Security</h3>
                                        <a href="https://kriworld.in/Cybersecurity/" class="servbtn">Read more</a>
                                    </div>  
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="serv">
                                     <img src="assets_new/img/ai.jpg" alt="image" loading="lazy">
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
                  </div>
               </div>
               <!--<div class="col-lg-6 col-md-12">-->
               <!--   <div class="our-mission-image hnjnj"><img src="assets_new/img/digital.png" class="wow fadeInUp" alt="image" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility:visible;animation-duration:1500ms;animation-delay:300ms;animation-name:fadeInUp" loading="lazy"></div>-->
               <!--</div>-->
            </div>
         </div>
      </section>
	  
      <section class="about-area pt-100 pb-100">
         <div class="container-fluid">
            <div class="row align-items-center column-reverse">
               <div class="col-lg-6 col-md-12">
                  <div class="our-mission-content">
                     <div class="content">
                        <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy">Web Design</span>
                        <h2>Let us design your dream website</h2>
                        <p style="font-size:larger">Your website is the face of your business. A well-designed website puts your best foot forward, establishing credibility and authority with your potential clients, furthermore communicating your most interesting values, messages, and mission statements.</p>
                        <p style="font-size:larger">We provide a professional, local, and hands-on experience to build your Kriworld website design, or redesign, from start to finish. Whether your current website could use a refresh, facelift, or your business needs an entirely assets_new site built from scratch. We will craft the perfect design for your small to medium-sized business website.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="our-mission-image hnjnj"><img src="assets_new/img/digital.png" class="wow fadeInUp" alt="image" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility:visible;animation-duration:1500ms;animation-delay:300ms;animation-name:fadeInUp" loading="lazy"></div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-area pb-100" style="background:#9bd5fe1f">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12">
                  <div class="about-img"><img src="assets_new/img/aa.png" alt="image" loading="lazy"></div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="about-content">
                     <div class="content">
                        <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> A Stunning Website Designed From Scratch</span>
                        <h2>Stand out from the crowd – get a polished, custom website that’s 100% unique to your brand.</h2>
                        <p style="font-size:larger">Every business needs to be online. Stand out from the competition and make your brand look its best with stunning web page design. With Kriworld web design services, you'll get thoughtful, effective web page designs created by professionals.</p>
                        <ul class="about-list mb-0">
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Professional designers-all rated and reviewed
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Dozens of web design concepts to explore
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 A custom website design in about a week
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="pricing-area pt-100 pb-70 bg-f4f7fe">
         <div class="container">
            <div class="section-title">
               <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> Our Solutions</span>
               <h2>We work on all Latest Techmnology<br><span class="overlay"></span></h2>
               <!--<h1>70% off for All websites. <span class="overlay"></span></h1>-->
               
            </div>
            <!--<div class="row">-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/shopping.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Ecommerce Website <span class="text2">Price starting from - ₹30,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/online-dating.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Dating Website <span class="text2">Price starting from - ₹30,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/corporate.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Corporate Website <span class="text2">Price starting from - ₹30,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/responsive.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">IT Services Website <span class="text2">Price starting from - ₹15,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/grocery-store.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Grocery Website <span class="text2">Price starting from - ₹30,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/web-development.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Construction Website <span class="text2">Price starting from - ₹30,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/newlyweds.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Matrimonial Website <span class="text2">Price starting from - ₹40,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/travel.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Travel Website <span class="text2">Price starting from - ₹30,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/online-gaming.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Gaming Website <span class="text2">Price starting from - ₹40,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/digital-campaign.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Social Media Website <span class="text2">Price starting from - ₹15,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/analytics.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">Marketing Website <span class="text2">Price starting from - ₹15,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="col-xl-4 col-lg-6 col-md-6">-->
            <!--      <div class="our-focus__card-wrapper">-->
            <!--         <div class="our-focus__card d-flex">-->
            <!--            <img class="img-responsive ls-is-cached lazyloaded" src="assets_new/img/icon/school.png" id="img-host" loading="lazy">-->
            <!--            <h3 class="delta">School Management Website <span class="text2">Price starting from - ₹15,000 + Free Android app</span></h3>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--</div>-->
            <!--<div class="row d-flex justify-content-center mt-5">-->
            <!--   <div class="col-lg-8 col-md-8">-->
            <!--      <div class="hmk mb-0">-->
            <!--         <h1 class="text-center">The technologies on which we work -</h1>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--</div>-->
            <div class="row d-flex justify-content-center mt-2">
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Html
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Css
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Javascript
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Php
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Asp.net
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Bootstrap
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        React
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Python
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Angular
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Laravel
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Vue.js
                     </span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="kmj">
                     <span>
                        <div class="icon"><i class="flaticon-tick"></i></div>
                        Express.js
                     </span>
                  </div>
               </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
               <div class="col-lg-8 col-md-8">
                  <div class="btn-box mt-5 text-center" style="margin-bottom:25px"><a href="#" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility:visible;animation-duration:1000ms;animation-delay:200ms;animation-name:fadeInRight"><i class="flaticon-right"></i>Dynamic Website  + Free Android App<span style="top:27px;left:-6px"></span><br></a></div>
               </div>
            </div>
            <div class="row d-none">
               <div class="col-lg-6 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3>Plan 1 <img src="assets_new/img/code.png" alt="image" loading="lazy"></h3>
                     </div>
                     <div class="price">
                        <h4>Business website Rs.<strong><span class="ft">3000</span></strong><br></h4>
                     </div>
                     <div class="pricing-features">
                        <p>Including Domain</p>
                        <p>Hosting</p>
                        <p>1 GB Storage</p>
                        <p>SSL Certificate</p>
                        <p>1 Year Support</p>
                        <p>5 Pages (Basic Design)</p>
                        <span id="text">
                           <p>About</p>
                           <p>Services</p>
                           <p>WordPress technology (on Pre-built template)</p>
                           <p>Products catalogue</p>
                           <p>Team</p>
                           <p>Utility</p>
                           <p>Blog</p>
                           <p>Portfolios</p>
                           <ul>
                              <li style="margin-bottom:15px">Contact Form</li>
                              <li style="margin-bottom:15px">Whats app chat button ,Call button</li>
                              <li style="margin-bottom:15px">Fully Responsive: Compatible with all screen resolutions.</li>
                              <li style="margin-bottom:15px">Coding Standard: All code follow coding standards PSR-2 and best practices.</li>
                              <li style="margin-bottom:15px">Suitable for all business like -Prebuilt websites Agency Construction Landscaping Flat APP Corporate Tattoo Shop Medical Travel Hotel Real Estate Kindergarten Medical Shipping / Trucking / Logistics Moving Band / DJ / Musician Resume Minimal Lawyer Freelancer Gym / Fitness / Crossfit Restaurant App Spa Hosting Landscaper Interior Designer Barber Bakery Outdoor Adventure Many more!</li>
                           </ul>
                        </span>
                        <button id="toggle">Read More</button>
                     </div>
                     <div class="btn-box"><a class="default-btn" href="https://www.instamojo.com/@kriworld/lb1f4e41cfffd4416acb686b9fc6ae9d3" target="_blank"><i class="flaticon-right"></i>Buy Plan Now<span></span></a></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3>Plan 2 <img src="assets_new/img/online-shop.png" alt="image" loading="lazy"></h3>
                     </div>
                     <div class="price">
                        <h4>eCommerce website on wordpress Rs.<strong><span class="ft">6000</span></strong><br></h4>
                     </div>
                     <div class="pricing-features">
                        <p>Domain for 1 year</p>
                        <p>Hosting space 5 GB (validity 1 year)</p>
                        <p>1 year technical support</p>
                        <p>Normal Logo Design</p>
                        <p>Responsive (Mobile friendly)</p>
                        <p>SSL Certificate</p>
                        <span id="text1">
                           <p>WordPress technology (on Pre-built template)</p>
                           <p>SEO Friendly website</p>
                           <p>5 GB Bandwidth</p>
                           <p>Scope of work:</p>
                           <ul class="himikk">
                              <li style="margin-bottom:15px">User login/registration</li>
                              <li style="margin-bottom:15px">Add/edit categories</li>
                              <li style="margin-bottom:15px">Add Coupon code</li>
                              <li style="margin-bottom:15px">Add 10 products & rest admin can add</li>
                              <li style="margin-bottom:15px">Product add to cart & checkout</li>
                              <li style="margin-bottom:15px">Enquiry submit</li>
                              <li style="margin-bottom:15px">1 Payment Gateway integration</li>
                           </ul>
                        </span>
                        <button id="toggle1">Read More</button>
                     </div>
                     <div class="btn-box"><a class="default-btn" href="https://www.instamojo.com/@kriworld/l0f925b27ce374be88766a5ff3c841ccf/" target="_blank"><i class="flaticon-right"></i> Buy Plan Now<span></span></a></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3>Plan 3 <img src="assets_new/img/online-shop.png" alt="image" loading="lazy"></h3>
                     </div>
                     <div class="price">
                        <h4>Convert your website into android app Rs.<strong><span class="ft">30000</span></strong><br></h4>
                     </div>
                     <div class="pricing-features">
                        <p>Same Website Design</p>
                        <p>Same Website Database</p>
                        <p>Rs 3000 extra for publishing in play store account (Exclude play store account)</p>
                     </div>
                     <div class="btn-box"><a class="default-btn" href="https://www.instamojo.com/@kriworld/l60158794fd6c4693bb4fa84d1d304ba7/" target="_blank"><i class="flaticon-right"></i> Buy Plan Now<span></span></a></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="single-pricing-box">
                     <div class="pricing-header">
                        <h3>Plan 4 <img src="assets_new/img/questions.png" alt="image" loading="lazy"></h3>
                     </div>
                     <div class="price">
                        <h4>Any other custom website or mobile app ?</h4>
                     </div>
                     <div class="pricing-features">
                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                              <p>Dating</p>
                              <p>Social media</p>
                              <p style="margin-bottom:15px">School management</p>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <p style="margin-bottom:15px">Travel website</p>
                              <p style="margin-bottom:15px">Gaming website</p>
                              <p style="margin-bottom:15px">Marketing website</p>
                           </div>
                           <div class="col-lg-12 col-md-12">
                              <p style="margin-bottom:0" class="text-center"><b>Call for best price.</b></p>
                           </div>
                        </div>
                     </div>
                     <div class="btn-box"><a class="default-btn" href="tel:+919315578826"><i class="bx bx-phone-call"></i>+919315578826<span></span></a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="about-area pt-100 pb-100">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12">
                  <div class="about-img"><img src="assets_new/img/img6.png" alt="image" loading="lazy"></div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="about-content">
                     <div class="content">
                        <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> Services</span>
                        <h2>Start Your Website With Kriworld Itech Private Limited</h2>
                        <ul class="about-list mb-0">
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Responsive Website Design
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Information Architecture Design
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Easy-To-Use
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 User Experience Design
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Website Content Strategy
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Cross Browser and Platform Testing
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Maintenance
                              </span>
                           </li>
                           <li>
                              <span>
                                 <div class="icon"><i class="flaticon-tick"></i></div>
                                 Installation & Setup
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  
<!--	  <section class="about-area pb-100" style="background:#fff">-->
<!--         <div class="container-fluid">-->
<!--            <div class="row align-items-center">-->
              
<!--               <div class="col-lg-6 col-md-12">-->
<!--                  <div class="about-content">-->
<!--                     <div class="content"><br>-->
<!--                        <span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> -->
<!--						We provide you complete services</span>-->
<!--                        <h3>Guaranteed Profits and earning from Website other wise 100% amount Refund.-->
<!--You start your online business without any risk and tension.</h3>-->
						
<!--						<p style="font-size:larger">What we will provide -</p>-->
<!--                        <ul class="about-listt himi mb-0">-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Your Business Information Website -->
<!--                              </span>-->
<!--                           </li>-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                               Website Convert in to Android App and Submit to Play Store.-->
<!--                              </span>-->
<!--                           </li>-->
<!--                           <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                 Your Website SEO so that people can easily search you on Google.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                 Your Business Listing to all Local Directories.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  Social Media Pages - Facebook, Instagram,  and twitter connect with website.-->
<!--                              </span>-->
<!--                           </li>-->
						   
<!--						    <li>-->
<!--                              <span>-->
<!--                                 <div class="icon"><i class="flaticon-tick"></i></div>-->
<!--                                  From all these services you will get leads for your business and <b>guaranteed profits</b> with in 1 months only otherwise 100% amount will be refundable.-->
<!--                              </span>-->
<!--                           </li>-->
						   
						   
						    <!--<li>-->
          <!--                    <span style=" color: tomato; font-weight: 900;">-->
          <!--                       <div class="icon"><i class="flaticon-tick"></i></div>-->
          <!--                         Our Cost is all for this is just 50,000 Rs but now New Year Offer 70% off so price is only 15,000 Rs now.-->
          <!--                    </span>-->
          <!--                 </li>-->
						   
<!--                        </ul>-->
						
						 
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--			    <div class="col-lg-6 col-md-12">-->
<!--                  <div class="about-img"><img src="assets_new/img/money.jpg" alt="image" loading="lazy"></div>-->
				  
				  
<!--               </div>-->
			   
			   
<!--            </div>-->
			
			
<!--			   <div class="row d-flex justify-content-center mt-2">-->
<!--               <div class="col-lg-8 col-md-8">-->
<!--                  <div class="btn-box mt-5 text-center" style="margin-bottom:25px"><a href="#" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility:visible;animation-duration:1000ms;animation-delay:200ms;animation-name:fadeInRight"><i class="flaticon-right"></i>Call Now - 9315578826<span style="top: 62.6104px; left: 72.2656px;"></span><br></a></div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
	  
	  
	  <section class="pricing-area pt-100 pb-70 bg-f4f7fe">
         <div class="container " style="min-width: 80%">
            <div class="section-title section-title2 pt-5 pb-5" style="margin: 0px!important;width: 100%!important;max-width: 100%!important">
               <!--<span class="sub-title"><img src="assets_new/img/star-icon.png" alt="image" loading="lazy"> Our Solutions</span>-->
               <!--<h1>70% off for All websites. <span class="overlay"></span></h1>-->
               <h2 class="pb-2" style="color: black">Have questions or ideas about your website project?</h2>
               <h2 class="pb-3" style="font-size: 38px;color: black">We're just a click away!</h2>
               <h2 class="pb-3" style="font-size: 38px;color: black">Contact us today, and let's turn your web dreams into reality.</h2>
               <!--<h3 class="pb-2">Contact now  +918383891889 (whats app also available) </h3>-->
               <!--<h3 class="pb-2">or email - harish@kriworld.in</h3>-->
               <!--<h3 class="pb-2">We will Happy to listen you.</h3>-->
               
            </div>
           
            
        </div>
      </section>
      
      
      <div class="contact-form-part mb-60" id="cf">
         <div class="container">
            <div class="row md-col-padding">
               <div class="col-md-5 custom1">
                  <div class="img-partt" style="margin-top:25%"><img src="assets_new/img/left-img.png" width="450" loading="lazy"></div>
               </div>
               <div class="col-md-7 custom2 pb-100">
                  <div id="form-messages"></div>
                  <form id="contact-form" method="POST" action="">
                     <div class="sec-title mb-53 md-mb-42">
                        <!--<div class="sub-title white-color">For Any Query</div>-->
                        <!--<h2 class="title white-color mb-0">Contact us for best price</h2>-->
                        <!--<div class="sub-title white-color">Claim Your Free Website</div>-->
                        <h2 class="title white-color mb-0">Contact Us for Project Disscussion</h2>
                     </div>
                     <div class="row">
                        <div class="col-md-6"><input name="name" placeholder="Name"></div>
                        <div class="col-md-6"><input name="mob" placeholder="Mobile No."></div>
                        <div class="col-md-12"><input type="email" name="email" placeholder="E-mail"></div>
                        <div class="col-md-12"><textarea name="message" placeholder="Your Message Here"></textarea></div>
                        <div class="col-md-12"><button type="submit" name="submit" class="readon modify">Submit Now</button></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer-area bg-color">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <a href="index.php" class="logo"><img src="assets_new/img/logo.png" alt="logo" loading="lazy"></a>
                     <p>Kriworld Itech Private Ltd is a leading web development business in Delhi, India. With years of experience and expertise in the field, we provide custom web solutions tailored to the needs of each client. Our services include website design, development, hosting, maintenance, and digital marketing. Let us help you build the perfect website for your business.</p>
                  </div>
                  <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Certificate</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <img src="assets/img/foter.jpg" class="img-fluid">
                                    <ul>
                                        <li><a href="">(CIN) U93030HR2018PTC073662
                                        </a></li>
                                        <li><a href="">Registration number is 73662</a></li>
                                        
                                      
                                    </ul>
                                <!-- End form -->
                            </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="single-footer-widget pl-4">
                     <h3>Explore</h3>
                     <ul class="footer-links-list">
                       <li><a href="https://kriworld.in/advertising/ecommerce.php"><i class="fa fa-angle-double-right"></i> eCommerce Development</a></li>

                                        <li><a href="https://kriworld.in/Seo/"><i class="fa fa-angle-double-right"></i> Seo Development</a></li>
<!-- 
                                        <li><a href="https://eworld7.com/it-managed-services/"><i class="fa fa-angle-double-right"></i> It Managed Services</a></li> -->

                                        <li><a href="https://kriworld.in/advertising/"><i class="fa fa-angle-double-right"></i> Advertising</a></li>
                                        <li>
                                        <a href="https://kriworld.in/mobile_app.php">
                                            <i class="fa fa-angle-double-right"></i> Mobile App Development</a>
                                         </li>
                                          <li>
                                        <a href="https://kriworld.in/earn/softwaredevelopment.php">
                                            <i class="fa fa-angle-double-right"></i> Software Development</a>
                                         </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h3>Address</h3>
                     <ul class="footer-contact-info">
                        <li><i class="bx bx-map"></i> 4400 Bayou Blvd<br>Pensacola <br>FL 32503</li>
                        <li><i class="bx bx-phone-call"></i><a href="tel:+18507455358">+1 (850) 745-5358</a></li>
                        
                       <!-- <li><i class="bx bx-map"></i> Kriworld Itech Private Ltd<br>Sarai Khwaja Faridabad<br>Delhi NCR</li>
                        <li><i class="bx bx-phone-call"></i><a href="tel:+919315578826">+919315578826</a></li>-->
                        
                        <li><i class="bx bx-envelope"></i><a href="mailto:harish@kriworld.in">harish@kriworld.in</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer-bottom-area">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6">
                     <p><i class="bx bx-copyright"></i>2020 <a target="_blank" href="#">kriworld</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <ul>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="Term_and_conditions.php">Terms & Conditions</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-map"><img src="assets_new/img/footer-map.png" alt="image"></div>
      </footer>
      <section class="gng">
         <div class="container confloatBtn">
            <div class="row p-0">
               <div class="col-lg-6 col-6" style="padding:0">
                  <div class="callBtnFloat"><a href="tel:+18507455358" style="color:#fff"><i class="fa fa-phone"></i> Call Now</a></div>
               </div>
               <div class="col-lg-6 col-6" style="padding:0">
                  <div class="whatsBtnFloat"><a href="https://wa.me/+18507455358" style="color:#fff"><i class="fa fa-whatsapp"></i> WhatsApp</a></div>
               </div>
            </div>
         </div>
      </section>
      <div class="go-top"><i class="flaticon-up"></i></div>
      <script src="assets_new/js/jquery.min.js"></script><script src="assets_new/js/popper.min.js"></script><script src="assets_new/js/bootstrap.min.js"></script><script src="assets_new/js/magnific-popup.min.js"></script><script src="assets_new/js/meanmenu.min.js"></script><script src="assets_new/js/sticky-sidebar.min.js"></script><script src="assets_new/js/wow.min.js"></script><script src="assets_new/js/main.js"></script>
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
   <style>.single-pricing-box .price{color:#221638;-webkit-transition:.5s;transition:.5s;padding:10px 11px 5px;border-top:2px solid #f4f5fe;border-bottom:2px solid #f4f5fe;font-size:40px;font-weight:900;height:auto!important}.bg-f4f7fe{background-color:#9bd5fe}.pd-15{padding:20px 15px}.contact-form-part .img-part{height:590px;background:url(assets/img/left-img.gif);background-size:cover;background-repeat:no-repeat;background-position:center center}.contact-form-part form{background:#67c27c;padding:72px 70px 94px}.contact-form-part form input,.contact-form-part form textarea{width:100%;border:none;outline:0;margin-bottom:30px;color:#75797e;background:#fff52;font-size:16px;padding:11px 20px;background:#fff}.sec-title .sub-title{font-family:Poppins,sans-serif;font-weight:500;text-transform:uppercase;margin-bottom:8px}.white-color{color:#fff!important}.contact-form-part form button{background:#fff;color:#67c27c;font-weight:400;font-family:Roboto,sans-serif}.readon.modify{padding:13px 32px}.readon{outline:0;padding:15px 29px;border:none;border-radius:3px;display:inline-block;text-transform:uppercase;font-size:16px;font-family:Poppins,sans-serif;font-weight:500;color:#fff;background:#67c27c;transition:all .3s ease}.mb-53{margin-bottom:53px}.single-pricing-box h5{font-weight:500;font-size:20px;padding:11px}@media only screen and (max-width:991px){.md-col-padding>[class*=col-],.md-pl-pr-15{padding-right:15px!important;padding-left:15px!important}}@media only screen and (max-width:480px){.contact-form-part form{padding:42px 15px 50px!important}}#text{display:none}#text1{display:none}#text11{display:none}#text2{display:none}.pricing-features p{font-size:17px}button#toggle{position:relative;display:inline-block;text-align:center;overflow:hidden;z-index:1;border:double;color:#fff;background-color:#061190;-webkit-transition:.5s;transition:.5s;border-radius:5px;padding:5px 11px 5px 11px;font-weight:700;font-size:16px}button#toggle1{position:relative;display:inline-block;text-align:center;overflow:hidden;z-index:1;border:double;color:#fff;background-color:#061190;-webkit-transition:.5s;transition:.5s;border-radius:5px;padding:5px 11px 5px 11px;font-weight:700;font-size:16px}button#toggle11{position:relative;display:inline-block;text-align:center;overflow:hidden;z-index:1;border:double;color:#fff;background-color:#061190;-webkit-transition:.5s;transition:.5s;border-radius:5px;padding:5px 11px 5px 11px;font-weight:700;font-size:16px}button#toggle2{position:relative;display:inline-block;text-align:center;overflow:hidden;z-index:1;border:double;color:#fff;background-color:#061190;-webkit-transition:.5s;transition:.5s;border-radius:5px;padding:5px 11px 5px 11px;font-weight:700;font-size:16px}span.ft{font-size:35px}h4{font-family:Overpass Bold,Arial,sans-serif;font-weight:400}@media only screen and (max-width:425px){.column-reverse{flex-direction:column-reverse}}.kmj span{display:block;position:relative;-webkit-box-shadow:0 0 10px rgb(0 0 0 / 22%);box-shadow:0 0 10px rgb(0 0 0 / 22%);padding:20px 15px 20px 68px;border-radius:5px;z-index:1;background-color:#fff;font-size:17px;font-weight:800;margin-top:15px}.kmj span .icon{position:absolute;left:15px;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);border-radius:3px;width:40px;height:40px;line-height:41px;text-align:center;-webkit-transition:.5s;transition:.5s;background-color:#deecf4;font-size:20px}.our-focus__card{align-items:center;background:#fff;border-radius:.55556rem;box-shadow:0 .11111rem .22222rem 0 rgb(0 52 61 / 15%);display:flex;height:100%;overflow:hidden;padding:1.11111rem .88889rem;margin-top:15px}.main-banner-content h1{font-size:32px}h3.delta{margin:0 15px}span.text2{display:block;font-weight:400;font-size:16px}@media only screen and (max-width:768px){.contact-form-part form{background:#67c27c;padding:50px 33px 60px}.q8c6tt-2.jxPOhn{display:none}a.sc-7dvmpp-1.dfBDQI{display:none}}@media only screen and (max-width:375px){.h3,h3{font-size:1.5rem}.our-focus__card.d-flex img{width:30%}}h3.delta{margin:0 15px;font-size:20px;padding-top:5px}
   .it-services-banner {
    position: relative;
    z-index: 1;
    background-color: #ff5d220f;
    /* background-image: url(../img/33.jpg); */
    background-position: bottom center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 125px;
    /* padding-bottom: 77px; */
}
.section-title h2 .overlay {
    position: absolute;
    left: 0;
    top: 0;
    background-color: #221638;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.section-title h2 {
    margin-bottom: 0;
    position: relative;
    display: inline-block;
    font-size: 44px;
    color: #fff;
    z-index: 3;
}


.about-content .content .about-list.himi li {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%!important;
    flex: 0 0 100%!important; 
    max-width: 100%!important;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 30px;
}

ul.about-listt.himi li {
    list-style: auto;
    color: #000;
    font-weight: 600;
}
.serv {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    border-radius: 10px;
}
.sev-head {
    padding: 15px 0;
}
a.servbtn {
    line-height: 40px;
    padding: 10px 10px;
    background: #ff5d22;
    color: #fff;
    border: 1px dashed #fff;
    border-radius: 0.125rem;
}
   </style>
</html>