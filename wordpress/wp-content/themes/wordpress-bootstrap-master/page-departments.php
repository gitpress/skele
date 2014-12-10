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
          <h1>Medical Imaging and Medical Physics Directorate</h1>
          <?php echo '<p class="lead">' . get_post_meta($post->ID, 'page_desc', true) . '</p>'; ?>
        </div>
        <div class="col-md-4 col-sm-4" id="mimp-service-buttons">
               <a href="#" class="btn btn-default btn-block" role="button">Who are we?</a>
               <a href="#" class="btn btn-default btn-block" role="button">What we do</a>
               <a href="#" class="btn btn-default btn-block" role="button">Our team</a>
        </div>
      </div>
    </div>
  </div>


<div id="mimp-department-who">
  <div class="container">
    <div class="row" id="who-are-we">
      <div class="col-sm-8 col-sm-offset-2">
          <h1 class="under-margin mimp-brand-heading">Who are we</h1>
          <p>The Medical Imaging and Medical Physics Directorate brings together two of Sheffield Teaching Hospitals departments who provide closely related services.</p>
          <h3>Radiology</h3>
          <?php echo '<p class="central">' . get_post_meta($post->ID, 'department_radiology', true) . '</p>'; ?>
          <p>Our Radiology department employs highly skilled teams of radiologists, radiographers and nurses who utilise their expertise in the acquisition and  interpretation of images of the body for the diagnosis of disease. They apply the latest technology using X-Rays, Magnetic Resonance (MRI), Ultrasound, and Computed Tomography to produce images of the finest quality, whilst maintaining patient care at the highest levels. Their imaging services extend to cover the broadest range of imaging in both routine and acute settings and they play a vital role in the clinical diagnosis of injury and disease.  </p>      
          <h3>Medical Physics &amp; Clinical Engineering</h3>
          <?php echo '<p class="central">' . get_post_meta($post->ID, 'department_medphys', true) . '</p>'; ?>  
          <p>Medical Physics and Clinical Engineering teams work alongside them, to ensure that patients are adequately protected from the low levels of radiation used in imaging and to optimise the equipment such that acquired images are of the highest quality.  They further apply their knowledge and skills of physics and engineering to provide innovative services in  specialist areas of heathcare: Audiological Science, Clinical Engineering, Visual Electrophysiology, Scientific Computing and Informatics,  Nuclear Medicine, and  Gamma Knife Radiosurgery. </p>
           <a href="#" class="btn btn-mimp">Find out more about our commercial services</a> <a href="#" class="btn btn-link">Patient information</a>
      </div>
    </div>
  </div>
</div>

<div id="mimp-team-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="under-margin">Our management team</h1>
        
        <div class="row">
          <div class="col-md-6">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png"
                alt="Media Object" height="100px">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Media heading</h4> This is some sample text. This is some sample text. This is some sample
                text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                text.
              </div>
            </div>
            
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png"
                alt="Media Object" height="100px">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Media heading</h4> This is some sample text. This is some sample text. This is some sample
                text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                text.
              </div>
            </div>
          </div>
          
           <div class="col-md-6">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png"
                  alt="Media Object" height="100px">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4> This is some sample text. This is some sample text. This is some sample
                  text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                  text.
                </div>
              </div>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png"
                  alt="Media Object" height="100px">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4> This is some sample text. This is some sample text. This is some sample
                  text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                  text.
                </div>
               </div>
          </div>
        </div>
        
         <div class="row">
           <div class="col-md-12">
             <br>
             <a href="#" class="btn btn-link btn-white">Find out more about our staff</a>
           </div>
           
        </div>
      </div>
      
    </div>
  </div>
</div>

<div id="mimp-department-what">
  <div class="container">
    <div class="row" id="what-we-do">
      <div class="col-sm-8 col-sm-offset-2">
          <h1 class="under-margin mimp-brand-heading">What we do</h1>
          <p>The Medical Imaging and Medical Physics Directorate brings together two of Sheffield Teaching Hospitals departments who provide closely related services.</p>
          <p>Our Radiology department employs highly skilled teams of radiologists, radiographers and nurses who utilise their expertise in the acquisition and  interpretation of images of the body for the diagnosis of disease. They apply the latest technology using X-Rays, Magnetic Resonance (MRI), Ultrasound, and Computed Tomography to produce images of the finest quality, whilst maintaining patient care at the highest levels. Their imaging services extend to cover the broadest range of imaging in both routine and acute settings and they play a vital role in the clinical diagnosis of injury and disease.  </p>      
          <p>Medical Physics and Clinical Engineering teams work alongside them, to ensure that patients are adequately protected from the low levels of radiation used in imaging and to optimise the equipment such that acquired images are of the highest quality.  They further apply their knowledge and skills of physics and engineering to provide innovative services in  specialist areas of heathcare: Audiological Science, Clinical Engineering, Visual Electrophysiology, Scientific Computing and Informatics,  Nuclear Medicine, and  Gamma Knife Radiosurgery. </p>
           <a href="#" class="btn btn-mimp">Find out more about our commercial services</a> <a href="#" class="btn btn-link">Patient information</a>
      </div>
    </div>
  </div>
</div>

<div id="mimp-service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="under-margin">Our Services</h1>
        
        <div class="row">
          <div class="col-md-6">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/10913-2.jpg" alt="Media Object">
              </a>
              <div class="media-body">
                <h3 class="media-heading">Patient Services</h3> This is some sample text. This is some sample text. This is some sample
                text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                text.
              </div>
            </div>
            
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/Amicus-Sheffield18.jpg" alt="Media Object">
              </a>
              <div class="media-body">
                <h3 class="media-heading">Commercial Services</h3> This is some sample text. This is some sample text. This is some sample
                text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                text.
              </div>
            </div>
          </div>
          
           <div class="col-md-6">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/11534-2.jpg" alt="Media Object">
                </a>
                <div class="media-body">
                  <h3 class="media-heading">Scientific &amp; Technical Services</h3> This is some sample text. This is some sample text. This is some sample
                  text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                  text.
                </div>
              </div>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/1710-2.jpg" alt="Media Object">
                </a>
                <div class="media-body">
                  <h3 class="media-heading">Imaging Services</h3> This is some sample text. This is some sample text. This is some sample
                  text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                  text.
                </div>
               </div>
          </div>
        </div>
        
         <div class="row">
           <div class="col-md-12">
             <br>
             <a href="http://harris-credit.codio.io:3000/wordpress/services/" class="btn btn-link btn-white">Find the service you require with our A-Z of services</a>
           </div>
           
        </div>
      </div>
      
    </div>
  </div>
</div>

<div id="mimp-news-section">

  </div>

<div id="mimp-contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       
          <div class="row">
            <div class="col-md-6" id="">
              <h2 class="no-margin-header mimp-brand-heading">Find us</h2>
              <p>The Medical Imaging &amp; Medical Physics departments are based at the Royal Hallamshire Hospital. The Royal Hallamshire is situated a mile from the city on the Trust's central campus.</p>
              <address>
                  <a href="http://www.sth.nhs.uk/our-hospitals/royal-hallamshire-hospital/contact-us">Royal Hallamshire Hospital</a><br>
                  Glossop Road<br>
                  Sheffield<br>
                  S10 2JF<br>
              </address>
              
              <h2 class="mimp-brand-heading">Patient Information</h2>
              <p>If you have an appointment with us, or are looking for information about what to expect, please see our dedicated pages:</p>
              <a href="#">How do I get a referral?</a><br>
              <a href="#">How do I get there</a><br>
              <a href="#">What happens at an appointment?</a><br>
              <a href="#">What happens after an appointment?</a><br>


            </div>
            <div class="col-md-6" id="">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.0252728582786!2d-1.492584114025166!3d53.3785972830175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798276f8fdde19%3A0x431cbeb702d1a974!2sRoyal+Hallamshire+Hospital!5e0!3m2!1sen!2suk!4v1416486453029" width="auto" height="400" frameborder="0" style="border:0;min-height:100%;min-width:100%;"></iframe>
            </div>
          </div>        
      </div>
    </div>
  </div>
  
</div>



<?php get_footer(); ?>