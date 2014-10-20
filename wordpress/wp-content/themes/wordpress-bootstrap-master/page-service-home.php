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
          <h1><?php the_title(); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
        </div>
        <div class="col-md-4 col-sm-4" id="mimp-service-search-bar">
          <form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
              <fieldset>
              <div class="input-group">
                <input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default"><?php _e("Search","wpbootstrap"); ?></button>
                </span>
              </div>
              </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>



  <div class="container">
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-sm-8 clearfix" role="main">
          
        <ol class="breadcrumb hidden-xs">
          <?php if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<li id="breadcrumbs">','</li>');
                    } ?>
        </ol>      
          
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content">
							<?php the_content(); ?>
						</section> <!-- end article section -->
					</article> <!-- end article -->
          
          <?php endwhile; ?>	
          <?php endif; ?>
          
          
           <div class="row">
            <div class="col-md-6">
              <h3>Medical Imaging</h3>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>                          
              <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                  Services <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Imaging Services</a></li>
                  <li><a href="#">Radiology</a></li>
                  <li><a href="#">Magnetic Resonance</a></li>
                  <li><a href="#">Computed Tomography</a></li>
                  <li><a href="#">PET-CT</a></li>
                  <li><a href="#">Breast Imaging</a></li>
                  <li><a href="#">Nuclear Medicine</a></li>
                  <li><a href="#">Fluoroscopy</a></li>
                  <li><a href="#">Angrography</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Medical Imaging Department</a></li>
                </ul>
              </div>                  
              <a href="#" class="btn btn-mimp">Contact Details</a>
            </div>
            
            
            
            <div class="col-md-6 image-test">
              <h3>Scientific &amp; Technical Services</h3>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
             <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                  Services <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Medical Physics</a></li>
                  <li><a href="#">Clinical Engineering</a></li>
                  <li><a href="#">Radiation Protection Assurance</a></li>
                  <li><a href="#">Audiological Science</a></li>
                  <li><a href="#">Scientific Computing</a></li>
                  <li><a href="#">Radiosurgery Physics</a></li>
                  <li><a href="#">Radiotherapy</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Medical Physics Department</a></li>
                  <li><a href="#">Clinical Engineering Department</a></li>
                </ul>
              </div>     
              <a href="#" class="btn btn-mimp">Contact Details</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <h3>Commerical Services</h3>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
             <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                  Services <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Radiation Protection Assurance</a></li>
                  <li><a href="#">Medical Workshop Services</a></li>
                  <li><a href="#">Medical Equipment Maintenance</a></li>
                  <li><a href="#">Medical Equipment-</a></li>
                  <li><a href="#">Hearing Aids</a></li>
                  <li><a href="#">Clinical Engineering</a></li>
                  <li><a href="#">Medical Device Innovation</a></li>
                  <li><a href="#">On-site Consultation</a></li>
                  <li><a href="#">Training and Development</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Commercial Services Information</a></li>
                </ul>
              </div>   
              <a href="#" class="btn btn-mimp">Contact Details</a>
            </div>
            
            <div class="col-md-6">
              <h3>Speciality Services</h3>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
              <a href="#" class="btn btn-warning">Information</a>
              <a href="#" class="btn btn-mimp">Contact Details</a>
            </div>
          </div>

          <hr>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
            consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
            delenit augue duis dolore te feugait nulla facilisi call <a href="tel:01149999999">0114-9999999</a> or
            email <a href="mailto:mimp@mimp.co.uk">our service manager</a>
          </p>
          <div class="btn-group btn-input btn-block clearfix">
            <button type="button" class="btn btn-mimp dropdown-toggle form-control" data-toggle="dropdown">
              <span data-bind="label">Service Directory</span>  <span class="caret"></span>
            </button>
            <ul class="dropdown-menu mimp-service-dropdown" role="menu">
                  <li><a href="#">Radiation Protection Assurance</a></li>
                  <li><a href="#">Medical Workshop Services</a></li>
                  <li><a href="#">Medical Equipment Maintenance</a></li>
                  <li><a href="#">Medical Equipment-</a></li>
                  <li><a href="#">Hearing Aids</a></li>
                  <li><a href="#">Clinical Engineering</a></li>
                  <li><a href="#">Medical Device Innovation</a></li>
                  <li><a href="#">On-site Consultation</a></li>
                  <li><a href="#">Training and Development</a></li>
                  <li><a href="#">Medical Physics</a></li>
                  <li><a href="#">Clinical Engineering</a></li>
                  <li><a href="#">Radiation Protection Assurance</a></li>
                  <li><a href="#">Audiological Science</a></li>
                  <li><a href="#">Scientific Computing</a></li>
                  <li><a href="#">Radiosurgery Physics</a></li>
                  <li><a href="#">Radiotherapy</a></li>
                  <li><a href="#">Imaging Services</a></li>
                  <li><a href="#">Radiology</a></li>
                  <li><a href="#">Magnetic Resonance</a></li>
                  <li><a href="#">Computed Tomography</a></li>
                  <li><a href="#">PET-CT</a></li>
                  <li><a href="#">Breast Imaging</a></li>
                  <li><a href="#">Nuclear Medicine</a></li>
                  <li><a href="#">Fluoroscopy</a></li>
                  <li><a href="#">Angrography</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Commercial Services Information</a></li>
                  <li><a href="#">Medical Physics Department</a></li>
                  <li><a href="#">Clinical Engineering Department</a></li>
                  <li><a href="#">Medical Imaging Department</a></li>
            </ul>
          </div>
          
          <div class="mimp-internal-advert">
            <a href="#">
              <h2>Looking for training and career development?</h2>
              <p>See our dedicated careers section here</p>
            </a>
          </div>

          
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
    
    
    </div>



<?php get_footer(); ?>