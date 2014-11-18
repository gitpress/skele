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

<div id="mimp-patient-main">
  <div class="container">
    <div class="col-md-4 col-sm-4 mimp-patient-sidebar">
      <div class="list-group">
        <a href="#" class="list-group-item active">Patient Information</a>
        <a href="#" class="list-group-item">How do I get here?</a>
        <a href="#" class="list-group-item">How do I make, change or cancel an appointment?</a>
        <a href="#" class="list-group-item">What should I do before I leave for an appointment?</a>
        <a href="#" class="list-group-item">What should I expect at an appointment?</a>
        <a href="#" class="list-group-item">Will I be provided any medicine?</a>
        <a href="#" class="list-group-item">How long will I stay at hospital, how am I evaluated?</a>
        <a href="#" class="list-group-item">How can I get in touch?</a>
        <a href="#" class="list-group-item">General FAQs</a>
      </div>
    </div>
    
    <div class="col-md-8 col-sm-8">

      
      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2 class="no-margin-header">How do I get here?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <img class="pull-right img-responsive" src="http://news.bbcimg.co.uk/media/images/78466000/jpg/_78466685_healthcare_team-spl.jpg">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>

      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>How do I make, change or cancel an appointment?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        
        <h3>Making an appointment</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        
        <h3>Changing an appointment</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        
        <h3>Cancelling an appointment</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>

      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>What should I do before I leave for an appointment?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>What should I expect at an appointment?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>Will I be provided any medicine?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>How long will I stay at hospital, how am I evaluated?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>How can I get in touch?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="mimp-patient-segment" id="#HowdoIgethere?">
        <h2>General FAQs</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
          nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
          wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
          lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>