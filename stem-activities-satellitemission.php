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
                              <h2 class="mb-0">Satellite Mission</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/unsw-canberra.jpg" width="100" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                          <div class="col-md-6 mb-3 mb-md-0">
                              <img src="img/cospark/satellite1.jpg" class="img-fluid">
                          </div>
                          <div class="col-md-6 mb-3 mb-md-0">
                              <img src="img/cospark/satellite2.jpg" class="img-fluid">
                          </div>
                      </div>
                      <p>Design your very own mission and build the right satellite for it at COSPAR-K. Let your imagination run free and decide what your mission objectives are. Whether it’s looking for water on Mars, setting up a communications relay around the Moon or even monitoring bushfire behaviour on Earth. Any mission is possible; the challenge will be to configure the right satellite for the job. The <a href="https://www.unsw.adfa.edu.au/space-research/" target="_blank">UNSW Canberra Space</a> team will be expertly guiding you through each step. </p>

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
