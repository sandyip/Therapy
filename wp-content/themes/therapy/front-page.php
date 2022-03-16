<?php get_header();?>
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
  <div class="main-slides-area">
    <div class="home-slides owl-carousel owl-theme">


      <div class="main-slides-item" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/main-slides/slides-bg-1.jpg);">
        <div class="container">
          <div class="main-slides-content">
            <h1><?php the_field('banner_1');?></h1>
            <p><?php the_field('banner_subtitle_1');?></p>
            <div class="slides-btn">
              <a href="#" class="default-btn">Book Online Session <i class="flaticon-pointer"></i></a>
              <a href="#" class="optional-btn">Our Services <i class="flaticon-repairing-service"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="main-slides-item item-two" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/main-slides/slides-bg-2.jpg);">
        <div class="container">
          <div class="main-slides-content">
            <h1><?php the_field('banner_2');?></h1>
            <p><?php the_field('banner_subtitle_2');?></p>
            <div class="slides-btn">
              <a href="#" class="default-btn">Book Online Session <i class="flaticon-pointer"></i></a>
              <a href="#" class="optional-btn">Our Services <i class="flaticon-repairing-service"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="main-slides-item item-three" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/main-slides/slides-bg-3.jpg);">
        <div class="container">
          <div class="main-slides-content">
            <h1><?php the_field('banner_3');?></h1>
            <p><?php the_field('banner_subtitle_3');?></p>
            <div class="slides-btn">
              <a href="#" class="default-btn">Book Online Session <i class="flaticon-pointer"></i></a>
              <a href="#" class="optional-btn">Our Services <i class="flaticon-repairing-service"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="about-area bg-ffffff ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-main-content">
            <h3>Know About Us</h3>
            <div class="about-content-image">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/about/about-2.jpg" alt="image">
              <h4 class="sub-title"><?php the_field('about_title');?></h4>
              <a href="<?php the_field('about_youtube_link');?>" class="video-btn popup-youtube">
                <i class="flaticon-play"></i>
              </a>
            </div>
            <p><?php the_field('about_content');?></p>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <div class="about-information">
                  <i class="flaticon-trophy"></i>
                  <h5><?php the_field('experience');?></h5>
                  <span>Experience</span>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="about-information">
                  <i class="flaticon-customer"></i>
                  <h5><?php the_field('clients');?></h5>
                  <span>Clients</span>
                </div>
              </div>
            </div>
            <div class="about-btn">
              <a href="<?php echo site_url('/about');?>" class="default-btn">More About Us <i class="flaticon-user"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-main-image">
          	<?php 
                $id_image = get_field('about_image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  alt="image">
            
            <div class="about-shape about-wrap">
              <div class="shape-1">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/about/shape-1.png" alt="image">
              </div>
              <div class="shape-2">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/about/shape-2.png" alt="image">
              </div>
              <div class="shape-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/about/shape-3.png" alt="image">
              </div>
              <div class="shape-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/about/shape-4.png" alt="image">
              </div>
              <div class="shape-5">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/about/shape-5.png" alt="image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="services-area ptb-100">
    <div class="container">
      <div class="section-title">
        <h2><?php the_field('services_title');?></h2>
        <p><?php the_field('services_subtitle');?></p>
      </div>
      <div class="tab services-list-tab">
        <ul class="tabs">
          <li>
            <a href="#">
              <i class="flaticon-imagination"></i>
              <span><?php the_field('teens_consultation');?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-extrovert"></i>
              <span><?php the_field('family_consultation'); ?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-anger"></i>
              <span><?php the_field('one_to_one_consultation');?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-bipolar"></i>
              <span><?php the_field('couple_consultation');?></span>
            </a>
          </li>
        </ul>
        <div class="tab_content">
          <div class="tabs_item">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="services-tab-image">
                  <?php 
		                $id_image = get_field('teens_consultation_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>"  alt="image">
                  <div class="services-tab-shape">
                    <div class="shape-1">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-1.png" alt="image">
                    </div>
                    <div class="shape-2">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-2.png" alt="image">
                    </div>
                    <div class="shape-3">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-3.png" alt="image">
                    </div>
                    <div class="shape-4">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-4.png" alt="image">
                    </div>
                    <div class="circle-shape">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/circle-shape.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-tab-content">
                  <div class="services-content-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/services/flower.jpg" alt="image">
                    <h4 class="sub-title"><?php the_field('teens_consultation');?></h4>
                  </div>
                  <p><?php the_field('teens_consultation_content');?></p>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('teens_consultation_quote');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="services-details.html" class="default-btn">Read More <i class="flaticon-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tabs_item">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="services-tab-image">
                  <?php 
		                $id_image = get_field('family_consultation_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>"  alt="image">
                  <div class="services-tab-shape">
                    <div class="shape-1">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-1.png" alt="image">
                    </div>
                    <div class="shape-2">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-2.png" alt="image">
                    </div>
                    <div class="shape-3">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-3.png" alt="image">
                    </div>
                    <div class="shape-4">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-4.png" alt="image">
                    </div>
                    <div class="circle-shape">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/circle-shape.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-tab-content">
                  <div class="services-content-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/services/flower.jpg" alt="image">
                    <h4 class="sub-title"><?php the_field('family_consultation'); ?></h4>
                  </div>
                  <p><?php the_field('family_consultation_content'); ?></p>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('family_consultation_quote'); ?></p>
                  </div>
                  <div class="services-btn">
                    <a href="services-details.html" class="default-btn">Read More <i class="flaticon-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tabs_item">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="services-tab-image">
                  <?php 
                $id_image = get_field('one_to_one_consultation_image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  alt="image">
                  <div class="services-tab-shape">
                    <div class="shape-1">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-1.png" alt="image">
                    </div>
                    <div class="shape-2">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-2.png" alt="image">
                    </div>
                    <div class="shape-3">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-3.png" alt="image">
                    </div>
                    <div class="shape-4">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-4.png" alt="image">
                    </div>
                    <div class="circle-shape">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/circle-shape.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-tab-content">
                  <div class="services-content-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/services/flower.jpg" alt="image">
                    <h4 class="sub-title"><?php the_field('one_to_one_consultation');?></h4>
                  </div>
                  <p><?php the_field('one_to_one_consultation_content');?></p>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('one_to_one_consultation_quote');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="services-details.html" class="default-btn">Read More <i class="flaticon-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tabs_item">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="services-tab-image">
                  <?php 
                $id_image = get_field('couple_consultation_image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  alt="image">
                  <div class="services-tab-shape">
                    <div class="shape-1">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-1.png" alt="image">
                    </div>
                    <div class="shape-2">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-2.png" alt="image">
                    </div>
                    <div class="shape-3">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-3.png" alt="image">
                    </div>
                    <div class="shape-4">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/shape-4.png" alt="image">
                    </div>
                    <div class="circle-shape">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/services/circle-shape.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-tab-content">
                  <div class="services-content-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/services/flower.jpg" alt="image">
                    <h4 class="sub-title"><?php the_field('couple_consultation');?></h4>
                  </div>
                  <p><?php the_field('couple_consultation_content');?></p>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('couple_consultation_quote');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="services-details.html" class="default-btn">Read More <i class="flaticon-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="partner-area ptb-100 bg-color">
    <div class="container">
      <div class="partner-slides owl-carousel owl-theme">
      	<?php 
            $args = array(
              'post_type' => 'partner',
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            );
            $partners = new WP_Query($args);
            while($partners->have_posts()) : $partners-> the_post();

              ?>
        <div class="single-partner">
          <a href="about.html"><img src="<?php echo the_post_thumbnail_url();?>" alt="image"></a>
        </div>
      <?php endwhile; wp_reset_postdata();?>
      </div>
    </div>
  </div>
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
      <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/philosophy/line-shape.png" alt="image"> -->
    </div>
  </section>
  <section class="pricing-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <h2><?php the_field('pricing_title');?></h2>
        <p><?php the_field('pricing_subtitle');?></p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-table">
            <div class="pricing-header">
              <i class="flaticon-user-1"></i>
              <h3><?php the_field('pricing_card_1');?></h3>
              <span><?php the_field('pricing_card_subtitle_1');?></span>
              <div class="price"><?php the_field('pricing_value_1');?></div>
            </div>
            <ul class="pricing-features">
              <?php the_field('pricing_content_1');?>
            </ul>
            <div class="pricing-btn">
              <a href="pricing.html" class="default-btn">Get Started <i class="flaticon-pointer"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-table">
            <div class="pricing-header">
              <i class="flaticon-couple"></i>
              <h3><?php the_field('pricing_card_2');?></h3>
              <span><?php the_field('pricing_card_subtitle_2');?></span>
              <div class="price"><?php the_field('pricing_value_2');?></div>
            </div>
            <ul class="pricing-features">
              <?php the_field('pricing_content_2');?>
            </ul>
            <div class="pricing-btn">
              <a href="pricing.html" class="default-btn">Get Started <i class="flaticon-pointer"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-table">
            <div class="pricing-header">
              <i class="flaticon-user-group"></i>
              <h3><?php the_field('pricing_card_3');?></h3>
              <span><?php the_field('pricing_card_subtitle_3');?></span>
              <div class="price"><?php the_field('pricing_value_3');?></div>
            </div>
            <ul class="pricing-features">
             <?php the_field('pricing_content_3');?>
            </ul>
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
  <section class="fun-facts-area bg-top pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-fun-fact">
            <div class="icon">
              <i class="flaticon-trophy"></i>
            </div>
            <h3>
              <span class="odometer" data-count="<?php the_field('year_of_experience');?>">00</span>
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
              <span class="odometer" data-count="<?php the_field('happy_clients');?>">00</span>
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
              <span class="odometer" data-count="<?php the_field('consultants');?>">00</span>
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
              <span class="odometer" data-count="<?php the_field('awards');?>">00</span>
              <span class="sign-icon"><b>+</b> Winning</span>
            </h3>
            <p>Awards</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <h2><?php the_field('blog_title');?></h2>
        <p><?php the_field('blog_subtitle');?></p>
      </div>
      <div class="blog-slides owl-carousel owl-theme">
      	<?php $args = array(
      		'post_type'     => 'post',
      		'posts_per_page' => -1,
      		'orderby'        => 'date',
      		'order'         => ''
      	);
      	$posts = new WP_Query($args);
      	while($posts-> have_posts()) : $posts -> the_post();
      	?>

        <div class="single-blog-item shadow-lg">
          <div class="blog-image">
            <a href="blog-details.html"><img src="<?php echo the_post_thumbnail_url();?>" alt="image"></a>
            <div class="tag"><?php echo get_the_date('j');?> <span><?php echo get_the_date('M');?></span></div>
          </div>
          <div class="blog-content">
            <div class="meta">
              <p>
                <i class="flaticon-user"></i>
                By <a href="#"><?php the_author();?></a>
              </p>
            </div>
            <h3>
              <a href="blog-details.html"><?php the_title();?></a>
            </h3>
            <div class="blog-btn">
              <a href="blog-details.html" class="default-btn">Read More <i class="flaticon-plus"></i></a>
            </div>
          </div>
        </div>
       <?php endwhile; wp_reset_postdata();?>
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