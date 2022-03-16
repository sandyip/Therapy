<?php get_header('1');?>
<div class="page-banner-with-full-image item-bg3">
    <div class="container">
      <div class="page-banner-content-two">
        <h2>Blog</h2>
        <ul>
          <li>
            <a href="<?php echo site_url('/home');?>">Home</a>
          </li>
          <li>Blog</li>
        </ul>
      </div>
    </div>
  </div>
  <section class="blog-area pt-100 pb-100">
    <div class="container-fluid">
      <div class="row">

      	<?php while(have_posts()) : the_post();?>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog-item">
            <div class="blog-image">
              <a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>" alt="image"></a>
              <div class="tag"><?php echo get_the_date('j');?><span><?php echo get_the_date('M');?></span></div>
            </div>
            <div class="blog-content">
              <div class="meta">
                <p>
                  <i class="flaticon-user"></i>
                  By <a href="<?php the_permalink();?>"><?php the_author();?></a>
                </p>
              </div>
              <h3>
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
              </h3>
              <div class="blog-btn">
                <a href="<?php the_permalink();?>" class="default-btn">Read More <i class="flaticon-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile;?>
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