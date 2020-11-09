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
        <h5>Get involved with COSPAR-K: A Free Space STEM Event which will feature two hero zones: our <b>Awesome Activities Arena</b> and <b>Spectacular Speakers Schedule</b>. We have something for everyone, whether you can attend in-person or would like to connect in virtually via COSPAR-K TV powered by Microsoft.</h5>
        <h3 class="my-4">The best part is tickets are 100% <b>FREE!</b></h3>

        <a href="" class="button-main my-5">
          <span class="button-head">View the COSPAR-K Ground Map</span>
        </a>

        <div class="row stem-cards mb-4">
          <!-- <a href="stem-about#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card1.jpg">
              <h3 class="stem-card-title p-4">About COSPAR-K</h3>
            </div>
          </a> -->
          <a href="stem-tickets#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card7.jpg">
              <h2 class="stem-card-title p-4" style="line-height: 1.5rem">Tickets <br> <span style="font-size:0.5em; font-weight: 400;"><em>All the ways you can get involved</em></span></h2>
            </div>
          </a>
          <a href="stem-tickets#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="https://via.placeholder.com/550x450">
              <!-- <img class="img-fluid" src="img/cospark/card7.jpg"> -->
              <h2 class="stem-card-title p-4" style="line-height: 1.5rem">COSPAR-K TV <br> <span style="font-size:0.5em; font-weight: 400;"><em>powered by Microsoft</em></span></h2>
            </div>
          </a>
          <!-- <a href="stem-competition#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card5.jpg">
              <h3 class="stem-card-title p-4">Competition</h3>
            </div>
          </a> -->
          <a href="stem-activities#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card2.jpg">
              <h2 class="stem-card-title p-4">Awesome Activities Arena</h2>
            </div>
          </a>
          <a href="stem-keynotes#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card3.jpg">
              <h2 class="stem-card-title p-4">Spectacular Speakers Schedules</h2>
            </div>
          </a>
          <!-- <a href="stem-power-talks#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card4.jpg">
              <h3 class="stem-card-title p-4">Power Talks</h3>
            </div>
          </a> -->
          <!-- <a href="stem-catalogue#cospark" class="col-md-6">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card6.jpg">
              <h3 class="stem-card-title p-4">Catalogue</h3>
            </div>
          </a> -->
        </div>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_q2q-WBhH_4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank" class="button-main my-5">
          <span class="button-head">Book your Tickets Now!</span>
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
