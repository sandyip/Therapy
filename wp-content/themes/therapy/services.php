<?php get_header('1');
/*Template Name: Services page*/
?>
 <div class="page-banner-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="page-banner-image">
            <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="page-banner-content">
            <h2>Services</h2>
            <ul>
              <li>
                <a href="<?php echo site_url('/home');?>">Home</a>
              </li>
              <li>Services</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="page-banner-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/page-banner/banner-shape-1.png" alt="image">
    </div>
  </div>
  <div class="services-area bg-ffffff ptb-100">
    <div class="container">
      <div class="section-title">
        <h2><?php the_field('services_title');?></h2>
        <p><?php the_field('services_content');?></p>
      </div>
      <div class="tab services-list-tab">
        <ul class="tabs">
          <li>
            <a href="#">
              <i class="flaticon-imagination"></i>
              <span><?php the_field('service_title_1');?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-extrovert"></i>
              <span><?php the_field('service_title_2');?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-anger"></i>
              <span><?php the_field('service_title_3');?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-bipolar"></i>
              <span><?php the_field('service_title_4');?></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-bipolar"></i>
              <span><?php the_field('service_title_5');?></span>
            </a>
          </li>
           <li>
            <a href="#">
              <i class="flaticon-bipolar"></i>
              <span><?php the_field('service_title_6');?></span>
            </a>
          </li>
           <li>
            <a href="#">
              <i class="flaticon-bipolar"></i>
              <span><?php the_field('service_title_7');?></span>
            </a>
          </li>
        </ul>
        <div class="tab_content">
          <div class="tabs_item">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="services-tab-image">
                  <?php 
		                $id_image = get_field('services_image_1');
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
                    <h4 class="sub-title"><?php the_field('service_title_1');?></h4>
                  </div>
                  <?php the_field('services_content_1');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_1');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/assessment');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
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
		                $id_image = get_field('services_image_2');
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
                    <h4 class="sub-title"><?php the_field('service_title_2');?></h4>
                  </div>
                  <?php the_field('services_content_2');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_2');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/intervention');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
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
		                $id_image = get_field('services_image_3');
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
                    <h4 class="sub-title"><?php the_field('service_title_3');?></h4>
                  </div>
                  <?php the_field('services_content_3');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_3');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/group-theory');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
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
		                $id_image = get_field('services_image_4');
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
                    <h4 class="sub-title"><?php the_field('service_title_4');?></h4>
                  </div>
                 <?php the_field('services_content_4');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_4');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/information-sessions');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
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
                    $id_image = get_field('services_image_5');
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
                    <h4 class="sub-title"><?php the_field('service_title_5');?></h4>
                  </div>
                 <?php the_field('services_content_5');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_5');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/occupational-therapy');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
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
                    $id_image = get_field('services_image_6');
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
                    <h4 class="sub-title"><?php the_field('service_title_6');?></h4>
                  </div>
                  <?php the_field('services_content_6');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_6');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/speech-pathology');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
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
                    $id_image = get_field('services_image_7');
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
                    <h4 class="sub-title"><?php the_field('service_title_7');?></h4>
                  </div>
                  <?php the_field('services_content_7');?>
                  <div class="services-quote">
                    <i class="flaticon-close"></i>
                    <p><?php the_field('services_quote_7');?></p>
                  </div>
                  <div class="services-btn">
                    <a href="<?php echo site_url('/preschool-school-and-home-visits');?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    </div>
    <div class="philosophy-main-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/philosophy/line-shape.png" alt="image">
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