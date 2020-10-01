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




        <div class="row stem-cards mb-4">
          <a href="stem-about#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card1.jpg">
              <h3 class="stem-card-title p-4">About COSPAR-K</h3>
            </div>
          </a>
          <a href="stem-tickets#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card7.jpg">
              <h3 class="stem-card-title p-4">Tickets</h3>
            </div>
          </a>
          <a href="stem-competition#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card5.jpg">
              <h3 class="stem-card-title p-4">Competition</h3>
            </div>
          </a>
          <a href="stem-activities#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card2.jpg">
              <h3 class="stem-card-title p-4">Activities & Partners</h3>
            </div>
          </a>
          <a href="stem-keynotes#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card3.jpg">
              <h3 class="stem-card-title p-4">Keynotes</h3>
            </div>
          </a>
          <!-- <a href="stem-power-talks#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card4.jpg">
              <h3 class="stem-card-title p-4">Power Talks</h3>
            </div>
          </a> -->
          <a href="stem-catalogue#cospark" class="col-md-4">
            <div class="stem-card">
              <img class="img-fluid" src="img/cospark/card6.jpg">
              <h3 class="stem-card-title p-4">Catalogue</h3>
            </div>
          </a>
        </div>

        <div class="embed-responsive embed-responsive-16by9">
            <video controls poster="img/cospark/video.jpg">
                <source src="img/cospark/COSPAR-K-Promo-Video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>
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
