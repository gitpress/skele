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
               <a href="#" class="btn btn-default btn-block" role="button">Getting Here</a>
               <a href="#" class="btn btn-default btn-block" role="button">Appointments</a>
               <a href="#A-Z" class="btn btn-default btn-block" role="button">What to expect</a>
               <a href="#FAQ" class="btn btn-default btn-block" role="button">FAQs</a>
               <a href="#A-Z" class="btn btn-warning btn-block" role="button">Contact us</a>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>