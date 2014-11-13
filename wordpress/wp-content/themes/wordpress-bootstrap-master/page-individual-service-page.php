<?php
/*
Template Name: Service individual page MARK II
*/
?>

  <div id="mimp-service-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1><?php the_title(); ?></h1>
          <?php echo '<p class="lead">' . get_post_meta($post->ID, 'page_desc', true) . '</p>'; ?>
        </div>
        <div class="col-md-4 col-sm-4" id="mimp-service-contact-form">
          <?php echo do_shortcode("[contact-form submit_button_text='Get a call back'][contact-field label='Name' type='name' required='1'/][contact-field label='Phone number' type='text' required='1'/][contact-field label='Email' type='email' required='1'/][/contact-form]"); ?>
        </div>
      </div>
    </div>
  </div>