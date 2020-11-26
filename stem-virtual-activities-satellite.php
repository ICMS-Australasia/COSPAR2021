<?php
$cospark = true;
$title = 'Virtual Activities';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">


                      <h1 class="mt-3 mb-5"><a href="stem-virtual-activities" data-toggle="tooltip" data-placement="bottom" title="Back to Virtual Activities Page"><i class="fas fa-arrow-left mr-4"></i></a>Virtual Activities Program</h1>

                      <div class="row mt-5 mb-3 d-flex align-items-end">
                          <div class="col">
                              <h2 class="mb-0">Satellite Mission Virtual Activity</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/unsw-canberra.jpg" width="100" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                          <div class="col-md-12 mb-3 mb-md-0">
                              <img src="img/cospark/satellite-mission-1.png" class="img-fluid">
                          </div>
                      </div>

                      <p>In this satellite design game, you will discover how a spacecraft is developed based on the objectives of the space mission. You will need to let your imagination roam freely to come up with a mission scenario - finding water on Mars, setting up a communications relay around the Moon or catching debris in Earth orbit. Based on the mission scenario, which consists of an orbit and a payload, you will have to build the remaining satellite subsystems as the goals it to have a satellite that works as a system.</p>
                      <p>These instructions are intended to be followed by a teacher who will run the activity with their class.</p>
                      <p>The game is designed to be completed in 30 minutes but you are encouraged to take more time and let students explore the details of satellites in more depth.</p>
                      <p>The game consists of 2 phases:</p>

                      <ol>
                        <li class="mb-4"><em>Mission Definition ~10 minutes</em> <br>
                          You are instructed to come up with your own mission idea. What do you want to do in space? Think about payloads and orbits. What could you do with a telescope in geostationary orbit? Each group must choose one orbit and one payload card that defines their mission. If time is limited, we suggest to provide each group with a Payload/Orbit combination in the beginning and let them describe the mission around those.</li>
                        <li><em>Satellite Design ~20 minutes</em>
                          The combination of payload and orbit card tells you how many resources of each type the satellite will need to provide. Each component will provide one of those resources, but may also need other resources (e.g. an electrical heater can provide heat, but also needs power). In the end, the satellite needs to work as a system, which is determined with the satellite validation rules (see below). As there are many inter-dependencies between resources and components you may need to iterate your design a few times before a feasible solution is found.</li>
                      </ol>

                      <div class="mission d-flex">
                        <div class="m-number">
                          &nbsp;
                        </div>
                        <div class="m-text">
                          <strong>Available Sessions:</strong>
                          <p class="mb-0">This on-line activity is available for all five days of COSPAR-K. <a href="./stem-tv">Book your COSPAR-K TV powered by Microsoft tickets</a> to access this game.</p>
                        </div>
                      </div>

                      <?php include('include/stem-virtual-activities-cards.php'); ?>

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
