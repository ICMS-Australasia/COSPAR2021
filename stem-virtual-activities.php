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


                      <h1 class="mt-3 mb-5">Virtual Activities Program</h1>

                      <p>To compliment all the in-person action, we have created virtual activities so you can continue the fun and learning from wherever you choose. Providing extended access and remote access to those not able to attend in-person due to location or other reasons has driven the team to develop these fun and educational experiences, which are accessible to all.</p>
                      <p>Places are limited for some activities so book your tickets today to secure your spot.</p>

                      <?php include('include/stem-virtual-activities-cards.php'); ?>

                      <a href="stem-tv" class="button-secondary mb-5 mt-4">
                          <span class="button-body mb-0"><b>Book your COSPAR-K TV <em class="mr-1">Powered by Microsoft</em> Tickets</b></span>
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
