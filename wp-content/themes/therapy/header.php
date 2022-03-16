<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head();?>

  <!-- <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png"> -->
</head>

<body>
  
  <div class="preloader-area">
    <div class="spinner">
      <div class="inner">
        <div class="disc"></div>
        <div class="disc"></div>
        <div class="disc"></div>
      </div>
    </div>
  </div>
  <header class="main-header-area">
    <div class="header-information">
    </div>
    <div class="top-header-area bg-transparent">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 col-md-12">
            <ul class="top-header-information">
              <li>
                <i class="flaticon-phone-call"></i>
                <a href="tel:1300 908 054"><?php echo get_theme_mod('therapy_phone_handle');?></a>
              </li>
              <li>
                <i class="flaticon-mail"></i>
                <a href="mailto:info@therapypoint.com.au"><?php echo get_theme_mod('therapy_email_handle');?></a>
              </li>
              <li>
                <i class="flaticon-placeholder"></i>
                <?php echo get_theme_mod('therapy_address_handle');?>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12">
            <ul class="top-header-optional">
              <li>
                <a href="<?php echo get_theme_mod('therapy_facebook_handle');?>" target="_blank">
                  <i class='bx bxl-facebook'></i>
                </a>
                <a href="<?php echo get_theme_mod('therapy_twitter_handle');?>" target="_blank">
                  <i class='bx bxl-twitter'></i>
                </a>
                <a href="<?php echo get_theme_mod('therapy_pinterest_handle');?>" target="_blank">
                  <i class='bx bxl-pinterest-alt'></i>
                </a>
                <a href="<?php echo get_theme_mod('therapy_instagram_handle');?>" target="_blank">
                  <i class='bx bxl-instagram'></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-area p-relative-color">
      <div class="main-responsive-nav">
        <div class="container">
          <div class="main-responsive-menu">
            <div class="logo">
              <a href="index.html">
                 <?php 
      if(has_custom_logo() || is_customize_preview()){
        the_custom_logo();
      }else{
        ?>
        Therapy
      <?php } ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="main-navbar">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
              <?php 
      if(has_custom_logo() || is_customize_preview()){
        the_custom_logo();
      }else{
        ?>
        Therapy
      <?php } ?>
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
               
                
              <!--   <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a href="<?php echo site_url('/home');?>" class="nav-link active">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('/about');?>" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('/services');?>" class="nav-link">
                    Services
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('support');?>" class="nav-link">
                    Supports
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('membership');?>" class="nav-link">
                    Membership
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('blog');?>" class="nav-link">
                    Blog
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('contact');?>" class="nav-link">Contact</a>
                </li> 
               
              </ul>  -->
            <?php 
            if(has_nav_menu("header")){
               wp_nav_menu(array(
              "theme_location" => "header",
              "menu_class"     => "navbar-nav m-auto",
              "items_wrap"     => '<ul class="navbar-nav m-auto">%3$s</ul>',
              "container"      => "",
            ));
            }
           
            ?>

              
              

              
              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                </div>
                <div class="option-item">
                  <div class="search-box">
                    <i class='flaticon-search'></i>
                  </div>
                </div>
                <div class="option-item">
                  <div class="navbar-btn">
                    <a href="#" class="default-btn">Book Online <i class="flaticon-pointer"></i></a>
                  </div>
                </div>
              </div>
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
              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                </div>
                <div class="option-item">
                  <div class="search-box">
                    <i class='flaticon-search'></i>
                  </div>
                </div>
                <div class="option-item">
                  <div class="navbar-btn">
                    <a href="#" class="default-btn">Book Online <i class="flaticon-pointer"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>