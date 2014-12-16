<?php
/*
Template Name: Conditions
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
     
      
      <div class="col-md-8">
        <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">Conditions &amp; Treatments</h1>
                <hr class="brand-hr">
              </div>
        </div> 
        
        <script>
          jQuery(document).ready(function() {
            jQuery("section.sieve").sieve({ itemSelector: "article" });
            }); 
        </script>
        
        <section class="sieve">
         
         
          <!-- FIND SERVICE TAGGED POSTS -->
          <?php
                    // WP_Query arguments
          $args = array (
            'category_name'          => 'condition',
            'order'                  => 'ASC',
            'orderby'                => 'title',
          );

          // The Query
          $get_conditions = new WP_Query( $args );

          // The Loop
          if ( $get_conditions->have_posts() ) {
            while ( $get_conditions->have_posts() ) {
              $get_conditions->the_post();
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
            'category_name'          => 'treatment',
            'order'                  => 'ASC',
            'orderby'                => 'title',
          );

          // The Query
          $get_treatments = new WP_Query( $args );

          // The Loop
          if ( $get_treatments->have_posts() ) {
            while ( $get_treatments->have_posts() ) {
              $get_treatments->the_post();
              the_content();
            }
          } else {
            // no posts found
          }

          // Restore original Post Data
          wp_reset_postdata(); ?>
          
          
      </section>
      </div>
      
      <div class="col-md-4">
        <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">A-Z</h1>
                <hr class="brand-hr">
              </div>
        </div>        
        
        <div class="row">
          <ul class="nav nav-pills nav-stacked text-center">
            <li role="presentation" class=""><a href="#">Treatment</a></li>
            <li role="presentation"><a href="#">Condition</a></li>
            <li role="presentation"><a href="#">Treatment</a></li>
            <li role="presentation"><a href="#">Condition</a></li>
            <li role="presentation"><a href="#">Treatment</a></li>
            <li role="presentation"><a href="#">Condition</a></li>
            <li role="presentation"><a href="#">Treatment</a></li>
            <li role="presentation"><a href="#">Condition</a></li>
            <li role="presentation"><a href="#">Treatment</a></li>
            <li role="presentation"><a href="#">Condition</a></li>
            <li role="presentation"><a href="#">Treatment</a></li>
          </ul>
          
        </div>
      </div>
      
      
    </div>
  </div>
</div>

<?php get_footer(); ?>