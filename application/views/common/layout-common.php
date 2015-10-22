<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Piccolo Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url()?>assets/common/bootstrap/dist/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="<?php echo base_url()?>/assets/common/css/bootstrap-responsive.css"> -->
<link rel="stylesheet" href="<?php echo base_url()?>/assets/common/css/prettyPhoto.css" />
<link rel="stylesheet" href="<?php echo base_url()?>/assets/common/css/flexslider.css" />
<link rel="stylesheet" href="<?php echo base_url()?>/assets/common/css/custom-styles.css">
<link rel="stylesheet" href="<?php echo base_url()?>/assets/common/css/styles.css">
<link rel="stylesheet" href="<?php echo base_url()?>/assets/common/css/styles-responsive.css">
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo base_url()?>/assets/common/img/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo base_url()?>/assets/common/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>/assets/common/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>/assets/common/img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url()?>/assets/common/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>/assets/common/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>/assets/common/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url()?>/assets/common/js/jquery.custom.js"></script>
<script src="<?php echo base_url()?>/assets/common/js/b-scripts.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
    <div class="b-container container">
        <div class="row b-header">
            <div class="col-md-5 col-sm-5 col-xs-12 logo">
                <a href="index.htm"><img src="<?php echo base_url();?>/assets/common/img/piccolo-logo.png" alt="" /></a>
                <h5>Big Things... Small Packages</h5>
            </div>
            <div class="header-account">
              <ul>
                <li>
                  <a href="#">Login </a>
                </li>
                <li class="space"> | 
                </li>
                <li>
                  <a href="#">
                    <i class="glyphicon glyphicon-shopping-cart"></i>My cart
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 navigation">
            <a id="touch-menu" class="mobile-menu" href="#"><i class="glyphicon glyphicon-align-justify"></i>Menu</a>
                <?php 
                  echo $this->dynamicmenu->buildmenu('0');
                ?>
                <!-- <nav>
                    <ul class="menu">
                   <li class="dropdown active"><a href="#">HOME</a>
                   <ul class="sub-menu">
                   <li><a href="#">Sub-Menu 1</a></li>
                   <li><a href="#">Sub-Menu 2</a></li>
                   <li><a href="#">Sub-Menu 3</a></li>
                   </ul>
                   </li>
                  <li><a  href="#">ABOUT</a></li>
                  <li><a  href="#">PORTFOLIO</a>
                  <ul class="sub-menu">
                   <li><a href="#">Sub-Menu 1</a>
                        <ul >
                    <li><a href="#">Sub-Menu 4</a></li>
                    <li><a href="#">Sub-Menu 5</a></li>
                    <li><a href="#">Sub-Menu 6</a></li>
                    </ul>
                   </li>
                   <li><a href="#">Level 3 Menu</a>
                    <ul class="sub-menu">
                    <li><a href="#">Sub-Menu 4</a></li>
                    <li><a href="#">Sub-Menu 5</a></li>
                    <li><a href="#">Sub-Menu 6</a></li>
                    </ul>
                   </li>
                   </ul>
                  </li>
                  <li><a  href="#">BLOG</a></li>
                  </ul>
              </nav> -->
            </div>
        </div>

            <div class="row headline"><!-- Begin Headline -->
    
        <!-- Slider Carousel
        ================================================== -->
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="<?php echo base_url();?>assets/common/img/gallery/bg1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="<?php echo base_url();?>assets/common/img/gallery/bg2.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="<?php echo base_url();?>assets/common/img/gallery/bg3.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="<?php echo base_url();?>assets/common/img/gallery/bg4.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="<?php echo base_url();?>assets/common/img/gallery/bg5.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>Welcome to Piccolo. <br />
            A Big Theme in a Small Package.</h3>
            <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->
    <div class="row content-page">
        <?php $this->load->view($subview);?>
    </div>
    <!--footer pae-->
    <div class="row footer-page">
        <div class="col-sm-6 col-md-6 col-xs-12 no-padding">
            Copyright © 2015 binhhv.com.vn All rights reserved.
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12 no-padding">
            <div class="row">
              <div class="col-sm-6 col-xs-6 col-xs-12 no-padding">
                  <a href="#">
                    Giới thiệu
                  </a>
              </div>
              <div class="col-sm-6 col-xs-6 col-xs-12 no-padding">
                  <a href="#">
                    Liên hệ
                  </a>
              </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
