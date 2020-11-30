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
                      <div class="embed-responsive embed-responsive-16by9 my-4">
                          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wZgP7XgwBKE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <p>The team from <a href="https://www.novarover.space/" target="_blank">Monash Nova Rover</a> are coming to COSPAR-K to run the Mars Yard. Using their custom designed and manufactured 6-wheeled rover, Wombat, students will get the opportunity to operate the rover and complete activities designed to introduce them to new skills and improve on their communication, teamwork and problem-solving skills.</p>
                      <p>Our in-person activity will see students complete 3 tasks. Each task will have a unique focus on navigation, mechanical assembly, or geological analysis, all while utilising good communication and teamwork.</p>
                      <p>Task 1: Navigation - students will need to successfully drive the rover through an obstacle course in order to reach safety. However, the drivers will be limited as they will not be able to see the rover or Mars Yard. Instead, the drivers will need to rely on their teammates in the field to convey appropriate instructions via electronic means.</p>
                      <p>Task 2: Mechanical Assembly - students will develop skills in coordinate geometry and operate the mechanical arm to fix a solar array, keeping the rover’s battery functioning. This task will require their students to effectively communicate the proper assembly of the solar array to their peers.</p>
                      <p>Task 3: Geological Analysis - students will be introduced to the fundamentals of geology and astrobiology before analysing a range of rock samples and a soil sample. This analysis will be used to reorientate a map that can lead the students back to their home base. Students will be split into groups of eight and rotate through each of the tasks for the duration of the lesson.</p>
                      <p>Sounds like your kind of fun? <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank">Make sure to book your FREE tickets today to not miss out</a>!</p>
                      <p>The Monash Nova Rover team can’t wait to take you through this incredibly exciting and educational experience</p>

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
