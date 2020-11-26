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
                              <h2 class="mb-0">Discover Mars from the Classroom</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/nova-rover-team.png" width="100" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-md-6 col-6 mb-4">
                          <img src="img/cospark/rover1.jpg" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%">
                        </div>
                        <div class="col-md-6 col-6 mb-4">
                          <img src="img/cospark/rover2.jpg" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%">
                        </div>
                      </div>

                      <p>The team from <a href="https://www.novarover.space/" target="_blank">Monash Nova Rover</a> are coming to COSPAR-K to run the Mars Yard. There are opportunities for your class or group to virtually access their custom designed and manufactured 6-wheeled rover, Wombat.</p>
                      <p>During this activity, students will get the opportunity to operate the rover and complete activities designed to introduce them to new skills and improve on their communication, teamwork and problem-solving skills. Specifically, students will be challenged to complete two tasks virtually:</p>
                      <p>Task 1: Geological Analysis - students will learn about geology and astrobiology and be required to prove the existence of life on the Martian surface. This will involve students driving the rover remotely around the Mars Yard to different geological sample sites (rocks or soils), investigating these sites using the on-board scientific array and then determining the rock types and the extent of life in soils (existent, non-existent or extant). Students will need to work collaboratively within their groups and be able to convey their understanding and/or argue their results.</p>
                      <p>Task 2: Programming - students will be taught the fundamentals of JavaScript to generate a virtual Martian environment and drive a simulated Mars rover. Students will be split into groups of 4 and rotate through each of the tasks for the duration of the lesson.</p>
                      <p>These sessions will be incredibly popular so <a href="./stem-tv" target="_blank">book your group in today</a>!</p>

                      <div class="mission d-flex">
                        <div class="m-number">
                          &nbsp;
                        </div>
                        <div class="m-text">
                          <strong>Available Sessions:</strong>
                          <ul class='mb-4'>
                            <li>Fri 29 Jan 2021, 12:00pm – 1:00pm AEDT</li>
                            <li>Sat 30 Jan 2021, 12:00pm – 1:00pm AEDT</li>
                            <li>Sun 31 Jan 2021, 12:00pm – 1:00pm AEDT</li>
                            <li>Mon 1 Feb 2021, 12:00pm – 1:00pm AEDT</li>
                            <li>Tues 2 Feb 2021, 12:00pm – 1:00pm AEDT</li>
                          </ul>
                          <strong>Capacity Per Session:</strong>
                            <p class="mb-0">xxx people</p>
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
