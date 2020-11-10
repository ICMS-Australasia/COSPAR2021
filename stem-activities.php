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


                      <h1 class="mt-3 mb-5">Awesome Activities Arena</h1>

                      <h3>Parkside Ballroom, ICC Sydney</h3>
                      <p>Our activities are out of this world awesome! Check out the interactive experiences and activations specially designed for students, teachers and parents to get hands on and participate. Our incredible industry and government partners are providing opportunities for you to discover the latest innovations and also have fun through exploration.</p>
                      <p>COSPAR-K will be the space to ignite passion in our future thinkers and leaders so get involved and book your ticket today.</p>
                      <p>Click here to view the Arena Ground Map.</p>


                      <!-- <p>Your COSPAR-K experience doesn’t end here, check out our <a href="stem-virtual-activities.php">Virtual Activities Program</a>.</p> -->

                      <?php include('include/stem-activities-cards.php') ?>
                      
                      <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank" class="button-secondary mb-4 mt-5">
                          <span class="button-head">Book Your In-Person Ticket Now</span>
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
