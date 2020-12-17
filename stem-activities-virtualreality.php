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
                              <h2 class="mb-0">Fly Army Virtual Reality Helicopter Simulators</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/fly-army.jpg" width="150" class="float-right">
                          </div>
                      </div>
                      <p>The Australian Army will be demonstrating its Fly Army Virtual Reality Helicopter Simulators with movement activated seats at COSPAR-K. They will be providing participants an opportunity to “fly” the simulators for themselves and get a taste of what it is like to fly a real helicopter. The Fly Army advocates will be available to discuss Aviation roles including Engineers, Pilots, Aircraft Trades, Ground Crew Roles and UAS (Drone) Operators.</p>
                      <div class="row my-4">
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/helicopter-sim-1.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/helicopter-sim-2.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/helicopter-sim-3.jpg" class="img-fluid">
                          </div>
                      </div>

                      <div class="row mt-5 mb-3 align-items-end">
                          <div class="col">
                              <h2 class="mb-0">The Air Force 2021 Virtual Reality Experience</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/air-force.png" width="150" class="float-right">
                          </div>
                      </div>
                      <p>This experience allows you the opportunity to take off and fly around and land at a predetermined location in the cockpit of a JSF (F-35) or an F/A-18 – virtually!</p>
                      <p>The VR experiences are used by Air Force for STEM activities and other Air Force motivational based activities as part of commemorating Air Force’s centenary year in 2021. By attending COSPAR-K, you will be the first to experience this VR as it has never been shown to the public before!! The aim is to increase awareness and develop an interest amongst young people in aviation careers (pilot, aircrew, technical roles and air traffic control) within the Defence Force or aviation in general.</p>
                      <div class="row my-4">
                          <div class="col-md-6 mb-3 mb-md-0">
                              <img src="img/cospark/helicopter-sim-4.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-6 mb-3 mb-md-0">
                              <img src="img/cospark/helicopter-sim-5.jpg" class="img-fluid">
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
