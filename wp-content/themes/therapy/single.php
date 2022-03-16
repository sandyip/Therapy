<?php get_header('1');?>
  <div class="page-banner-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="page-banner-image">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/page-banner/page-banner-3.jpg" alt="image">
            <div class="image-shape">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/page-banner/shape.png" alt="image">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="page-banner-content">
            <h2>Blog Details</h2>
            <ul>
              <li>
                <a href="<?php echo site_url('/');?>">Home</a>
              </li>
              <li>Blog Details</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="page-banner-shape">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/page-banner/banner-shape-1.png" alt="image">
    </div>
  </div>
  <div class="blog-details-area ptb-100">
    <div class="container">
      <div class="blog-details-desc">
        <div class="article-content">
          <div class="title-box">
            <h2><?php the_title();?></h2>
            <div class="entry-meta">
              <ul>
                <li><i class="flaticon-calendar"></i> <a href="#"><?php echo get_the_date('M');?>  <?php echo get_the_date('j');?>   <?php echo get_the_date('Y');?></a></li>
                <li><i class="flaticon-user"></i> <a href="#"><?php the_author();?></a></li>
                <li><i class="flaticon-chat-bubble"></i> <a href="#"> <?php wp_count_comments();?> Comments</a></li>
              </ul>
            </div>
          </div>
          <div class="article-image">
            <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
          </div>
          <h3><?php the_title();?></h3>
          <?php the_content();?>
          
         
         
        </div>
        <div class="article-footer">
          <div class="article-tags">
            <span>Tag:</span>
            <?php echo get_the_tag_list();?> 
          </div>
          <div class="article-share">
            <span>Share:</span>
            <a href="#" target="_blank">
              <i class='bx bxl-facebook'></i>
            </a>
            <a href="#" target="_blank">
              <i class='bx bxl-twitter'></i>
            </a>
            <a href="#" target="_blank">
              <i class='bx bxl-instagram'></i>
            </a>
            <a href="#" target="_blank">
              <i class='bx bxl-linkedin'></i>
            </a>
          </div>
        </div>
        
        <div class="psylo-post-navigation">
          <?php $args = array(
            'post_type'   => 'post',
            'posts_per_page'  => 2,
            'orderby'        => 'date',
            'order'         => '',
          );
          $posts = new WP_Query($args);
          while($posts-> have_posts()) : $posts -> the_post();
          ?>
          <div class="prev-link-wrapper">
            <div class="info-prev-link-wrapper">
              <a href="<?php the_permalink();?>">
                <span class="image-prev">
                  <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                  <!-- <span class="post-nav-title">Prev</span> -->
                </span>
                <span class="prev-link-info-wrapper">
                  <span class="prev-title">
                    <?php the_title();?>
                  </span>
                </span>
              </a>

            </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>
          <a href="<?php echo get_previous_posts_link();?>" class="default-btn">Previous Post <i class="flaticon-left-arrow"></i></a>
              <a href="<?php echo get_next_posts_link();?>" class="default-btn">Next Post <i class="flaticon-right-arrow"></i></a>
          
          <!-- <div class="next-link-wrapper">
            <div class="info-next-link-wrapper">
              <a href="#">
                <span class="next-link-info-wrapper">
                  <span class="next-title">
                    <?php the_title();?>
                  </span>
                </span>
                <span class="image-next">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog-2.jpg" alt="image">
                  <span class="post-nav-title">Next</span>
                </span>
              </a>
              <a href="<?php paginate_links();?>" class="default-btn">Next Post <i class="flaticon-right-arrow"></i></a>
            </div>
          </div> -->
        
        </div>
        

       <!-- <div class="comments-area">
          <h3 class="comments-title">3 Comments:</h3>
          <div class="comment-list">
            <div class="comment">
              <div class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/images-1.jpg" class="avatar" alt="image">
                    <b class="fn">John Doe</b>
                  </div>
                  <div class="comment-metadata">
                    <a href="#">12 Hours Ago</a>
                  </div>
                </footer>
                <div class="comment-content">
                  <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                </div>
                <div class="reply">
                  <a href="#" class="comment-reply-link">Reply <i class="flaticon-back-arrow"></i></a>
                </div>
              </div>
              <div class="children">
                <div class="comment">
                  <div class="comment-body">
                    <footer class="comment-meta">
                      <div class="comment-author vcard">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/images-2.jpg" class="avatar" alt="image">
                        <b class="fn">John Doe</b>
                      </div>
                      <div class="comment-metadata">
                        <a href="#">12 Hours Ago</a>
                      </div>
                    </footer>
                    <div class="comment-content">
                      <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                    </div>
                    <div class="reply">
                      <a href="#" class="comment-reply-link">Reply <i class="flaticon-back-arrow"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment">
                <div class="comment-body">
                  <footer class="comment-meta">
                    <div class="comment-author vcard">
                      <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/images-3.jpg" class="avatar" alt="image">
                      <b class="fn">Jane Doe</b>
                    </div>
                    <div class="comment-metadata">
                      <a href="#">12 Hours Ago</a>
                    </div>
                  </footer>
                  <div class="comment-content">
                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                  </div>
                  <div class="reply">
                    <a href="#" class="comment-reply-link">Reply <i class="flaticon-back-arrow"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="comment-respond">
            <h3 class="comment-reply-title">Leave A Comment</h3>
            <form class="comment-form">
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Comment"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="default-btn">Post A Comment <i class="flaticon-right-arrow"></i></button>
            </form>
          </div> -->
        <!-- </div> --> 

        
      </div>
    </div>
  </div>
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