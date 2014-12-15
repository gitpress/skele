<?php
/*
Template Name: Service home page
*/
?>

<?php get_header(); ?>

</div> <!-- div to kill container -->

  <div id="mimp-service-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1><?php the_title(); ?></h1>
          <?php echo '<p class="lead">' . get_post_meta($post->ID, 'page_desc', true) . '</p>'; ?>
        </div>
        <div class="col-md-4 col-sm-4" id="mimp-service-buttons">
          
          <a href="<?php echo get_site_url() . "/patient-information/"; ?>" class="btn btn-default btn-lg btn-block" role="button">Patient Information</a>
          <a href="<?php echo get_site_url() . "/services/commercial-services/"; ?>" class="btn btn-default btn-lg btn-block" role="button">Commercial Services</a>
          <a href="#A-Z" class="btn btn-warning btn-lg btn-block" role="button">A-Z Service Directory</a>
        </div>
      </div>
    </div>
  </div>

<div id="mimp-service-sieve">
  <div class="container" id="A-Z">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">A-Z Service Directory</h1>
                <hr class="brand-hr">
              </div>
        </div> 
        
        <script>
          jQuery(document).ready(function() {
            jQuery("section.sieve").sieve({ itemSelector: "article" });
            }); 
        </script>
        
        <section class="sieve">
         
          <!-- FIND DEPARTMENT TAGGED POSTS -->
          <?php
                    // WP_Query arguments
          $args = array (
            'category_name'          => 'Department',
            'order'                  => 'ASC',
            'orderby'                => 'title',
          );

          // The Query
          $get_departments = new WP_Query( $args );

          // The Loop
          if ( $get_departments->have_posts() ) {
            while ( $get_departments->have_posts() ) {
              $get_departments->the_post();
              the_content();
            }
          } else {
            // no posts found
          }

          // Restore original Post Data
          wp_reset_postdata(); ?>
          
          <!-- FIND SERVICE TAGGED POSTS -->
          <?php
                    // WP_Query arguments
          $args = array (
            'category_name'          => 'Service',
            'order'                  => 'ASC',
            'orderby'                => 'title',
          );

          // The Query
          $get_services = new WP_Query( $args );

          // The Loop
          if ( $get_services->have_posts() ) {
            while ( $get_services->have_posts() ) {
              $get_services->the_post();
              the_content();
            }
          } else {
            // no posts found
          }

          // Restore original Post Data
          wp_reset_postdata(); ?>
          
          
      </section>


        
      </div>
    </div>
  </div>
</div>


<div id="mimp-nav-blocks">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/patient-information/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/10913-2.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Patient Information</h4>
              <footer><em>Learn more about your patient journey and our services.</em>
              </footer>
            </div>
          </a>
        </div>
        
       <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/departments/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/10912-2.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Our Departments</h4>
              <footer><em>Explore our commercial and patient services</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/commercial-services/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/Amicus-Sheffield18.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Commercial Services</h4>
              <footer><em>Find out more about our three world-class departments</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/referrals/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/IMG_6101Sheff.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Referral Information</h4>
              <footer><em>Find out how to make a referral to our service</em>
              </footer>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>





<?php get_footer(); ?>