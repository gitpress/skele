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
        <div class="col-md-8">
          <h1><?php the_title(); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-sm-8 clearfix" role="main">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content">
							<?php the_content(); ?>
						</section> <!-- end article section -->
						
						<footer>
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
          </div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
    </div>

<?php get_footer(); ?>