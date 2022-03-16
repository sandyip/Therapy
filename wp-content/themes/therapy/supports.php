<?php get_header('1')
/*Template Name: Support Page*/
?>
<div class="page-banner-with-full-image item-bg1">
    <div class="container">
      <div class="page-banner-content-two">
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
  <section class="purchase-guide-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="purchase-guide-content">

            <h3><?php the_field('support_title_1');?></h3>
            <?php the_field('support_content_1');?>
            <h3><?php the_field('support_title_2');?></h3>
            <?php the_field('support_content_2');?>
           
            <h3><?php the_field('support_title_3');?></h3>
            <?php the_field('support_content_3');?>
            <h3><?php the_field('support_title_4');?></h3>
            <?php the_field('support_content_4');?>
            <h3><?php the_field('support_title_5');?></h3>
            <?php the_field('support_content_5');?>
            <h3><span><?php the_field('support_title_6');?></h3>
            <?php the_field('support_content_6');?>
           
           
            <h3><span><?php the_field('support_title_7');?></h3>
            <?php the_field('support_content_7');?>
            <h3><span><?php the_field('support_title_8');?></h3>
            <?php the_field('support_content_8');?>
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