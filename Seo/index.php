<!doctype html>
<html lang="en">


<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Title- -->
    <title>Kriworld - SEO, Social Media</title>

    <!-- CSS
   ==================================================== -->
    <!--Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Iconic Fonts -->
    <link rel="stylesheet" href="css/icofonts.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owlcarousel.min.css" />

    <!-- Video Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!--Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Global site tag (gtag.js) - Google Ads: 835132478 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-835132478"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-835132478');
</script>
<style>
    .column-title {
    font-size: 26px;
    display: block;
}
.lead {
    font-size: 2.25rem;
    font-weight: 300;
}
</style>
</head>

<body>
    
<?php

if(isset($_POST['submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
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
    <div class="search-bar">
        <i class="fa fa-close"></i>
        <form class="search-bar-fixed" action="#">
            <input type="text" placeholder="search...">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <!--End Search bar -->

    <div class="offcanvas-menu">
        <div class="offcanvas-menu-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="offcanvas-wrapper">
                        <div class="offcanvas-inner">
                            <a href="https://kriworld.in/websitedesign.php" class="logo">
                                <img src="images/logo/logo.png" alt="">
                            </a>
                            <p>Start working with an company that can provide everything you need to generate awareness, drive
                                traffic, connect with customers, and increase sales montes, nascetur ridiculus mus</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-us">
                                        <div class="contact-icon">
                                            <i class="icon icon-map2"></i>
                                        </div>
                                        <!-- End contact Icon -->
                                        <div class="contact-info">
                                            <h3>New York, USA</h3>
                                            <p>1010 Grand Avenue</p>
                                        </div>
                                        <!-- End Contact Info -->
                                    </div>
                                    <!-- End Contact Us -->
                                </div>
                                <!-- End Col -->
                                <div class="col-md-12">
                                    <div class="contact-us">
                                        <div class="contact-icon">
                                            <i class="icon icon-phone3"></i>
                                        </div>
                                        <!-- End contact Icon -->
                                        <div class="contact-info">
                                            <h3>009-215-5596</h3>
                                            <p>Give us a call</p>
                                        </div>
                                        <!-- End Contact Info -->
                                    </div>
                                    <!-- End Contact Us -->
                                </div>
                                <!-- End Col -->
                                <div class="col-md-12">
                                    <div class="contact-us">
                                        <div class="contact-icon">
                                            <i class="icon icon-envelope2"></i>
                                        </div>
                                        <!-- End contact Icon -->
                                        <div class="contact-info">
                                            <h3><a href="http://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c010d05002c09140d011c0009420f0301">[email&#160;protected]</a></h3>
                                            <p>24/7 online support</p>
                                        </div>
                                        <!-- End Contact Info -->
                                    </div>
                                    <!-- End Contact Us -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Contact Row -->
                            <div class="footer-social-link">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-subscribe">
                                <h3>
                                    Subscribe
                                    <span class="noanimate-border"></span>
                                </h3>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col tw-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Offcanvas inner end -->
                        <button class="menu-close-btn">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                    <!-- Offcanvas wrapper end -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Off canvas menu End -->




      <!-- header======================-->
    <header>
        <div class="tw-head tw-transparent">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand tw-nav-brand" href="https://kriworld.in/websitedesign.php">
                        <img src="images/logo/logo.png" alt="seobin">
                         <p style="margin: 0; font-weight: 700; color: #000;">Kriworld Itech Private Ltd.</p>
                                <p style="margin: 0; font-weight: 700;  color: #000;">Registration no : 73662</p>

                    </a>
                    <!-- End of Navbar Brand -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- End of Navbar toggler -->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                       <ul class="navbar-nav">
                     <li class="nav-item dropdown active">
                        <a class="nav-link" href="https://kriworld.in/websitedesign.php">Home</a>
                     
                        <!-- End of Dropdown menu -->
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="https://kriworld.in/Seo/">Seo</a>
                        <!-- End of Dropdown menu -->
                     </li>
                     <!-- End Dropdown -->
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="https://kriworld.in/mobile_app.php">Mobile Apps</a>
                       
                        <!-- End of Dropdown menu -->
                     </li>
                     <!-- End Dropdown -->
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="https://kriworld.in/advertising/ecommerce.php">Ecommerce Development</a>
                      
                        <!-- End of Dropdown menu -->
                     </li>
                     <!-- End Dropdown -->
                     <li class="nav-item dropdown tw-megamenu-wrapper">
                        <a class="nav-link" href="https://kriworld.in/advertising/">Advertising</a>
               
                        <!-- End of Mega menu -->
                     </li>
                     <!-- End MegaMenu -->
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="https://kriworld.in/earn/index.php">Learn with earn</a>
                      <!--   <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="">IT Managed Service</a></li>
                        </ul> -->
                        <!-- End of Dropdown menu -->
                     </li>
                     <!-- End Dropdown -->
                     <li class="nav-item"><a class="nav-link" href="https://kriworld.in/earn/game-development.php">Game Development</a></li>
                  </ul>
                        <!-- End Navbar Nav -->
                    </div>
                    <!-- End off canvas menu -->
                </nav>
                <!-- End of Nav -->
            </div>
            <!-- End of Container -->
        </div>
        <!-- End tw head -->
    </header>
    <!-- End of Header area=-->

<section id="tw-intro" class="tw-intro-area pt-150 position-relative">
      <div class="container">
         <div class="row">
                <!-- End Col -->
            <div class="col-lg-5 ml-auto col-md-12 wow fadeInRight" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRight;">
               <h2 class="column-title">WE DO Complete Seo:</h2>
               <span class="animate-border tw-mb-40"></span>
               
               <h4 class="column-title"> 1. Meta tag<br>
               2. Site title<br>
               3. h1 tags<br>
               4. h2 tags<br>
               5. html coding<br>
               6. Php coding<br>
               7. Content<br>
               8. Internal links<br>
               9. Image alt tag<br>
               10. Webmaster tools from Google<br>
               11. Off page seo<br>
               12. Blog writing</h4>
               
               <!-- End Intro list -->
              
               <!-- Default Round Btn -->
               <a href="tel:+18507455358" class="btn btn-secondary">contact us</a>
            </div>
            <!-- End Col -->

            <div class="col-lg-6 col-md-12 text-lg-right text-md-center wow fadeInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
                <div class="position-relative">
               <img src="images/about/hero-offer-img1.svg" alt="" class="img-fluid">
               <div class="offer-tag text-center">
                            <!--<div class="ribbon-2">-->
                            <!--    <span>Winter Offer</span>-->
                            <!--</div>-->
                            <div class="offer-price-tag">
                                <p class="lead mb-0">We are</p>
                                <span></span>Seo<small>Expert</small>
                                
                            </div>
                            <a href="tel:+918383891889" class="btn outline-white-btn">Get Start Now</a>
                        </div>
               </div>
            </div>
         
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
      <div class="banner-animation">
         
         
         
          <div class="animate-style four">
            <img class="spine" src="images/about/thumbnail.gif" alt="Images" width="100%">
          </div>
         
          <!--<div class="animate-style six">-->
          <!--  <img class="scale" src="images/about/win.png" alt="Images" width="100%">-->
          <!--</div>-->
         
          <div class="animate-style eight">
            <img class="spine" src="images/about/winter.gif" alt="Images" width="100%">
          </div>
          
         
        </div>
   </section>
    <!-- Start hero  -->
    <div class="tw-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10">
                            <!-- <h1 class="tw-slider-subtitle">Google Ads Management Service</h1> -->
                            <h4 class="tw-slider-title">Experts at (SEO ) 
                                <span>Search Engine Optimization</span>
                            </h4>
                            <h1 class="tw-slider-subtitle">Rely on the expertise and resources of Kriworld to make your Search Engine Optimization grow your business.</h1>

                        </div>
                        <!-- End Col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Carousel -->


    <section id="tw-features" class="tw-featured">
        <div class="container">
            <div class="row bar1">

                <div class="col-lg-5 col-md-12 text-lg-right text-md-center wow fadeInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
                    <img src="images/about/about_color_img.png" alt="" class="img-fluid">
                </div>
                <!-- End Col -->
                <div class="col-lg-6 ml-auto align-self-center col-md-12 wow fadeInRight" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRight;">
                    <h2 class="column-title light">Search Engine Optimisation (SEO)</h2>
                    <p>
                        SEO is the practice of improving the ranking of your website on searches for related keywords. That is to say, "Getting to the top of the page on Google" is only attainable over time, and only when you know which keywords you are aiming to rank for. So, anyone who promises to put your site in the number one spot in no time is probably only after your wallet.
                    </p>
                    <p>To optimise for search engines, you need to improve your site on a wide variety of metrics used to rank websites. Unfortunately, the exact algorithm is a well-kept secret and changes over time. However, proven best practices include focusing on the site content, how fast it loads, as well as links from other quality websites.</p>
                    <p>We know this takes a lot of time and effort, but it's necessary. To help, we've partnered with marketgoo. It's an SEO analysis tool that offers a simple solution. It analyses your website and gives you an easy-to-follow list of recommendations.</p>

                    <!-- End Intro list -->
                  <!--   <a href="#" class="btn btn-primary">learn more</a> -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End Features section -->

   <section id="tw-features" class="tw-features-area">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <h2 class="column-title text-md-right text-sm-center">We will also provide  <br/>SEO, we will work on 10 keywords!</h2>
            </div>
            <!-- Col End -->
            <div class="col-md-7 ml-md-auto">
               <p class="features-text">These keywords ranking will start after 1 months.
                  <br/> We will work on page seo -</p>
            </div>
            <!-- Col End -->
         </div>
         <!-- End Row 1 -->
         <div class="tw-mt-60"></div>
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="features-box">
                  <div class="features-icon d-table">
                     <div class="features-icon-inner d-table-cell">
                        <img src="images/icon/feature1.png" alt="">
                     </div>
                     <!-- End Features icon inner -->
                  </div>
                  <!-- End Features Icon -->
                  <h3>Meta tag</h3>
                  <p>Meta tags are pieces of information you use to tell the search engines and those viewing your site more about your page and the information it contains. Meta tags include: Title tags: the title of your page, which should be unique for every website. The site title is the name of your site, which could be your own name, a business's name, the name of your blog, or your personal brand. The site title usually appears in the header or top corner of each page of your site.
                  </p>
                  <h3>Site title </h3>
                  <p>The site title is the name of your site, which could be your own name, a business's name, the name of your blog, or your personal brand. The site title usually appears in the header or top corner of each page of your site.</p>
                  <h3>h1 tags  </h3>
                  <p>Main keywords and subject matter, what the overall post is about.</p>
                  <h3>h2 tags </h3>
                  <p>Sections to break up content, using similar keywords to the H1 tag.</p>
                  <h3>html coding </h3>
                  <p>The HTML coding is used to define a piece of computer code. The content inside is displayed in the browser's default monospace font.</p>
                  <h3>Php coding </h3>
                  <p>- PHP (Hypertext Preprocessor) is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites.</p>
                  <h3>Content </h3>
                  <p>Content SEO refers to creating content that helps your web pages to rank high in the search engines</p>
                  <h3>Internal links </h3>
                  <p>An internal link is a link from one page to another page on the same domain</p>
                  <h3>Image alt tag </h3>
                  <p>ALT tags or ALT attributes are "alternative text" for an image. ALT tags are used to describe the image or what the image is representing</p>
                  <h3>Webmaster tools from Google </h3>
                  <p>Google Webmaster tools is Google's collection of Search Engine Optimization (SEO) tools that help you manage your site in Google Search results</p>
                  <h3>Off page seo </h3>
                  <p>External links generation, listing to directories, keywords ranking on search engines and directories.</p>
                  <h3>Blog writing </h3>
                  <p>We will also write blogs related to your business or website through which your website will get more visitors and as a result more growth in business.</p>

                 
               </div>
               <!-- End Single Features -->
            </div>
            <!-- Col End -->
           
            <!-- end col -->
           
            <!-- End col -->
         </div>
         <!-- End Row 2 -->
          <div class="tw-mt-60"></div>
          <div class="row">
            <div class="col-md-4 text-right">
               <a href="tel:+918383891889" class="btn outline-white-btn p-0"> <h2 class="column-title text-md-right text-sm-center">Contact Us <br>  For The Best Price</h2></a>
            </div>
            <!-- Col End -->
            <div class="col-md-7 ml-md-auto">
             
               <p class="features-text">The complete payment will be done in advance </br>Note- The remaining services will be started after the complete payment is done.</p>
            </div>
            <!-- Col End -->
         </div>
      </div>
      <!-- End Container -->
   </section>
  <section class="tw-inro-item-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center col-md-12">
                    <h2 class="column-title text-md-center">Our Services</h2>
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
                <!-- End Col -->

                

            </div>
        </div>
    </section>
   <section id="tw-contact-us" class="tw-contact-us bg-offwhite">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="section-heading text-center">
                  <h2>
                     <small>leave a message</small>
                     Contact us <span></span>
                  </h2>
                  <h3>Call : +919315578826 </h3>
                  <h3>Mai : harish@kriworld.in</h3>
                  <span class="animate-border border-ash ml-auto mr-auto tw-mt-20 tw-mb-40"></span>
               </div>
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
         <div class="row">
             <div class="col-md-6 text-lg-right text-md-center wow fadeInLeft">
                 <img src="images/s1.png" class="img-fluid">
             </div>
             <div class="col-md-6">
                      <div class="contact-us-form">
            <form id="contact-form" class="contact-form" action="#" method="POST">
               <div class="error-container"></div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input class="form-control form-name" name="name" id="name" placeholder="Name" type="text" required="">
                     </div>
                  </div>
                  <!-- Col end -->
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input class="form-control form-phone" name="mob" id="phone" placeholder="Phone" type="phone">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input class="form-control form-email" name="email" id="email" placeholder="Email" type="email" required="">
                     </div>
                  </div>
               
                  <div class="col-lg-12">
                     <div class="form-group">
                        <textarea class="form-control form-message required-field" id="message" name="message" placeholder="Message here" rows="5"></textarea>
                     </div>
                  </div>
                  <!-- Col 12 end -->
               </div>
               <!-- Form row end -->
               <div class="text-center">
                  <button class="btn btn-primary tw-mt-30" type="submit" name="submit">Contact US</button>
               </div>
            </form>
            <!-- Form end -->
         </div>
         <!-- Contact us form end -->
                 
             </div>
         </div>
   
      </div>
      <!-- Container End -->
   </section>
   <!-- Contact End -->




    <footer id="tw-footer" class="tw-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="tw-footer-info-box">
                        <a href="https://kriworld.in/websitedesign.php" class="footer-logo">
                            <img src="images/footer_logo.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                           Kriworld Itech Private Limited is a premium design company that focuses on quality, innovation, & speed. We are India's leading website designing company.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                 <!--    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        <p>Best Seo Company 2017</p>
                    </div> -->
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="icon icon-map2"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>4400 Bayou Blvd<br>Pensacola <br>FL 32503</h3>
                                   <!--   <p>Kriworld Itech Private Ltd
Sarai Khwaja Faridabad
Delhi NCR</p> --> 
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="icon icon-phone3"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>+1 (850) 745-5358</h3>
                                    <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li><a href="https://kriworld.in/advertsing/ecommerce.php"><i class="fa fa-angle-double-right"></i> eCommerce Development</a></li>

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
                                            <i class="fa fa-angle-double-right"></i>Software Development</a>
                                         </li>
                                </ul>
                               
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Certificate</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <img src="images/foter.jpg" class="img-fluid">
                                    <ul>
                                        <li><a href="">(CIN) U93030HR2018PTC073662
                                        </a></li>
                                        <li><a href="">Registration number is 73662</a></li>
                                        
                                      
                                    </ul>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright &copy; 2022, All Right Reserved Kriworld Itech Private Limited</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
    </footer>
    <!-- End Footer -->
    
       <section class="gng">
         <div class="container confloatBtn">
            <div class="row p-0">
               <div class="col-lg-6 col-6" style="padding:0">
                  <div class="callBtnFloat"><a href="tel:+18507455358" style="color:#fff"><i class="fa fa-phone"></i> Call Now</a></div>
               </div>
               <div class="col-lg-6 col-6" style="padding:0">
                  <div class="whatsBtnFloat"><a href="https://wa.me/+18507455358" style="color:#fff"><i class="fab fa-whatsapp"></i> WhatsApp</a></div>
               </div>
            </div>
         </div>
      </section>




    <!-- Javascripts File
      =============================================================================-->

    <!-- initialize jQuery Library -->
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl-carousel.2.3.0.min.js"></script>
    <!-- Waypoint -->
    <script src="js/waypoints.min.js"></script>
    <!-- Counter Up -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Video Popup -->
    <script src="js/jquery.magnific.popup.js"></script>
    <!-- Smooth scroll -->
    <script src="js/smoothscroll.js"></script>
    <!-- WoW js -->
    <script src="js/wow.min.js"></script>
    <!-- Template Custom -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        $(".navbar-toggler").click(function(){
$(".collapse").toggle();
});
    </script>
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
    .features-box {
    text-align: left;
}
.footer-widget ul {
  width: 98%;
  float: left;
  list-style: none;
  margin: 0;
  padding: 0;
}
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