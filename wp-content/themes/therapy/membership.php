<?php get_header('1');
/*Template Name: Membership Page*/
?>
<div class="page-banner-with-full-image item-bg2">
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
  <div class="membership-levels-area ptb-100">
    <div class="container">
      <div class="membership-levels-table table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th></th>
              <th>
                <span class="desc-1">$500</span>
                <span class="desc-2">Silver Membership</span>
                <span class="desc-3">You can get few features</span>
              </th>
              <th>
                <span class="desc-1">$1,000</span>
                <span class="desc-2">Gold Membership</span>
                <span class="desc-3">You can get most features</span>
              </th>
              <th>
                <span class="desc-1">$1,500</span>
                <span class="desc-2">Diamond Membership</span>
                <span class="desc-3">You can get all features</span>
              </th>
            </tr>
          </thead>
          <tbody>
            
            <?php
			if( have_rows('features') ):
			    while( have_rows('features') ) : the_row(); ?>
            <tr>
              <td><a href="#"><?php echo get_sub_field('name_of_features');?></a></td>
              <td ><?php echo get_sub_field('silver_membership');?></td>
              <td ><?php echo get_sub_field('gold_membership');?></i></td>
              <td ><?php echo get_sub_field('diamond_membership');?></td>
            </tr>
        <?php endwhile;?>
    <?php endif;?>

            <!-- <tr>
              <td><a href="#">Hands-On Python & R In Data Science</a></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Complete Data Science Bootcamp</a></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Programming Masterclass for Developers</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Hands-On Artificial Neural Networks</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">PRINCE2® Practitioner Certification Training</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">PMI-RMP® Certification Training</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">PRINCE2® Foundation Certification Training</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">PMP® Plus</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">PMP® Renewal Pack</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Digital Project Manager</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Agile Project Management; Agile Delivery</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Vue JS 2 - The Complete Guide</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Everything You Need to Program in Python</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Mathematical Foundation For Machine Learning</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Drawing Course - Beginner to Advanced</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Deep Learning and Artificial Intelligence</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Information About UI/UX Design Degree</a></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Photography Photo modify and Beautiful</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr>
            <tr>
              <td><a href="#">Professional IT Expert Certificate Course</a></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-none"><i class='bx bx-x'></i></td>
              <td class="item-check"><i class='bx bx-check'></i></td>
            </tr> -->
            <tr>
              <td></td>
              <td>
                <a href="#" class="select-btn">Get it now</a>
              </td>
              <td>
                <a href="#" class="select-btn">Get it now</a>
              </td>
              <td>
                <a href="#" class="select-btn">Get it now</a>
              </td>
            </tr>
          </tbody>
        </table>
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