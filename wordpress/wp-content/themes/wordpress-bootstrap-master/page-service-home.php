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


<div id="" class="mimp-service-unit">
  <div class="container">
    <div class="col-md-12">

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <h1 class="section-header">Patient Services</h1>
              <hr class="brand-hr">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2>With three unparalleled departments, we are sure to have the medical imaging and medical physics service you need</h2>
              <div class="row">
                <div class="col-md-4">
                  <img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg"
                  class="img-responsive">
                </div>
                <div class="col-md-8">
                  <p class="">From prototyping and building innovative medical devices, imaging
                    and cutting-edge clinical services to radiation protection. From
                    prototyping and building innovative medical devices, imaging
                    and cutting-edge clinical services to radiation protection. From
                    prototyping and building innovative medical devices, imaging
                    and cutting-edge clinical services to radiation protection</p>
                </div>
              </div>
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
        
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <h1 class="section-header">Commercial Services</h1>
              <hr class="brand-hr">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2>With three unparalleled departments, we are sure to have the medical imaging and medical physics service you need</h2>
              <div class="row">
                <div class="col-md-4">
                  <img src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg"
                  class="img-responsive">
                </div>
                <div class="col-md-8">
                  <p class="">From prototyping and building innovative medical devices, imaging
                    and cutting-edge clinical services to radiation protection. From
                    prototyping and building innovative medical devices, imaging
                    and cutting-edge clinical services to radiation protection. From
                    prototyping and building innovative medical devices, imaging
                    and cutting-edge clinical services to radiation protection</p>
                </div>
              </div>
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



<?php get_footer(); ?>