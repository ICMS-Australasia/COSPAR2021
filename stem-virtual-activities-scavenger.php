<?php
$cospark = true;
$title = 'COSPAR-K On-line Scavenger Hunt';
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
                              <h2 class="mb-0">COSPAR-K On-line Scavenger Hunt</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/sisp.png" width="200" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                          <div class="col-md-12 mb-3 mb-md-0">
                              <img src="img/cospark/scavenger-hunt-1.png" class="img-fluid">
                          </div>
                      </div>

                      <p>We’ve developed an exciting on-line game for you to play during COSPAR-K. Play it from wherever you are; maybe you’re on the bus travelling to the ICC Sydney or lounging at home with some friends, this game will take you on an intergalactic adventure. Rough gaming time is 60 minutes. All you need is a device connected to the internet and you’re set. Choose from single player or a team of up to 10 people.</p>
                      <p>Get your thinking hats on as Mars is waiting! Here’s the plot:</p>
                      <p>After years of training, the time has come for you to start the remarkable journey from Earth to Mars. Can you take off from Earth, navigate to the Moon and overcome cybersecurity threats along the way? After travelling millions of miles through space, can you then manage to establish human life on Mars?!</p>
                      <p>This activity is available for all five days of COSPAR-K, book your COSPAR-K TV <em>powered by Microsoft</em> tickets to access this game.</p>

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
