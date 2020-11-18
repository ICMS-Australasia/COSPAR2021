<?php
$cospark = true;
$home = false;
$title = 'Activities';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">


                      <h1 class="mt-3 mb-5"><a href="stem-activities" data-toggle="tooltip" data-placement="bottom" title="Back to Activities Page"><i class="fas fa-arrow-left mr-4"></i></a>Awesome Activities Arena</h1>

                      <div class="row mt-5 mb-3 align-items-end">
                          <div class="col">
                              <h2 class="mb-0">Daleks Taking Over COSPAR-K</h2>
                          </div>
                      </div>
                      <p><a href="https://www.facebook.com/canberradaleksandrobots/" target="_blank">Canberra Daleks and Robots</a> will be taking over the ICC Sydney in January 2021 at COSPAR-K. Popular enemy of The Doctor, daleks will be <em>exterminating</em> their way around COSPAR-K. Try your hand in programming awesome robots and save our population from the enemy invasion.</p>
                      <p>This interactive activity and photo opportunity is every sci-fi lover’s dream!</p>
                      <div class="row my-4">
                          <div class="col-md-5 mb-3 mb-md-0">
                              <img src="img/cospark/daleks-1.jpg" class="img-fluid mb-3" style="object-fit:cover; height: 300px; width: 100%;">
                          </div>
                          <div class="col-md-7 mb-3 mb-md-0">
                              <img src="img/cospark/daleks-2.jpg" class="img-fluid mb-3" style="object-fit:cover; height: 300px; width: 100%;">
                          </div>
                          <div class="col-md-7 mb-3 mb-md-0">
                              <img src="img/cospark/daleks-3.jpg" class="img-fluid mb-3" style="object-fit:cover; height: 300px; width: 100%;">
                          </div>
                          <div class="col-md-5 mb-3 mb-md-0">
                              <img src="img/cospark/daleks-4.jpg" class="img-fluid mb-3" style="object-fit:cover; height: 300px; width: 100%;">
                          </div>
                      </div>

                      <hr class="my-5">

                      <?php include('include/stem-activities-cards.php') ?>

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
