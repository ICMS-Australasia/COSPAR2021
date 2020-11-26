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
                              <h2 class="mb-0">COSPAR-K On-line Scavenger Hunt</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/nasa.png" width="150" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4 align-items-center">
                          <div class="col-md-6 mb-3 mb-md-0">
                            <p>On February 18th 2021, NASA will land its latest rover to the Red Planet. This $2.46 billion mission will arrive at Jezero Crater, a location on Mars that we believe is 3.81 billion years old. In this presentation, Dr Adrian Brown will discuss the cool aspects of this mission that make it the most exciting Mars mission yet. He will specifically discuss:</p>
                            <ul>
                              <li>The Jezero delta system, which is the first delta NASA has landed at on Mars and why that is important</li>
                              <li>The Australian rock that is on the rover flying on the rover to Mars and why it was important enough to be chosen to be the first Aussie landing on Mars</li>
                              <li>The Mars Helicopter, the first drone to the red planet</li>
                              <li>The Supercam laser system which are the rover’s main tools to determine the best samples</li>
                              <li>The rover’s sample collection system, which is crucial for picking the best rocks</li>
                            </ul>

                            <p>The Mars2020 rover will collect a suite of samples that will be extensively catalogued and cached for a period on the surface of Mars. These samples will eventually be returned to Earth by the Mars Sample Return mission, which is currently slated for launch in 2026 and samples will return in 2031.</p>
                            <p>Dr Adrian Brown will talk about what we expect to learn from the returned samples and how his work in Australia on 3.5 billion year old rocks has helped NASA to prepare for the first intentional return of Martian rocks to Earth.</p>
                            <p>Following his presentation, Dr Adrian will be available for live Q&A!</p>
                          </div>
                          <div class="col-md-6 mb-3 mb-md-0">
                              <img src="img/cospark/vactivity-card6.png" class="img-fluid">
                          </div>
                      </div>



                      <div class="mission d-flex">
                        <div class="m-number">
                          &nbsp;
                        </div>
                        <div class="m-text">
                          <strong>Available Sessions:</strong>
                          <ul class='mb-4'>
                            <li>Tues 2 Feb 2021, 9:00am – 10:00am AEDT</li>
                          </ul>
                          <strong>Capacity Per Session:</strong>
                            <p class="mb-0">250 people</p>
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
