<?php get_header('1');
/*Template Name: Speech Pathology Page*/
?>
<div class="page-banner-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="page-banner-image">
            <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
            <div class="image-shape">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/page-banner/shape.png" alt="image">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="page-banner-content">
            <h2><?php the_title();?></h2>
            <ul>
              <li>
                <a href="<?php echo site_url('/home');?>">Home</a>
              </li>
              <li><?php the_title();?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="page-banner-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/page-banner/banner-shape-1.png" alt="image">
    </div>
  </div>
  <section class="services-details-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="services-details-desc">
            <div class="content-image">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/services-details/shape.jpg" alt="image">
              <h4 class="sub-title"><?php the_title();?></h4>
            </div>
           <?php the_content();?>
       </div>
        </div>
        <div class="col-lg-4 col-md-12">
         <!--  <div class="services-details-info">
            <ul class="services-list">
              <li><a href="#" class="active">Teens Consultation <i class="flaticon-imagination"></i></a></li>
              <li><a href="#">Couple Consultation <i class="flaticon-bipolar"></i></a></li>
              <li><a href="#">One To One Consultation <i class="flaticon-brain"></i></a></li>
              <li><a href="#">Family Consultation <i class="flaticon-extrovert"></i></a></li>
            </ul>
            <div class="choose-us-services">
              <h2>Why Choose Us</h2>
              <div class="choose-us-content">
                <div class="icon">
                  <i class="flaticon-balance"></i>
                  <h4>Psychology Therapy</h4>
                  <p>For Mental Stress</p>
                </div>
              </div>
              <div class="choose-us-content">
                <div class="icon">
                  <i class="flaticon-exhausted"></i>
                  <h4>Storing Confidence</h4>
                  <p>At Every Situation</p>
                </div>
              </div>
              <div class="choose-us-content">
                <div class="icon">
                  <i class="flaticon-triumph"></i>
                  <h4>Work Improvement</h4>
                  <p>In A Continuous Process</p>
                </div>
              </div>
            </div>
            
          </div> -->
          <?php get_sidebar();?>
        </div>
      </div>
    </div>
  </section>
  <div class="subscribe-area bg-top">
    <div class="container">
      <div class="subscribe-inner-box">
        <div class="subscribe-content">
          <h2>Subscribe Our Newsletter</h2>
          <p><?php echo get_theme_mod('therapy_newsletter_handle');?></p>
         <form class="newsletter-form" data-bs-toggle="validator">
            <?php echo do_shortcode('[contact-form-7 id="393" title="Newsletter"]');?>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();?>