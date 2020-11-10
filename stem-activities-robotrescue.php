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

                      <div class="row mt-5 mb-3 d-flex align-items-end">
                          <div class="col">
                              <h2 class="mb-0">Robot Rescue</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/sisp.png" width="200" class="float-right">
                          </div>
                      </div>

                      <div class="row my-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <img src="img/cospark/robot-rescue-1.jpg" class="img-fluid">
                        </div>
                      </div>
                      <p>Step into the future, the year is 2050. Scientists, engineers, construction and mining workers, space adventurers and ‘new worlders’ now live and work on Mars.</p>
                      <p>Some colony settlements are separated by large distances. Occasionally an emergency occurs where supplies need to be delivered right away, for example, oxygen cylinders. Extreme emergencies may occur where people are working remotely, i.e. away from the safety of the colony, for example, a tear in a space-suit.</p>
                      <p>Rocket rescues are instantly launched and deliver their payload where needed.</p>
                      <p>Students of all ages, teachers and adults are challenged to accept a rocket rescue scenario and assemble their own bottle rocket using the various options for; nose cone length, nose ballast, fins shape, nozzle hole diameter. Rockets are then launched in an indoor purpose built netted range and retrieved by a smart robotic retrieval unit.</p>
                      <p>Experience the thrill of this outer space engineering challenge and see if you can complete your rescue mission at COSPAR-K.</p>

                      <hr class="my-5">

                      <?php include('include/stem-activities-cards.php') ?>

                      <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank" class="button-secondary mb-4 mt-5">
                          <span class="button-head">Book Your In-Person Ticket Now</span>
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
