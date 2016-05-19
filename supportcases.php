<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="format-detection" content="telephone=no" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />

<link href="css/devices.min.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/animate.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="img/favicon.ico" />

<title>Support Cases</title>
   <!-- <style>
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 7px 14px;
            font-size: 14px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #308C9E;
            border-radius: 14px;
            /*  margin: -7px -133px;*/
            float: right;
        }

    </style>
-->
</head>

<body data-theme="theme-2">



<!-- HEADER -->

<header class="act default-act"> <a href="index.php" id="logo"><img src="img/theme-2/logo.png" alt=""/><img class="act" src="img/theme-2/logo-act.png" alt=""/></a>

  <div class="mob-icon"> <span></span> </div>
    <?php session_start();if(isset($_SESSION['name'])){?>
        <div style="float:right;color:#fff;font-size:11px;font-weight:bold;margin-right:6%;margin-top:5px;background:rgb(26, 103, 189) none repeat scroll 0%;border:1px solid rgb(26, 103, 189) none repeat scroll 0%;height:17px;border-radius:20px;padding:3px;width:88px;" ><?php echo "Welcome"." ".$_SESSION['name'];  ?></div>
    <?php }?>
  <nav>

    <ul>
      <li><a href="index.php">Overview</a></li>

      <li><a href="events.php">Events</a></li>

      <li><a href="samples.php">Samples Request</a></li>

      <li><a href="literature.php">Literature Request</a></li>

      <li><a href="supportcases.php"  class="act">Support Cases</a></li>

      <li><a href="signup.php">Signup</a></li>
      <?php
      session_start();
      if (isset($_SESSION['username'])) {
        ?>
          <li>
              <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
        <?php
      } else {
        ?>
        <li><a href="signin.php">Sign In</a></li>
      <?php } ?>
    </ul>

  </nav>

</header>



<!-- LOADER -->

<div id="content-wrapper">

  <div class="blocks-container"> 

    

      <!-- BLOCK "TYPE 10" -->

    <div class="new-block type-10 scroll-to-block" data-id="team">

      <div class="container">

        <div class="row page-tagline">

          <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

            <h2 class="title">Case Studies</h2>

            <div class="description">VHealth is committed to providing the most up-to-date, accurate, and timely medical information to health care professionals.</div>

          </div>

        </div>

        <div class="row wow fadeInUp" data-wow-delay="0.3s">

          <div class="swiper-container horizontal-pagination" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3">

            <div class="swiper-wrapper">

              <div class="swiper-slide">

                <div class="paddings-container">

                  <div class="image-wrapper">

                    <div class="image-socials-box">

                      <div class="vertical-align"> <a href="#"><img src="img/c-icon.png" alt="" /></a> <a href="#"><img src="img/c-icon1.png" alt="" /></a> <a href="#"><img src="img/c-icon2.png" alt="" /></a> <a href="#"><img src="img/c-icon3.png" alt="" /></a> </div>

                    </div>

                    <img class="thumbnail-image" src="img/Patricia.jpg" height="493" width="370" alt="" /> </div>

                  <div class="name">Patricia Arton</div>

                  <!--div class="position">co-founder. creative director</div>

                  <div class="description">Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</div-->

                </div>

              </div>

              <div class="swiper-slide">

                <div class="paddings-container">

                  <div class="image-wrapper">

                    <div class="image-socials-box">

                      <div class="vertical-align"> <a href="#"><img src="img/c-icon.png" alt="" /></a> <a href="#"><img src="img/c-icon1.png" alt="" /></a> <a href="#"><img src="img/c-icon2.png" alt="" /></a> <a href="#"><img src="img/c-icon3.png" alt="" /></a> </div>

                    </div>

                    <img class="thumbnail-image" src="img/Patrick.jpg" height="493" width="370" alt="" /> </div>

                  <div class="name">Patrick Smithson</div>

                  <!--div class="position">co-founder, developer</div>

                  <div class="description">Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</div-->

                </div>

              </div>

              <div class="swiper-slide">

                <div class="paddings-container">

                  <div class="image-wrapper">

                    <div class="image-socials-box">

                      <div class="vertical-align"> <a href="#"><img src="img/c-icon.png" alt="" /></a> <a href="#"><img src="img/c-icon1.png" alt="" /></a> <a href="#"><img src="img/c-icon2.png" alt="" /></a> <a href="#"><img src="img/c-icon3.png" alt="" /></a> </div>

                    </div>

                    <img class="thumbnail-image" src="img/Kate.jpg" height="493" width="370" alt="" /> </div>

                  <div class="name">Kate Beckett</div>

                  <!--div class="position">marketing director</div>

                  <div class="description">Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</div-->

                </div>

              </div>

              <!--div class="swiper-slide">

                <div class="paddings-container">

                  <div class="image-wrapper">

                    <div class="image-socials-box">

                      <div class="vertical-align"> <a href="#"><img src="img/c-icon.png" alt="" /></a> <a href="#"><img src="img/c-icon1.png" alt="" /></a> <a href="#"><img src="img/c-icon2.png" alt="" /></a> <a href="#"><img src="img/c-icon3.png" alt="" /></a> </div>

                    </div>

                    <img class="thumbnail-image" src="img/content/Home-2/team-4.jpg" height="493" width="370" alt="" /> </div>

                  <div class="name">Patricia arton</div>

                  <div class="position">co-founder. creative director</div>

                  <div class="description">Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</div>

                </div>

              </div>

              <div class="swiper-slide">

                <div class="paddings-container">

                  <div class="image-wrapper">

                    <div class="image-socials-box">

                      <div class="vertical-align"> <a href="#"><img src="img/c-icon.png" alt="" /></a> <a href="#"><img src="img/c-icon1.png" alt="" /></a> <a href="#"><img src="img/c-icon2.png" alt="" /></a> <a href="#"><img src="img/c-icon3.png" alt="" /></a> </div>

                    </div>

                    <img class="thumbnail-image" src="img/content/Home-2/team-5.jpg" height="493" width="370" alt="" /> </div>

                  <div class="name">Patrick smithson</div>

                  <div class="position">co-founder, developer</div>

                  <div class="description">Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</div>

                </div>

              </div>

              <div class="swiper-slide">

                <div class="paddings-container">

                  <div class="image-wrapper">

                    <div class="image-socials-box">

                      <div class="vertical-align"> <a href="#"><img src="img/c-icon.png" alt="" /></a> <a href="#"><img src="img/c-icon1.png" alt="" /></a> <a href="#"><img src="img/c-icon2.png" alt="" /></a> <a href="#"><img src="img/c-icon3.png" alt="" /></a> </div>

                    </div>

                    <img class="thumbnail-image" src="img/content/Home-2/team-6.jpg" height="493" width="370" alt="" /> </div>

                  <div class="name">kate beckett</div>

                  <div class="position">marketing director</div>

                  <div class="description">Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</div>

                </div>

              </div-->

            </div>

            <div class="pagination"></div>

          </div>

        </div>

      </div>

    </div>

    

   

    

    <!-- BLOCK "TYPE 9" -->

    <!--div class="new-block type-9 color-background scroll-to-block" data-id="why">

      <div class="container">

        <div class="row">

          <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">

            <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="1">

              <div class="swiper-wrapper">

                <div class="swiper-slide">

                  <div class="paddings-container">

                    <div class="row">

                      <div class="col-sm-6">

                        <div class="cell-view">

                          <article class="normall">

                            <h2 class="h2 titel-left">UI</h2>

                            <h3 class="h3">Modern User Interface</h3>

                            <p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor sed. Sed eget justo at erat suscipit tristique sit. Pellentesque elit libero, auctor quis quam nec, luctus euismod lorem.</p>

                            <div class="row nopadding">

                              <div class="col-md-6 nopadding">

                                <ul class="list-style-1">

                                  <li>voice commands</li>

                                  <li>quick navigation</li>

                                  <li>friendly interface for all</li>

                                  <li>tooltips for first start</li>

                                </ul>

                              </div>

                              <div class="col-md-6 nopadding">

                                <ul class="list-style-1">

                                  <li>big and clear video manual</li>

                                  <li>editable navigation</li>

                                  <li>large and convenient buttons</li>

                                  <li>faq for every chapter</li>

                                </ul>

                              </div>

                            </div>

                          </article>

                        </div>

                      </div>

                      <div class="col-sm-6">

                        <div class="swiper-image-block"> <img src="img/img6.png" alt="" /> </div>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="swiper-slide">

                  <div class="paddings-container">

                    <div class="row">

                      <div class="col-sm-6 col-sm-push-6">

                        <div class="cell-view">

                          <article class="normall">

                            <h2 class="h2 titel-left">UI</h2>

                            <h3 class="h3">Modern User Interface</h3>

                            <p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor sed. Sed eget justo at erat suscipit tristique sit. Pellentesque elit libero, auctor quis quam nec, luctus euismod lorem.</p>

                            <div class="row nopadding">

                              <div class="col-md-6 nopadding">

                                <ul class="list-style-1">

                                  <li>voice commands</li>

                                  <li>quick navigation</li>

                                  <li>friendly interface for all</li>

                                  <li>tooltips for first start</li>

                                </ul>

                              </div>

                              <div class="col-md-6 nopadding">

                                <ul class="list-style-1">

                                  <li>big and clear video manual</li>

                                  <li>editable navigation</li>

                                  <li>large and convenient buttons</li>

                                  <li>faq for every chapter</li>

                                </ul>

                              </div>

                            </div>

                          </article>

                        </div>

                      </div>

                      <div class="col-sm-6 col-sm-pull-6">

                        <div class="swiper-image-block"> <img src="img/content/Home-2/why_image_2.png" alt="" /> </div>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="swiper-slide">

                  <div class="paddings-container">

                    <div class="row">

                      <div class="col-sm-6">

                        <div class="cell-view">

                          <article class="normall">

                            <h2 class="h2 titel-left">UI</h2>

                            <h3 class="h3">Modern User Interface</h3>

                            <p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor sed. Sed eget justo at erat suscipit tristique sit. Pellentesque elit libero, auctor quis quam nec, luctus euismod lorem.</p>

                            <div class="row nopadding">

                              <div class="col-md-6 nopadding">

                                <ul class="list-style-1">

                                  <li>voice commands</li>

                                  <li>quick navigation</li>

                                  <li>friendly interface for all</li>

                                  <li>tooltips for first start</li>

                                </ul>

                              </div>

                              <div class="col-md-6 nopadding">

                                <ul class="list-style-1">

                                  <li>big and clear video manual</li>

                                  <li>editable navigation</li>

                                  <li>large and convenient buttons</li>

                                  <li>faq for every chapter</li>

                                </ul>

                              </div>

                            </div>

                          </article>

                        </div>

                      </div>

                      <div class="col-sm-6">

                        <div class="swiper-image-block"> <img src="img/content/Home-2/why_image_3.png" alt="" /> </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="pagination"></div>

            </div>

          </div>

        </div>

      </div>

    </div-->

    

    <!-- BLOCK "TYPE 3" -->

    <!--div class="new-block type-3 type-3-1 scroll-to-block" data-id="benefits">

      <div class="container type-3-text">

        <div class="row page-tagline">

          <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

            <h2 class="title">take more with us</h2>

            <div class="description">Tonsequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Praesent condimentum efficitur massa pharetra dolor sed.</div>

          </div>

        </div>

        <div class="row">

          <div data-wow-delay="0.3s" class="col-md-4 col-sm-6 little-img-text-entry wow flipInY"> <img src="img/theme-2/icon10.png" alt="">

            <article class="small">

              <h5 class="h5">online shopping</h5>

              <p>Etiam neque tortor, bibendum id maximus vitae, tincidunt id libero. Morbi ac leo vitae sapien rutrum sempe.</p>

            </article>

          </div>

          <div data-wow-delay="0.6s" class="col-md-4 col-sm-6 little-img-text-entry wow flipInY"> <img src="img/theme-2/icon11.png" alt="">

            <article class="small">

              <h5 class="h5">multimedia archives</h5>

              <p>Vestibulum accumsan est malesuada sem auctor, eu aliquet nisi ornare. Aliquam dapibus lectus </p>

            </article>

          </div>

          <div data-wow-delay="0.9s" class="col-md-4 col-sm-6 little-img-text-entry wow flipInY"> <img src="img/theme-2/icon12.png" alt="">

            <article class="small">

              <h5 class="h5">quick settings</h5>

              <p>Fusce ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</p>

            </article>

          </div>

          <div data-wow-delay="0.3s" class="col-md-4 col-sm-6 little-img-text-entry wow flipInY"> <img src="img/theme-2/icon13.png" alt="">

            <article class="small">

              <h5 class="h5">global weather</h5>

              <p>Mauris aliquam neque risus, eget fermentum ex posuere et. Nam interdum odio ante, nec sollicitudin</p>

            </article>

          </div>

          <div data-wow-delay="0.6s" class="col-md-4 col-sm-6 little-img-text-entry wow flipInY"> <img src="img/theme-2/icon14.png" alt="">

            <article class="small">

              <h5 class="h5">personal planners</h5>

              <p>Ullamcorper turpis at eros blandit, at iaculis eros bibendum. In diam erat, gravida sit amet aliquet vitae</p>

            </article>

          </div>

          <div data-wow-delay="0.9s" class="col-md-4 col-sm-6 little-img-text-entry wow flipInY"> <img src="img/theme-2/icon15.png" alt="">

            <article class="small">

              <h5 class="h5">your Achievements</h5>

              <p>Accumsan est malesuada sem auctor, eu aliquet nisi ornare. Aliquam dapibus lectus dolor, quis pulvinar</p>

            </article>

          </div>

        </div>

      </div>

    </div-->    

    <!-- FOOTER -->

    <footer>

      <div class="subscribe"> <span class="subscribe-text">Stay informed our updates</span>

        <form class="subscribe-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

          <input type="email" placeholder="Enter your email" name="email" required/>

          <input type="submit" value="" name="newsletter"/>

        </form>

      </div>

      <div class="footer-bottom">

        <div class="footer-linck"> <a href="#">Privacy Policy</a> <a href="#">About Us </a> <a href="#">Support</a> <a href="#">FAQ</a> <a href="#">Blog</a> <a href="#">Forum</a> </div>

        <div class="media-icon"> <a href="#"><img src="img/theme-2/c-icon.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon1.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon2.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon3.png" alt=""/></a> </div>

        <div class="copy"> <span>© 2016 All rights reserved. VHealth</span> </div>

      </div>

      <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>

    </footer>

    

    <!-- POPUP "VIDEO" -->

    <div class="video-popup"> <span></span> <span></span>

      <iframe src="#"></iframe>

      <a href="#"></a> </div>

  </div>

</div>



<!--<div class="theme-config">

        <div class="title">Select Color:</div>

        <div class="colours-wrapper">

            <div data-theme="theme-2" style="color: #fbc011;" class="entry active"></div>

            <div data-theme="theme-2" style="color: #00bbd2;" class="entry"></div>

            <div data-theme="theme-3" style="color: #4caf50;" class="entry"></div>

            <div data-theme="theme-4" style="color: #ba68c8;" class="entry"></div> 

            <div data-theme="theme-5" style="color: #d80d0d;" class="entry"></div>

            <div data-theme="theme-6" style="color: #0045ad;" class="entry"></div>

            <div data-theme="theme-7" style="color: #dd137b;" class="entry"></div>

            <div data-theme="theme-8" style="color: #482d1d;" class="entry"></div>            

        </div>

        <div class="open"><img src="img/gear-icon.png" alt=""><img src="img/gear-icon.png" alt=""><img src="img/gear-icon.png" alt=""></div>

    </div>--> 



<script src="js/jquery-2.1.3.min.js"></script> 

<script src="js/bootstrap.min.js"></script> 

<script src="js/idangerous.swiper.min.js"></script> 

<script src="js/global.js"></script> 

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script> 

<script src="js/map.js"></script> 

<script src="js/wow.min.js"></script> 

<script>

        var wow = new WOW(

            {

                boxClass:     'wow',      // animated element css class (default is wow)

                animateClass: 'animated', // animation css class (default is animated)

                offset:       100,          // distance to the element when triggering the animation (default is 0)

                mobile:       true,       // trigger animations on mobile devices (default is true)

                live:         true,       // act on asynchronously loaded content (default is true)

                callback:     function(box) {

                  // the callback is fired every time an animation is started

                  // the argument that is passed in is the DOM node being animated

                }

            }

        );

        $(window).load(function(){

            wow.init();    

        });

        

    </script> 
<script type="text/javascript" src="js/notify.js"></script>
<!--<script src="js/subscription.js"></script>-->
<?php
include_once("functions/functions.php");
if (isset($_POST['newsletter'])) {
  //Post Values
  $email = pg_escape_string($_POST['email']);

  //Passing values
  $addNewsLetter = addNewsLetter($email);
  if ($addNewsLetter) {
    ?>
    <script type="text/javascript">
      $.notify("Subscription was Successful", 'success')
    </script>
  <?php
  }
  else{
  ?>
    <script type="text/javascript">
      $.notify("Subscription was not Successful", {
        style: 'bootstrap'
      });
    </script>
    <?php
  }

}
?>
?>
</body>

</html>

