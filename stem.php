<?php
$cospark = true;
$title = 'STEM COSPAR 2021';
include('include/header.php');
include('include/cospark.php');
?>
<!-- content -->
<div class="content">
  <div class="container">
    <div class="row py-5">
      <div class="col stem-page">
        <h1 class="text-center">Get involved at COSPAR-K</h1>
        <p class="mt-4 text-center">Our Free Space STEM Event which will feature two hero zones: our <a href="stem-activities" class="purple"><b>Awesome Activities Arena</b></a> and <a href="stem-speakers-schedule" class="purple"><b>Spectacular Speakers Schedule</b></a>. We have something for everyone, whether you can attend in-person or would like to connect in virtually via COSPAR-K TV <em>powered by Microsoft</em>.</p>
        <h3 class="my-4 text-center">The best part is tickets are 100% <b>FREE!</b></h3>
        <div class="row">
          <div class="col-6">
            <a href="./COSPAR-K-Ground-Map-Combined.pdf" target="_blank" class="button-secondary mb-4">
              <span class="button-body mb-0"><b>Explore the COSPAR-K Ground Map</b></span>
            </a>
          </div>
          <div class="col-6">
            <a href="./COSPAR-K-Promo-Flyer.pdf" target="_blank" class="button-secondary mb-5">
              <span class="button-body mb-0"><b>View the Promo Flyer</b></span>
            </a>
          </div>
        </div>



        <div class="row stem-cards justify-content-center mb-4">
          <a href="stem-tickets" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card7.jpg">
              <h3 class="stem-card-title p-4" style="line-height: 1.5rem">Tickets <br> <span style="font-size:0.7em; font-weight: 400;"><em>All the ways you can get involved</em></span></h3>
            </div>
          </a>
          <a href="stem-tv" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card10.png">
              <h3 class="stem-card-title p-4" style="line-height: 1.5rem">COSPAR-K TV <br> <span style="font-size:0.7em; font-weight: 400;"><em>Powered by Microsoft</em></span></h3>
            </div>
          </a>
          <a href="stem-activities" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card2.jpg">
              <h3 class="stem-card-title p-4">Awesome Activities Arena</h3>
            </div>
          </a>
          <a href="stem-speakers-schedule" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card3.jpg">
              <h3 class="stem-card-title p-4">Spectacular Speakers Schedules</h3>
            </div>
          </a>
        </div>


        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_q2q-WBhH_4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank" class="button-main my-4">
          <span class="button-head">Book Your Tickets Now!</span>
        </a>

        <?php
        include('include/cospark-footer.php');
        ?>

      </div>
    </div>
  </div>
</div>
<!-- content -->

<?php
include('include/footer.php');
?>
