<?php get_header('1');
/*Template Name: About Us Page*/
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
  <section class="about-area bg-ffffff ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-2 order-lg-1">
          <div class="about-content about-content-2">
            <h2>Who we are</h2>
            <?php the_field('who_we_are_content');?>
            <div class="about-contentbottom">
              <a href="#" class="tm-callbutton">
                <span class="tm-callbutton-icon"><i class="zmdi zmdi-phone-in-talk"></i></span>
                <h3><?php the_field('who_we_are_contact_number');?></h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="about-videobox">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 398 358">
              <defs>
                <pattern id="attachedImage1" height="100%" width="100%" patternContentUnits="objectBoundingBox">
                	<?php 
                $id_image = get_field('who_we_are_image');
                $image = wp_get_attachment_image_src($id_image, 'about');
                ?>
                <image xlink:href="<?php echo $image[0]; ?>" preserveAspectRatio="none" width="1" height="1">
                  
                </pattern>
              </defs>
              <path opacity="0.102" fill="rgb(0, 117, 183)" d="M82.843,22.613 C175.233,-23.488 239.443,6.649 290.825,61.522 C342.208,116.395 387.664,123.712 393.707,208.984 C399.750,294.254 313.624,341.741 274.739,347.672 C235.855,353.603 189.875,346.162 138.910,347.419 C63.098,349.289 33.144,322.675 18.231,290.376 C-2.864,244.685 19.343,229.351 6.068,175.158 C-9.838,110.222 10.571,58.677 82.843,22.613 Z"></path>
              <path fill="url(#attachedImage1)" d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z"></path>
              <path fill="rgba(0,0,0,0.1)" d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z"></path>
            </svg>
            <div class="tm-videobutton">
              <a href="<?php the_field('who_we_are_video_link');?>" data-fancybox="">
                <span><i class="flaticon-play-button"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="philosophy-area ptb-100">
    <div class="container">
      <div class="philosophy-slides owl-carousel owl-theme">
        	<?php $args = array(
      		'post_type'      => 'philosophy',
      		'posts_per_page' => -1,
      		'orderby'        => 'date',
      		'order'          => ''
      	);
      	$philosophy = new WP_Query($args);
      	while($philosophy-> have_posts()) : $philosophy -> the_post();
      	?>
        <div class="philosophy-item">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="philosophy-content">
                <h3><?php the_title();?></h3>
                <h4><?php the_field('philosophy_subtitle');?></h4>
                <p><?php the_content();?></p>
                <div class="philosophy-quote">
                  <i class="flaticon-close"></i>
                  <p><?php the_field('philosophy_quote');?></p>
                </div>
                <div class="philosophy-btn">
                  <a href="<?php the_field('philosophy_video_link');?>" class="default-btn popup-youtube">Watch Video <i class="flaticon-play"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="philosophy-image">
                <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
              </div>
            </div>
          </div>
        </div>

        <?php endwhile; wp_reset_postdata();?>
      </div>
    </div>
    <div class="philosophy-main-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/philosophy/line-shape.png" alt="image">
    </div>
  </section>
  <section class="ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10 col-12">
          <div class="tm-section-title text-center">
            <h2>Why Us</h2>
            <p><?php the_field('why_us_subtitle');?> </p>
          </div>
        </div>
      </div>
      <div class="tm-missvis">
        <div class="tab services-list-tab">
          <ul class="tabs active justify-content-center">
            <li class="current">
              <a href="#">
                <i class="flaticon-vision"></i>
                <span>Our Mission</span>
              </a>
            </li>
            <li class="">
              <a href="#">
                <i class="flaticon-strength"></i>
                <span>Our Vision &amp; Values</span>
              </a>
            </li>
            <li class="">
              <a href="#">
                <i class="flaticon-growth"></i>
                <span>Our Quality</span>
              </a>
            </li>
          </ul>
          <div class="tab_content tm-missvis-tabcontent">
            <div class="tabs_item" style="">
              <div class="tm-missvis-sectionwrap">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="tm-missvis-image">
                    	<?php 
		                $id_image = get_field('our_mission_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>" class="img-fluid rounded" width="" height="">
                     
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="tm-missvis-content">
                      <h5><?php the_field('our_mission_title');?></h5>
                      <?php the_field('our_mission_content');?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabs_item" style="display: none;">
              <div class="tm-missvis-sectionwrap">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="tm-missvis-content">
                      <h5><?php the_field('our_vision_and_values_title');?></h5>
                      <?php the_field('our_vision_and_values_content');?>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="tm-missvis-image">
                      <?php 
		                $id_image = get_field('our_vision_and_values_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>" class="img-fluid rounded" width="" height="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabs_item" style="display: none;">
              <div class="tm-missvis-sectionwrap">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="tm-missvis-image">
                      <?php 
		                $id_image = get_field('our_quality_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>" class="img-fluid rounded" width="" height="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="tm-missvis-content">
                      <h5><?php the_field('our_quality_title');?></h5>
                     <?php the_field('our_quality_content');?>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="features-area bg-ffffff pt-100 pb-70" style="background-color: #f9f9f9;">
    <div class="container">
      <div class="section-title">
        <h2>Some <span>Reasons</span> To Choose Us</h2>
        <p><?php the_field('choose_us_subtitle');?></p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single-features">
            <div class="features-title">
              <i class="flaticon-balance"></i>
              <h3><a href="services-details.html"><?php the_field('choose_us_title_1');?></a></h3>
              <span><?php the_field('choose_us_subtitle_1');?></span>
            </div>
            <p><?php the_field('choose_us_content_1');?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-features">
            <div class="features-title">
              <i class="flaticon-exhausted"></i>
              <h3><a href="services-details.html"><?php the_field('choose_us_title_2');?></a></h3>
              <span><?php the_field('choose_us_subtitle_2');?></span>
            </div>
            <p><?php the_field('choose_us_content_2');?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-features">
            <div class="features-title">
              <i class="flaticon-triumph"></i>
              <h3><a href="#"><?php the_field('choose_us_title_3');?></a></h3>
              <span><?php the_field('choose_us_subtitle_3');?></span>
            </div>
            <p><?php the_field('choose_us_content_3');?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="offer-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="offer-item">
            <div class="content">
              <h2>Services That We Offer</h2>
            </div>
            <div class="accordion">
              <div class="accordion-item">
                <div class="accordion-title active">
                  <i class="flaticon-imagination"></i>
                  <h3><?php the_field('services_title_1');?></h3>
                  <span><?php the_field('services_subtitle_1');?></span>
                </div>
                <div class="accordion-content show">
                  <p><?php the_field('services_content_1');?></p>
                  <a href="services-details.html" class="offer-btn">Read More</a>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-title">
                  <i class="flaticon-introvert"></i>
                  <h3><?php the_field('services_title_2');?></h3>
                  <span><?php the_field('services_subtitle_2');?></span>
                </div>
                <div class="accordion-content">
                  <p><?php the_field('services_content_2');?></p>
                  <a href="services-details.html" class="offer-btn">Read More</a>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-title">
                  <i class="flaticon-anger"></i>
                  <h3><?php the_field('services_title_3');?></h3>
                  <span><?php the_field('services_subtitle_3');?></span>
                </div>
                <div class="accordion-content">
                  <p><?php the_field('services_content_3');?></p>
                  <a href="services-details.html" class="offer-btn">Read More</a>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-title">
                  <i class="flaticon-bipolar"></i>
                  <h3><?php the_field('services_title_4');?></h3>
                  <span><?php the_field('services_subtitle_4');?></span>
                </div>
                <div class="accordion-content">
                  <p><?php the_field('services_content_4');?></p>
                  <a href="services-details.html" class="offer-btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="all-offer-btn">
              <a href="services.html" class="default-btn">
                Discover All Services
                <i class="flaticon-repairing-service"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="offer-image">
          			<?php 
		                $id_image = get_field('services_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>" alt="image">
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fun-facts-area bg-top pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-fun-fact">
            <div class="icon">
              <i class="flaticon-trophy"></i>
            </div>
            <h3>
              <span class="odometer" data-count="<?php the_field('experience_abt');?>">00</span>
              <span class="sign-icon"><b>+</b> Years</span>
            </h3>
            <p>Experience</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-fun-fact">
            <div class="icon">
              <i class="flaticon-customer"></i>
            </div>
            <h3>
              <span class="odometer" data-count="<?php the_field('happy_clients_abt');?>">00</span>
              <span class="sign-icon"><b>+</b> Happy</span>
            </h3>
            <p>Clients</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-fun-fact">
            <div class="icon">
              <i class="flaticon-user"></i>
            </div>
            <h3>
              <span class="odometer" data-count="<?php the_field('best_consultants_abt');?>">00</span>
              <span class="sign-icon"><b>+</b> Best</span>
            </h3>
            <p>Consultants</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-fun-fact">
            <div class="icon">
              <i class="flaticon-medal"></i>
            </div>
            <h3>
              <span class="odometer" data-count="<?php the_field('winning_awards');?>">00</span>
              <span class="sign-icon"><b>+</b> Winning</span>
            </h3>
            <p>Awards</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pricing-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <h2>Choose Our Best <span>Pricing</span></h2>
        <p><?php the_field('best_pricing_subtitle');?></p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-table">
            <div class="pricing-header">
              <i class="flaticon-user-1"></i>
              <h3><?php the_field('pricing_title_1');?></h3>
              <span><?php the_field('pricing_subtitle_1');?></span>
              <div class="price"><?php the_field('pricing_1');?></div>
            </div>
           <?php the_field('pricing_content_1');?>
            <div class="pricing-btn">
              <a href="pricing.html" class="default-btn">Get Started <i class="flaticon-pointer"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-table">
            <div class="pricing-header">
              <i class="flaticon-couple"></i>
              <h3><?php the_field('pricing_title_2');?></h3>
              <span><?php the_field('pricing_subtitle_2');?></span>
              <div class="price"><?php the_field('pricing_2');?></div>
            </div>
           <?php the_field('pricing_content_2');?>
            <div class="pricing-btn">
              <a href="pricing.html" class="default-btn">Get Started <i class="flaticon-pointer"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-table">
            <div class="pricing-header">
              <i class="flaticon-user-group"></i>
              <h3><?php the_field('pricing_title_3');?></h3>
              <span><?php the_field('pricing_subtitle_3');?></span>
              <div class="price"><?php the_field('pricing_3');?></div>
            </div>
           <?php the_field('pricing_content_3');?>
            <div class="pricing-btn">
              <a href="pricing.html" class="default-btn">Get Started <i class="flaticon-pointer"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pricing-main-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/pricing-shape.png" alt="image">
    </div>
  </section>
  <div class="download-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="download-main-content">
            <h3><?php the_field('download_title');?></h3>
            <h4><?php the_field('download_subtitle');?></h4>
            <p><?php the_field('download_content');?></p>
            <div class="download-btn">
              <a href="#" class="default-btn">Download Now <i class="flaticon-cloud-storage-download"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="download-main-image">
          	<?php 
		                $id_image = get_field('download_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>" alt="image">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="reviews-area ptb-100">
    <div class="container">
      <div class="clients-slides owl-carousel owl-theme">
        <?php $args = array(
      		'post_type'     => 'testimonials',
      		'posts_per_page' => -1,
      		'orderby'        => 'title',
      		'order'         => 'ASC'
      	);
      	$testimonials = new WP_Query($args);
      	while($testimonials-> have_posts()) : $testimonials -> the_post();
      	?>
        <div class="clients-item">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="reviews-image">
                <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item">
                <div class="title">
                  <h3>Clients Testimonials</h3>
                </div>
                <div class="single-feedback">
                  <div class="icon">
                    <i class="flaticon-close"></i>
                  </div>
                  <p><?php the_content();?></p>
                </div>
                <div class="title-info">
                  <h3><?php the_title();?></h3>
                  <span><?php the_field('position');?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php endwhile; wp_reset_postdata();?>
      </div>
    </div>
    <div class="reviews-main-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/shape-1.png" alt="image">
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