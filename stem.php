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
        <h2 class="text-center">Get involved with COSPAR-K</h2>
        <p class="mt-4 text-center">Our Free Space STEM Event which will feature two hero zones: our <span style="color: #5b0e5d"><b>Awesome Activities Arena</b></span> and <span style="color: #5b0e5d"><b>Spectacular Speakers Schedule</b></span>. We have something for everyone, whether you can attend in-person or would like to connect in virtually via COSPAR-K TV <em>powered by Microsoft</em>.</p>
        <h3 class="my-4 text-center">The best part is tickets are 100% <b>FREE!</b></h3>

        <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank" class="button-main my-4">
          <span class="button-head">Book Your Tickets Now!</span>
        </a>


        <div class="row stem-cards justify-content-center mb-4">
          <a href="stem-tickets" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card7.jpg">
              <h3 class="stem-card-title p-4" style="line-height: 1.5rem">Tickets <br> <span style="font-size:0.7em; font-weight: 400;"><em>All the ways you can get involved</em></span></h3>
            </div>
          </a>
          <a href="stem-tv" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card9.jpg">
              <h3 class="stem-card-title p-4" style="line-height: 1.5rem">COSPAR-K TV <br> <span style="font-size:0.7em; font-weight: 400;"><em>powered by Microsoft</em></span></h3>
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

        <a href="stem-tv.php" target="_blank" class="button-secondary mb-4">
          <span class="button-head mb-0"><b>Book Your COSPAR-K TV Tickets</b></span>
          <span class="button-body my-0"><em>powered by Microsoft</em></span>
        </a>
        <a href="./COSPAR-K-Ground-Map-Combined.pdf" target="_blank" class="button-secondary mb-4">
          <span class="button-head mb-0"><b>Explore the COSPAR-K Ground Map</b></span>
        </a>
        <a href="./COSPAR-K-Ground-Map-Combined.pdf" target="_blank" class="button-secondary mb-5">
          <span class="button-head mb-0"><b>View the Promo Flyer</b></span>
        </a>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_q2q-WBhH_4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


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
