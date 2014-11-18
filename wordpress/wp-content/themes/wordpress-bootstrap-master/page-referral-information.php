<?php
/*
Template Name: Referral page
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
               <a href="<?php echo get_site_url() . "/patient-information/"; ?>" class="btn btn-default btn-block" role="button">Patient Information</a>
               <a href="#" class="btn btn-default btn-block" role="button">Making Referrals</a>
               <a href="#" class="btn btn-default btn-block" role="button">Request Cards</a>
               <a href="#A-Z" class="btn btn-warning btn-block" role="button">iRefer service</a>
        </div>
      </div>
    </div>
  </div>

  <div id="mimp-info-main">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 mimp-info-sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Referral Information</a>
            <a href="#" class="list-group-item">iRefer Service</a>
            <a href="#" class="list-group-item">X-Ray Referrals</a>
            <a href="#" class="list-group-item">CT, MRI, Ultrasound scans &amp; Fluoroscopy examinations</a>
            <a href="#" class="list-group-item">Breast imaging referrals</a>
            <a href="#" class="list-group-item">Angiography referrals</a>
            <a href="#" class="list-group-item">Walk-in service for X-Rays</a>
            <a href="#" class="list-group-item">Accessing other examinations</a>
            <a href="#" class="list-group-item">Request Cards</a>
          </div>
          
          <div class="list-group">
            <a href="#" class="list-group-item active">Departments</a>
            <a href="#" class="list-group-item">Radiology</a>
            <a href="#" class="list-group-item">Clinical Engineering</a>
            <a href="#" class="list-group-item">Medical Imaging</a>
          </div>
      
          <div class="list-group">
            <a href="#" class="list-group-item active list-group-item-warning">Get in touch</a>
            <a href="#" class="list-group-item">Phone us: </a>
            <a href="#" class="list-group-item">Email us</a>
            <a href="#" class="list-group-item">Write to us</a>
          </div>
        </div>
        
        <div class="col-md-8 col-sm-8">
                <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">iRefer Service</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <img class="pull-right img-responsive" src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg">
                  <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                  <a href="#" class="btn btn-block btn-lg btn-mimp" role="button">use iRefer</a>
               </div>
          
                <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">X-Rays</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <img class="pull-right img-responsive" src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg">
                  <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                 </div>
          
                <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">CT, MRI, Ultrasound scans &amp; Fluoroscopy examinations (Barium studies etc.)</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                   <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                </div>
          
                <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">Breast imaging</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <img class="pull-right img-responsive" src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg">
                  <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                  </div>
          
          
                <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">Angiography</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                   <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                </div>
          
          <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">Walk-in service for X-Rays</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                </div>
          
          <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">Accessing other examinations</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                   <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
                </div>
          
          <div class="mimp-referrals-segment" id="#">
                  <h2 class="no-margin-header">Request Cards</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <p>The iRefer service provides clinical guidelines to assist in making the best use of clinical radiology. Please click the button below to open iRefer via the RCR website - please note the site opens in a new window and is provided by the Royal College of Radiologists.</p>
                  <p>We are currently developing a system to provide advice on the referral method to Sheffield Teaching Hospitals for all available examinations listed in iRefer..</p>
            <a href="#" class="btn btn-block btn-lg btn-mimp" role="button">Order Request Cards</a>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>




<?php get_footer(); ?>