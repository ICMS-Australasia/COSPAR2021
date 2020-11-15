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
                              <h2 class="mb-0">Robotic Recovery Mission</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/pitsco-tetrix.jpg" width="150" class="float-right">
                          </div>
                      </div>
                      <p>Mission critical! A rocket has landed on Mars with vital resupply materials on board, and it is your responsibility to recover the rocket and bring it safely to base.</p>
                      <p>Join the Pitsco team at COSPAR-K for a robotic recovery mission on a simulated Mars environment where you will have the opportunity to pilot a tele-operated TETRIX® vehicle to retrieve a rocket and return it to base.</p>
                      <p>Can you traverse and conquer the red planet?</p>
                      <div class="row my-4">
                          <div class="col-12 col-md-6 mb-3 mb-md-0">
                              <!-- <img src="img/cospark/robot-recovery-1.jpg" class="img-fluid"> -->
                              <img src="https://via.placeholder.com/600x300" class="img-fluid">
                          </div>
                          <div class="col-12 col-md-6 mb-3 mb-md-0">
                              <!-- <img src="img/cospark/robot-recovery-2.jpg" class="img-fluid"> -->
                              <img src="https://via.placeholder.com/600x300" class="img-fluid">
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
