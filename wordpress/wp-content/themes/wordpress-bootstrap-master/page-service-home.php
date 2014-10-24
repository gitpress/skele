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
        <div class="col-md-4 col-sm-4" id="mimp-service-contact-form">
          <?php echo do_shortcode("[contact-form submit_button_text='Get a call back'][contact-field label='Name' type='name' required='1'/][contact-field label='Phone number' type='text' required='1'/][contact-field label='Email' type='email' required='1'/][/contact-form]"); ?>
        </div>
      </div>
    </div>
  </div>

        <div id="mimp-service-first" class="mimp-service-unit">
          <div class="container">
            <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">A World Class Service</h1>
                <hr class="brand-hr">
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <h2>With four unparalleled departments, we are sure to have the medical imaging and medical physics service you need</h2>
                <div class="row">
                  <div class="col-md-4">
                    <img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive">
                  </div>
                  <div class="col-md-8">
                            <p class="">From prototyping and building innovative medical devices, imaging and cutting-edge clinical services to radiation protection. From prototyping and building innovative medical devices, imaging and cutting-edge clinical services to radiation protection. From prototyping and building innovative medical devices, imaging and cutting-edge clinical services to radiation protection</p>
                            <div class="btn-group btn-input btn-block clearfix btn-service">
                              <button type="button" class="btn btn-mimp dropdown-toggle form-control" data-toggle="dropdown">
                                <span data-bind="label">A-Z Services</span>  <span class="caret"></span>
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
                    
                                                <div class="btn-group btn-input btn-block clearfix btn-service">
                              <button type="button" class="btn btn-mimp dropdown-toggle form-control" data-toggle="dropdown">
                                <span data-bind="label">Departmental Contacts</span>  <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu mimp-service-dropdown" role="menu">
                                    <li><a href="#">Commercial Services Information</a></li>
                                    <li><a href="#">Medical Physics Department</a></li>
                                    <li><a href="#">Clinical Engineering Department</a></li>
                                    <li><a href="#">Medical Imaging Department</a></li>
                              </ul>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>




  <div class="container">
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-md-10 col-md-offset-1 col-sm-10 clearfix" role="main">
          
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