<?php
/*
Template Name: Patient Info
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
               <a href="#" class="btn btn-default btn-block" role="button">Getting Here</a>
               <a href="#" class="btn btn-default btn-block" role="button">Appointments</a>
               <a href="#A-Z" class="btn btn-default btn-block" role="button">What to expect</a>
               <a href="#FAQ" class="btn btn-default btn-block" role="button">FAQs</a>
               <a href="#A-Z" class="btn btn-warning btn-block" role="button">Contact us</a>
        </div>
      </div>
    </div>
  </div>


  <div id="mimp-patient-blocks">
   <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-12">
            <a href="#">
            <div class="mimp-patient-block">
              <h4>Can I find a particular consultant?</h4>
            </div>
              </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#">
            <div class="mimp-patient-block">
              <h4>Where is the department?</h4>
            </div>
              </a>
          </div>

        </div>
      </div>
      <div class="col-md-6">
        <a href="#">
        <div class="mimp-patient-block mimp-patient-appointment-block">
             <h4>How do I make an appointment?</h4> 
        </div>
          </a>
      </div>
      <div class="col-md-3">
         <div class="row">
           <div class="col-md-12">
             <a href="#">
             <div class="mimp-patient-block">
             <h4>What do I need to know about my treatment?</h4> 
              </div>
               </a>
           </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#">
            <div class="mimp-patient-block">
             <h4>What treatments do you provide?</h4> 
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>

<div id="mimp-patient-main">
  <div class="container">
    <div class="col-md-4 col-sm-4 mimp-patient-sidebar">
      <div class="list-group">
            <a href="#" class="list-group-item active">Patient Information</a>
            <a href="#" class="list-group-item">How do I get here?</a>
            <a href="#" class="list-group-item">How do I make, change or cancel an appointment?</a>
            <a href="#" class="list-group-item">What should I do before I leave for an appointment generally?</a>
            <a href="#" class="list-group-item">What should I expect at an appointment?</a>
            <a href="#" class="list-group-item">Will I be provided any medicine?</a>
            <a href="#" class="list-group-item">How long will I stay at hospital, how am I evaluated?</a>
            <a href="#" class="list-group-item">How can I get in touch?</a>
            <a href="#" class="list-group-item">General FAQs</a>
          </div>
    </div>
    <div class="col-md-8 col-sm-8">
      This is not
    </div>
  </div>
</div>




<?php get_footer(); ?>