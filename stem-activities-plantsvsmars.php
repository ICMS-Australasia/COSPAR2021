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
                              <h2 class="mb-0">Plants vs Mars</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/sisp.png" width="200" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                          <div class="col-md-12 mb-3 mb-md-0">
                              <img src="img/cospark/plants-vs-mars-3.png" class="img-fluid">
                          </div>
                      </div>

                      <p>At COSPAR-K, the team at <a href="https://sispprogram.schools.nsw.gov.au/" target="_blank">STEM Industry School Partnerships Program (SISPs)</a> will challenge you to create smart habitats to improve liveability in space for future Mars based communities. You will learn to think like engineers in order to design Smart STEM focussed products for remote deployment and automation of devices on Mars. Areas of exploration will include product design, working with sensors and data, plus prototyping user interfaces for the remote management of resources.</p>
                      <p>Using real world science with a dash of sci-fi, we are exploring how plants and life will evolve on Mars. Plants vs Mars poses the questions: Will plants adapt? Will survival be dependent on engineered systems? Choose a side, Plants or Mars. Students will be required to explore the science, develop their argument and design a smart solution to support life on Mars.</p>
                      <p>This exciting creative interdisciplinary (cross-curriculum) design project will also be available for 2021 via the <a href="https://sispprogram.schools.nsw.gov.au/" target="_blank">NSW SISP Program</a>.</p>

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
