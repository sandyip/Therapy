<footer class="footer-area bg-top pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="single-footer-widget">
            <div class="widget-logo">
              <a href="index.html"><img src="<?php echo get_theme_mod('therapy_img_handle');?>" alt="image"></a>
            </div>
            <p><?php echo get_theme_mod('therapy_content_handle');?></p>
            <div class="widget-share">
              <a href="<?php echo get_theme_mod('therapy_facebook_handle');?>" target="_blank">
                <i class='bx bxl-facebook'></i>
              </a>
              <a href="<?php echo get_theme_mod('therapy_twitter_handle');?>" target="_blank">
                <i class='bx bxl-twitter'></i>
              </a>
              <a href="<?php echo get_theme_mod('therapy_instagram_handle');?>" target="_blank">
                <i class='bx bxl-instagram'></i>
              </a>
              <a href="<?php echo get_theme_mod('therapy_pinterest_handle');?>" target="_blank">
                <i class='bx bxl-pinterest'></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-footer-widget">
            <h3>Quick Links</h3>
            <ul class="quick-links">
              <?php $args = array(
                  'post_type'     => 'post',
                  'posts_per_page' => -1,
                  'orderby'        => 'date',
                  'order'         => ''
                );
                $posts = new WP_Query($args);
                while($posts-> have_posts()) : $posts -> the_post();
                ?>
              <li>
                <a href="<?php the_permalink();?>"><i class='bx bxs-right-arrow'></i> <?php the_title();?></a>
              </li>
            <?php endwhile; wp_reset_postdata();?>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-footer-widget">
            <h3>Explore</h3>
           <!--  <ul class="quick-links">
              <li>
                <a href="about.html"><i class='bx bxs-right-arrow'></i> About Us</a>
              </li>
              <li>
                <a href="success-story.html"><i class='bx bxs-right-arrow'></i> Success Story</a>
              </li>
              <li>
                <a href="membership-levels.html"><i class='bx bxs-right-arrow'></i> Membership</a>
              </li>
              <li>
                <a href="purchase-guide.html"><i class='bx bxs-right-arrow'></i> Purchase Guide</a>
              </li>
              <li>
                <a href="privacy-policy.html"><i class='bx bxs-right-arrow'></i> Privacy Policy</a>
              </li>
              <li>
                <a href="terms-of-service.html"><i class='bx bxs-right-arrow'></i> Terms Of Services</a>
              </li>
            </ul> -->
            
            <?php
                          wp_nav_menu(
                            array(
                              'menu' => 'footer',
                              'container' => '',

                              'menu_class' => 'quick-links',
                              
                            )
                          ) 

                          ?>
                          
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-footer-widget">
            <h3>Contact Us</h3>
            <ul class="footer-contact-info">
              <li>
                <i class='flaticon-phone-call'></i>
                <span>Phone No:</span>
                <a href="tel:1300 908 054"><?php echo get_theme_mod('therapy_phone_handle');?></a>
              </li>
              <li>
                <i class='flaticon-mail'></i>
                <span>Email Address:</span>
                <a href="mailto:info@therapypoint.com.au"><?php echo get_theme_mod('therapy_email_handle');?></a>
              </li>
              <li>
                <i class='flaticon-placeholder'></i>
                <span>Location:</span>
                 <?php echo get_theme_mod('therapy_address_handle');?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright-area">
    <div class="container">
      <div class="copyright-area-content">
       
          <div class="col-lg-4"><?php echo get_theme_mod('therapy_copyright_handle');?></div>
          <div class="col-lg-4"><a href="#" style="color: white;" >Privacy & Policy</a></div>
          <div class="col-lg-4"><a href="#" style="color: white;" target="_blank" class="footer-img">Designed By : <img src="<?php echo get_theme_mod('therapy_designed_img_handle');?>"></a></div>
      </div>
    </div>
  </div>
  <div class="go-top">
    <i class='flaticon-up-arrow'></i>
  </div>
 <?php wp_footer();?>
</body>
</html>
