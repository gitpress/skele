<?php
/*
Template Name: Department Homepage
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
               <a href="#" class="btn btn-default btn-block" role="button">Medical Physics &amp; Clinical Engineering</a>
               <a href="#" class="btn btn-default btn-block" role="button">Audiological Science</a>
               <a href="#" class="btn btn-default btn-block" role="button">Radiology</a>
               <a href="#" class="btn btn-default btn-block" role="button">Staff Directory</a>
               <a href="#" class="btn btn-warning btn-block" role="button">Contact us</a>
        </div>
      </div>
    </div>
  </div>

<div id="">
 <div class="container">
    <div class="row">
      <div class="container">
            <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">Our Departments</h1>
                <hr class="brand-hr">
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <h2>With three unparalleled departments, we are sure to have the medical imaging and medical physics service you need</h2>
                <div class="row">
                  
                  <div class="col-md-12">
                            <p class="">From prototyping and building innovative medical devices, imaging and cutting-edge clinical services to radiation protection. From prototyping and building innovative medical devices, imaging and cutting-edge clinical services to radiation protection. From prototyping and building innovative medical devices, imaging and cutting-edge clinical services to radiation protection</p>
                            
                    
                                                
                  </div>
                </div>
              </div>
            </div>
              
            <div class="row">
              <div class="col-md-3">
                <h4>Commercial Services</h4>
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive"></a>
                  
              </div>
              <div class="col-md-3">
                <h4>Clinical Engineering</h4>
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive"></a>
                  
              </div>
              <div class="col-md-3">
                <h4>Imaging Services</h4>
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive"></a>
                  
              </div>
              <div class="col-md-3">
                <h4>Training and Careers</h4>
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive"></a>
                  
              </div>
            </div>
              
          </div>
        </div>
   </div>
 </div>
</div>



<?php get_footer(); ?>