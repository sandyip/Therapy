<?php get_header('1');
/*Template Name: Contact Us page*/
?>
 <div class="search-overlay">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="search-overlay-layer"></div>
        <div class="search-overlay-layer"></div>
        <div class="search-overlay-layer"></div>
        <div class="search-overlay-close">
          <span class="search-overlay-close-line"></span>
          <span class="search-overlay-close-line"></span>
        </div>
        <div class="search-overlay-form">
          <form>
            <input type="text" class="input-search" placeholder="Search here...">
            <button type="submit"><i class='flaticon-search'></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
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
  <section class="contact-info-area pt-100 pb-70">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="contact-info-box">
            <div class="icon">
              <i class='flaticon-phone-call'></i>
              <h3>Phone Number</h3>
            </div>
            <p><i class="flaticon-check"></i>
            	<a href="tel:1300 908 054"><?php the_field('phone_numbers');?></a>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="contact-info-box">
            <div class="icon">
              <i class='flaticon-mail'></i>
              <h3>Email Address</h3>
            </div>
            <p><i class="flaticon-check"></i>
            	<a href="mailto:info@therapypoint.com.au"><?php the_field('email_address');?></a>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="contact-info-box">
            <div class="icon">
              <i class='flaticon-placeholder'></i>
              <h3>Address</h3>
            </div>
            <p><i class="flaticon-check"></i>
                <?php the_field('address');?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="contact-form">
            <h3>Get In <span>Touch</span></h3>
            <form id="contactForm">
              <?php echo do_shortcode('[contact-form-7 id="392" title="Contact Form"]');?>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-image" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/contact.jpg');"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100">
    <div class="container">
      <div class="row">
      	 <h3 class="mb-5">Get In <span>Touch</span></h3>
        <div class="col-md-6">
          <?php the_field('map_1');?>

        </div>
        <div class="col-md-6">
         <?php the_field('map_2');?>
        </div>
      </div>
    </div>
  </section>
  <div class="subscribe-area bg-top pt-100">
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