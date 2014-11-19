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
            <div class="col-md-12">


              
            <div class="row" id="mimp-nav-blocks">
              <div class="col-md-3">
                
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive">
                <div class="mimp-branded-block" id="find-us">
                  <h4>Medical Imaging &amp; Clinical Engineering</h4>
                  <footer><em>Find out more about our three world-class departments</em>
                  </footer>
                </div>
                </a>
                 
              </div>
              <div class="col-md-3">
                
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive">
                                <div class="mimp-branded-block" id="find-us">
                  <h4>Radiology Department</h4>
                  <footer><em>Find out more about our three world-class departments</em>
                  </footer>
                </div>
                </a>
                  
              </div>
              <div class="col-md-3">
               
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive">
                                <div class="mimp-branded-block" id="find-us">
                  <h4>Our Professional Services</h4>
                  <footer><em>Find out more about our three world-class departments</em>
                  </footer>
                </div>
                </a>
                  
              </div>
              <div class="col-md-3">
               
                <a href="#"><img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg" class="img-responsive">
                                <div class="mimp-branded-block" id="find-us">
                 <h4>Meet the team</h4>
                  <footer><em>Find out more about our three world-class departments</em>
                  </footer>
                </div>
                </a>
                  
              </div>
            </div>
              
          </div>
        </div>
   </div>
 </div>
</div>



<?php get_footer(); ?>