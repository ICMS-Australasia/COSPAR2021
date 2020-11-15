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
                          <div class="col-7">
                              <h2 class="mb-0">Mars Yard & Monash Nova Rover</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/nova-rover-team.png" width="100" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-md-6 col-6 mb-4">
                          <img src="img/cospark/mars-yard-1.jpg" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%">
                        </div>
                        <div class="col-md-6 col-6 mb-4">
                          <img src="img/cospark/mars-yard-2.jpg" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%">
                        </div>
                        <div class="col-md-6 col-6 mb-4">
                          <img src="img/cospark/rover1.jpg" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%">
                        </div>
                        <div class="col-md-6 col-6 mb-4">
                          <img src="img/cospark/rover2.jpg" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%">
                        </div>
                      </div>
                      <p>Join us on our Mars Yard, a recreation of the former Mars Lab at the Powerhouse Museum in Sydney. Participants will be guided through the activities by the <a href="https://www.novarover.space/" target="_blank">Monash Nova Rover</a> team, a group of university students who design, fabricate and test the next generation of Mars rovers - inspiring future generations along the way.</p>
                      <p>At COSPAR-K, they will be running an immersive activity where students can interact with their 2020 Mars Rover. They will complete tasks that actual Mars Rovers do and learn more about the science of space exploration and life detection. Students will be able to engage with activities that challenge their critical thinking skills, and engage them with interesting, interactive STEM ideas.</p>
                      <p>For those unable to attend COSPAR-K in-person, Monash Nova Rover will also be leading virtual excursions where students can access the program remotely. More details on this to come soon.</p>

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
