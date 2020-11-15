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
                              <h2 class="mb-0">Giant Moon & Mars Maps</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/aldrin-family-foundation.png" width="200" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4 align-items-center">
                          <div class="col-md-8 mb-3 mb-md-0">
                              <img src="img/cospark/giant-moon-1.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-4 mb-3 mb-md-0">
                              <img src="img/cospark/giant-moon-2.jpg" class="img-fluid">
                          </div>
                      </div>

                      <p>The <a href="https://aldrinfoundation.org/" target="_blank">Aldrin Family Foundation</a> is bringing their Giant Moon and Mars Maps to COSPAR-K! Both maps will be on display for the full event and available for everyone to grab a selfie on the Martian and Lunar surfaces.</p>
                      <p>For select students, an additional opportunity is available to experience the Giant Mars Map and conduct a research mission. The activity will include selecting a <b>Mission Zone</b> where they expect to meet goals of the mission, a Landing Zone where their rover can safely touchdown and a <b>Transit Zone</b> that provides a safe pathway to follow. Together, the team will create topographical models of the three zones. This exclusive activity and lesson will be expertly led by Jim Christensen, Executive Director of ShareSpace Education (<em>the K-12 arm of the Aldrin Family Foundation</em>) live via video with in-person support to ensure students get an unforgettable educational and life experience.</p>
                      <p>This activity by <b>invitation only</b> and will run on Friday, Monday and Tuesday at 10:30am - 11:30am AEDT. To express your interest please email <a href="mailto:stem@cospar2021.org">stem@cospar2021.org</a>.</p>

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
