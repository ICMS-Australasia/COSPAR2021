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
                              <h2 class="mb-0">Virtual Q&A with NASA</h2>
                          </div>
                          <div class="col">
                              <img src="./img/cospark/nasa.png" width="175" class="float-right">
                          </div>
                      </div>
                      <div class="row my-4">
                          <div class="col-md-12 mb-3 mb-md-0">
                              <img src="img/cospark/nasa-1.png" class="img-fluid">
                          </div>
                      </div>

                      <p>Connect in live with the amazing team at NASA's Goddard Space Centre, home to the United States’ largest organisation of scientists, engineers and technologists who build spacecraft, instruments and new technology to study our Earth, the sun, our solar system and the universe.</p>
                      <p>What an opportunity to ask them about:</p>
                      <ul>
                        <li>Why STEM is Important</li>
                        <li>Pathways into space at Goddard</li>
                        <li>Any questions you might have about space research and technology</li>
                      </ul>

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
