<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>E-Cell IIT(ISM) Dhanbad</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="E-cell IIT (ISM) Dhanbad" name="keywords">
  <meta content="E-cell IIT (ISM) Dhanbad" name="description">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <link href="img/logo1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">


</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" style="padding-top: 0px;padding-bottom: 0px;">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top" style=" padding-top: 7px;"><img src="img/logo3.png" alt="Ecell IIT (ISM) Dhanbad" class="logotop"><p style="margin-bottom: 0px;">E-Cell</p></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
  </div>
  <div class="container">
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#timeline">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <section id="home">
  <div class="intro route bg-image" style="background-image: url(img/00.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Entrepreneurship Cell<br>IIT(ISM) Dhanbad</h1>
          
          <p class="intro-subtitle">Every <span class="text-slider-items">experiment, question, failure, idea</span><strong class="text-slider"></strong> has the power to change our world.</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About Us
                    </h5>
                  </div>
                  <p class="lead" style="text-align: center;">We know Entrepreneurship, in fact we do it!<br>We are a student-run organization that develops innovative programming with the aim of expanding the knowledge of today's entrepreneurial ecosystem We think, ideate, experiment, explore, debate, modify and it goes on and on! We are young minds of a diverse nation with an entrepreneurial mindset having a burning desire to solve problems and make life easier in an entrepreneurial way. </p>                  
                </div>
              </div>
              <div class="about-me pt-4 pt-md-0" style="padding-top: 10px!important;">
                  <div class="title-box-2" style="margin-top: 8px;">
                    <h5 class="title-left">
                      Vision
                    </h5>
                  </div>            
                  <p class="lead" style="text-align: center;">
                   We, as a group of young enthusiastic community of students, have decided to take out time and light up the path to the ones who are walking on the road, waiting for some right guidance. We motivate people to think out of the box, think innovative with a view to make the world a better place. We help students to develop professional skills in various fields of business and provide them with a platform to implement those skills to solve real-life problems.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
       
 <!--Timeline-->

<section class="timeline bg-image sect-mt4 route" id="timeline" style="background-image: url(img/oval.jpg)">

  <ul>
   
    <li>
      <div>
     <time>25th October 2018<br>Bizathon</time>
        1st of its kind Managerial Fiesta of IIT(ISM) Dhanbad in association with CONCETTO'18 organised and successfully executed. Opportunity to meet and work with amazing mentors come alive. E- Cell starts growing it's firm roots!
      </div>
    </li>

    <li>
      <div>
        <time>23rd January 2019<br>
       Chaze Launched</time>
      The "Chaze" for dreams goes high with motives. Chaze - 1st Startup of E-Cell member launched with the mission to accelerate the establishment of local businesses online.
      </div>
    </li>
  </ul>
</section>
<script>
  var itemsTimeLine = document.querySelectorAll('.timeline li');
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function addClassVisible() {
  for(var item = 0; item < itemsTimeLine.length; item++) {
    if (isElementInViewport(itemsTimeLine[item])) {
      itemsTimeLine[item].classList.add('is-visible');
    }
  }
}
 
window.addEventListener("load", addClassVisible);
window.addEventListener("scroll", addClassVisible);
</script>

  <!--/ Timeline End /-->

  <!--/ Team /-->
  <section id="team" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Team
            </h3>
            <p class="subtitle-a">
              One who have decided to change the things!
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
     
<!--<div class="container">
    <div class="row justify-content-center">
    <div class=" col-md-4 col-sm-6">
            <div class="our-team">
                <div class="team">
                    <div class="pic">
                        <img src="img/11.jpg" alt="Faculty Advisor Ecell IIT (ISM) Dhanbad">
                        <ul class="social-links">
                      <li><a href="https://www.linkedin.com/in/dhiraj-patel-4322a213a/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                      <li><a href="https://www.facebook.com/dhiraj.patel.5623293" target="_blank"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/nirvana_attainer/" target="_blank"><i class="ion-social-instagram"></i></a></li>                             
                    </ul>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="title">Sowmya Singh</h3>
                    <span class="post">Faculty Advisor</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>-->
   <div class="container">
    <div class="row justify-content-center">
    <div class=" col-md-4 col-sm-6">
            <div class="our-team">
                <div class="team">
                    <div class="pic">
                        <img src="img/11.jpg" alt="President Ecell IIT (ISM) Dhanbad">
                        <ul class="social-links">
                      <li><a href="https://www.linkedin.com/in/dhiraj-patel-4322a213a/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                      <li><a href="https://www.facebook.com/dhiraj.patel.5623293" target="_blank"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/nirvana_attainer/" target="_blank"><i class="ion-social-instagram"></i></a></li>                             
                    </ul>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="title">Dhiraj Patel</h3>
                    <span class="post">President</span>
                    
                </div>
            </div>
        </div>

            <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="team">
                    <div class="pic">
                        <img src="img/7.jpg" alt="Coordinator Ecell IIT (ISM) Dhanbad">
                         <ul class="social-links">
                     <li><a href="https://www.linkedin.com/in/satviksinghal/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                      <li><a href="https://www.facebook.com/satvik.singhal" target="_blank"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/satvik31ss/?utm_source=ig_profile_share&igshid=qlfveke88g4t" target="_blank"><i class="ion-social-instagram"></i></a></li>                               
                    </ul>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="title">Satvik Singhal</h3>
                    <span class="post">Student Co-Ordinator</span>
                    
                </div>
            </div>
        </div>
      </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="team">
                    <div class="pic">
                        <img src="img/10.jpg" alt="Tech. Head Ecell IIT (ISM) Dhanbad">
                          <ul class="social-links">
                      <li><a href="https://www.linkedin.com/in/shubham-vishwakarma/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                      <li><a href="https://www.facebook.com/smartyboy3050" target="_blank"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/shubham._vishwakarma/" target="_blank"><i class="ion-social-instagram"></i></a></li>                            
                    </ul>                    
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="title">Shubham Vishwarkarma</h3>
                    <span class="post">Head of Tech.</span>
                    
                </div>
            </div>
        </div>

            <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="team">
                    <div class="pic">
                        <img src="img/8.jpg" alt="Finance head Ecell IIT (ISM) Dhanbad">
                         <ul class="social-links">
                      <li><a href="https://www.linkedin.com/in/bhavesh-garg-697a19132/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                      <li><a href="https://www.facebook.com/bhavesh.garg.509" target="_blank"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/bgboy009/" target="_blank"><i class="ion-social-instagram"></i></a></li>                              
                    </ul>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="title">Bhavesh Garg</h3>
                    <span class="post">Head of Finance</span>
                    
                </div>
            </div>
        </div>

 
        <div align="centre" class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="team">
                    <div class="pic">
                        <img src="img/9.jpg" alt="Finace head Ecell IIT (ISM) Dhanbad">
                        <ul class="social-links">
                      <li><a href="https://www.linkedin.com/in/sanskar-jain-3129ab142/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                      <li><a href="https://www.facebook.com/sanskar.jain.39" target="_blank"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/sanskarjain1997/" target="_blank"><i class="ion-social-instagram"></i></a></li>                      
                    </ul>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="title">Sanskar Jain</h3>
                    <span class="post">Head of Marketing</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
  </section>
  <!--/ Team End /-->
  

  <!--/Testimonials/-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/bg1.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/1.jpg" alt="Mentor Ecell IIT (ISM) Dhanbad" class="rounded-circle b-shadow-a">
                <span class="author">Aaquib Hussain</span>
                <span >Co-Founder I&We</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  <i>The best thing about innovation is it gets access to the best set of critical faculties in us human beings. E-cell IIT(ISM) Dhanbad is fostering one such access amongst the brightest set of learners in the country, they are structured, planned and insightful in purpose and their events (all that I have been part of) have only instilled confidence in me that innovation, disruption and young energy have responsible sinks available in India, good job and greater milestones ahead!!</i>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/2.jpg" alt="Mentor Ecell IIT (ISM) Dhanbad" class="rounded-circle b-shadow-a">
                <span class="author">Suraj Juneja</span>
                <span>CEO Level Nine Media Pvt. Ltd.</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                <i>Now that the entrepreneurial bug has bitten you, make sure the fire keeps burning! It was a pleasure being with all you bright young minds, keep shining! Thank you all for having me</i>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
<!--Team End-->

  <!--/ Blogs /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a"><a href="blogs.html">
                                   Blogs</a>
            </h3>
            <p class="subtitle-a">
              Writings that are needed to be appreciated!
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="https://yourstory.com/2013/10/flick2know-story/?fbclid=IwAR1aociGIteM3zvGsTjk6AVYe-x4Av8QlYVlW41uuaA67HvpRowZcNf7SgI" target="_blank"><img src="img/post-3.jpg" alt="Blogs Ecell IIT (ISM) Dhanbad" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">ISM Start-Up</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="https://yourstory.com/2013/10/flick2know-story/?fbclid=IwAR1aociGIteM3zvGsTjk6AVYe-x4Av8QlYVlW41uuaA67HvpRowZcNf7SgI" target="_blank">Flick2Know</a></h3>
              <p class="card-description">
                Flick2Know Technologies, an iAccelerator 2010 company is tapping the QR code space applying cutting edge technologies like 2-D barcoding, virtual reality and m-commerce. It was just a image processing techniques for recognizing different image patterns in final year project at ISM, Dhanbad
              </p>
            </div>            
          </div>
        </div>

         <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="https://yourstory.com/2018/10/behind-26-months-8-years-grit-hardwork-got-us-unicorn-status-sujeet-kumar-co-founder-udaan/" target="_blank"><img src="img/post-2.jpg" alt="Blogs Ecell IIT (ISM) Dhanbad" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Idea</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="https://yourstory.com/2018/10/behind-26-months-8-years-grit-hardwork-got-us-unicorn-status-sujeet-kumar-co-founder-udaan/" target="_blank">India's Fastest Unicorn- Udaan</a></h3>
              <p class="card-description">
                When we were building Flipkart, we got our high not from the limelight but from customer recognition. We were building scale. That was motivating us. Even in Udaan, there has been only three news pieces that have gone out, and everytime it has been during our fundraise - Series A, B and C.
              </p>
            </div>            
          </div>
        </div>
         
         <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="https://www.indiatoday.in/trending-news/story/delhi-air-too-bad-for-you-now-you-can-buy-fresh-air-in-a-bottle-1400390-2018-12-01" target="_blank"><img src="img/post-1.jpg" alt="Blogs Ecell IIT (ISM) Dhanbad" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Idea</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="https://www.indiatoday.in/trending-news/story/delhi-air-too-bad-for-you-now-you-can-buy-fresh-air-in-a-bottle-1400390-2018-12-01" target="_blank">Canned Pure Air</a></h3>
              <p class="card-description">
                The fact that air pollution is hitting its all-time high, It seems “fresh air” will soon become a thing of the past. Sad it may sound, but this situation throws open a lot of business opportunities like selling anti-pollution masks, air purifier and so on. “Canned pure air” is quite a unique and new concept. 
              </p>
            </div>            
          </div>
        </div>

      </div>
      </div>
    </div>
  </section>
  <!--/Blogs End /-->

  <!--/Contact-Footer Star /-->
  <section  id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/002.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div class="box-shadow-full">
              <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  
                  <dir class="container">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <a class="js-scroll" href="#home"><img src="img/logo2.png" class="img-fluid" alt="Logo Ecell IIT (ISM) Dhanbad"></a>
                  <div class="more-info">
                    <p><br>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>  SAC 306, IIT(ISM) Dhanbad,<br>   Dhanbad, Jharkhand-826001</li>
                      <li><span class="ion-email"></span> ecell@iitism.ac.in</li>
                    </ul>
                  </p>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.linkedin.com/company/entrepreneurship-cell-iit-ism-dhanbad/" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      <li><a href="https://www.facebook.com/ecelliitism/" target="_blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/ecell_iitism/" target="_blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>                      
                    </ul>
                  </div>
                  <div>
                      
                  </div>
                </div>
                <div class="col-md-6">
                  <p class="lead" style="text-align:justify;">
                      We’re a group of students, passionate about Start-Ups and the Entrepreneurial Journey. We all have the burning desire to ideate and implement, join or advise Start-Ups and aspire to do so someday:)<br>We are committed to work tough in order to foster a strong community for Entrepreneurship and Innovation in and outside Indian Institute of Technology (Indian School of Mines) Dhanbad, our IIT (ISM)! Through our conference, social events, speaker engagements, pitch competitions and workshops, we hope to bring together everyone interested in the start-up culture and to help the future entrepreneurs and Idea-Freaks, best utilize resources to ideate and implement Start-Ups. <br>

                    </p>
                   <p class="lead" style="text-align:center;"> We’d love for you to join us!</p>
                  </div>
                </div>
      <p style="text-align: center;"><br><i>Website by Team E-Cell IIT(ISM) Dhanbad</i></p>
      <p style="text-align: center;"><i>Photo credits: <a href="https://www.facebook.com/fotofreaks.iitism/" target="_blank">FotoFreaks - The Photography Club Of IIT - ISM</a></i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--/ Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
