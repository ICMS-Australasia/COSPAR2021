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
                              <h2 class="mb-0">Drone Racing</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/auadrt.jpg" width="150" class="float-right">
                          </div>
                      </div>
                      <p>Start your engines and get your adrenaline pumping by racing the <a href="https://www.facebook.com/AUADRT/" target="_blank">Australian Army Drone Racing</a> Team’s drones around their specially designed course. Learn and develop the skills involved with designing, building and maintaining drones whilst also getting your hands on a quality drone to race!</p>
                      <div class="row my-4">
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/drone-racing-1.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/drone-racing-2.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/drone-racing-3.jpg" class="img-fluid">
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
