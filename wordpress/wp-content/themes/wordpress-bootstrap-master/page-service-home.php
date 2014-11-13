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





<div id="mimp-service-sieve">
  <div class="container" id="A-Z">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">A-Z Service Directory</h1>
                <hr class="brand-hr">
              </div>
        </div> 
        
        <script>
          jQuery(document).ready(function() {
            jQuery("table.sieve").sieve();
            jQuery("#mimp-service-sieve > div > div > div > div").addClass('this-class');
            }); 
        </script>

          <!-- Table -->
          <table class="table sieve">
            <thead>
              <tr>
                <th><a href="#">Commercial Services</a></th>
                <th><a href="#">Imaging Services</a></th>
                <th><a href="#">Scientific Services</a></th>
                <th><a href="#">Departments</a></th>
              </tr>
            </thead>
            <tbody>
              <tr><td><a href="#">Zachary Taylor</a></td><td>Barboursville, Virginia</td><td>Richard Nixon</td><td>Yorba Linda, California</td></tr>
              <tr><td>Warren G. Harding</td><td>Blooming Grove, Ohio</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
              <tr><td>John Quincy Adams</td><td>Braintree, Massachusetts</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
              <tr><td>John F. Kennedy</td><td>Brookline, Massachusetts</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
              <tr><td>Grover Cleveland</td><td>Caldwell, New Jersey</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
            </tbody>
          </table>
        
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>