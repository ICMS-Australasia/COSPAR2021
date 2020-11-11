<?php
$cospark = true;
$title = 'COSPAR-K TV';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">


                      <h1 class="mt-3 mb-5">COSPAR-K TV <em style="font-weight: 400;">powered by Microsoft</em> <img src="./img/cospark/microsoft.png" class="img-fluid my-0 ml-5" width="200"></h1>



                      <p>COSPAR-K TV <em>powered by Microsoft</em> is the <b>virtual experience</b> for our Free Space STEM Event. Bringing all the live action from the ICC Sydney to you, wherever you may be on our beautiful Earth: live stream the full speakers program and participate in virtual excursions.</p>
                      <p><b>ADD</b> COSPAR-K TV <em>powered by Microsoft</em> to your ‘in-person ticket’ and continue the Space STEM fun all week long in the classroom or back at home.</p>
                      <p>Alternatively for those unable to attend in-person, <b>ACCESS</b> COSPAR-K TV <em>powered by Microsoft</em> to join in the fun and learning no matter where you are.</p>
                      <p>See what’s available virtually below.</p>


                      <div class="row stem-cards justify-content-center mb-4 mt-5">
                        <a href="stem-speakers-schedule" class="col-md-6">
                          <div class="stem-card">
                            <img class="img-fluid" src="img/cospark/card11.jpg" style="object-fit: cover; height:300px; width:100%">
                            <h3 class="stem-card-title p-4">Spectacular Speakers Schedule</h3>
                          </div>
                        </a>
                        <a href="stem-virtual-activities" class="col-md-6">
                          <div class="stem-card">
                            <img class="img-fluid" src="img/cospark/card8.jpg" style="object-fit: cover; height:300px; width:100%">
                            <h3 class="stem-card-title p-4">Virtual Activities Program</h3>
                          </div>
                        </a>
                      </div>
                      <a target="_blank" class="button-secondary mb-4 mt-4" style="color: white;">
                          <span class="button-body mb-0"><b>Bookings for COSPAR-K TV <em class="mr-1">powered by Microsoft</em> Opening Soon</b></span>
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
