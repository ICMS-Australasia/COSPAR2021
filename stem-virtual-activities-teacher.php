<?php
$cospark = true;
$title = 'Teach the Teacher Taster';
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
                              <h2 class="mb-0">Teach the Teacher Taster</h2>
                          </div>
                          <div class="col d-flex align-items-center">
                              <img src="./img/cospark/galileo.png" width="350" class="float-right">
                              <img src="./img/cospark/nuclio.jpg" width="200" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4 align-items-center">
                          <div class="col-md-12 mb-3 mb-md-0">
                            <img src="img/cospark/rosa-doran.png" class="img-fluid float-right" width="200">
                            <p>During this Teach the Teacher Taster event, Dr Rosa Doran will get the audience acquainted with a series of powerful tools to introduce Space Exploration and Astronomy to students of all ages.</p>
                            <p>The session will be a journey through the Universe starting with our own star, the Sun. While navigating through the Solar System, participants will have the opportunity to see how tools like Salsa J, Stellarium, Celestia, Google Earth, World Wide Telescope and more can greatly enrich the learners experience. The voyage through the Universe will bring data repositories such as the Faulkes Telescope Archives and examples of real research in the classroom will be presented to the participants.</p>
                            <p>Finally, a series of innovative practices for science education will be outlined and examples of its integration in students' experience will be shared with the audience. Methodologies such as Design Thinking for Education, Inquiry-based Learning, STEAM learning and other models will be presented to the participants.</p>
                            <p>This session is a sneak peak of the full Teach the Teacher Program offered by Rosa Doran. You will have the opportunity to sign up for the full program after this teaser session. <a href="http://galileoteachers.org/" target="_blank">Further details on this program can be found here</a>.</p>
                          </div>
                      </div>



                      <div class="mission d-flex">
                        <div class="m-number">
                          &nbsp;
                        </div>
                        <div class="m-text">
                          <strong>Available Sessions:</strong>
                          <ul class='mb-4'>
                            <li>Mon 1 Feb 2021, 6:30pm – 8:30pm AEDT</li>
                          </ul>
                          <strong>Capacity Per Session:</strong>
                            <p class="mb-0">250 pax</p>
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
