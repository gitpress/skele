<?php
/*
Template Name: Commercial Service individual page
*/
?>


<?php get_header(); ?>

</div> <!-- div to kill container -->

  <div id="mimp-service-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1><?php the_title(); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
        </div>
        <div class="col-md-4 col-sm-4" id="mimp-service-contact-form">
          <?php echo do_shortcode("[contact-form][contact-field label='Name' type='name' required='1'/][contact-field label='Phone number' type='text' required='1'/][contact-field label='Email' type='email' required='1'/][/contact-form]"); ?>
        </div>
      </div>
    </div>
  </div>

<div class="container">
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-8 clearfix" role="main">
          
                  <ol class="breadcrumb hidden-xs">
          <?php if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<li id="breadcrumbs">','</li>');
                    } ?>
        </ol>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>

			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
          
					<?php endif; ?>

			
				</div> <!-- end #main -->
        

        
        
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
  
      <footer id="mimp-service-strenghts" class="text-center">
          <div class="row">
            <div class="col-sm-4">
              <i class="fa fa-lock fa-3x"></i>
              <i class="fa fa-lock fa-5x"></i>
              <i class="fa fa-lock fa-3x"></i>
              <h4>Approved Service</h4>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
            </div>
            
            <div class="col-sm-4">
              <i class="fa fa-users fa-5x"></i>
              <h4>Approved Service</h4>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
            </div>
            
            <div class="col-sm-4">
              <i class="fa fa-check-circle fa-5x"></i>
              <h4>Approved Service</h4>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
            </div>
          </div>
    </footer>

<?php get_footer(); ?>