<?php
$title = 'Frequently Asked Questions';
include('include/header.php');
?>
        <!-- title -->
        <div class="title">
            <div class="container">
                <div class="row py-5">
                    <div class="col py-4">
                        <h1><?php echo $title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-md-12 mb-5 order-lg-1">
                        <?php

                                include('include/faqs.php');

                                ?>
                        <h2 class="mt-5">Don’t find what you are looking for? Contact the <a href="mailto:enquiries@cospar2021.org">COSPAR 2021 Secretariat</a></h2>
						</div>
                </div>
            </div>
        </div>
        <?php
        include('include/footer.php');
        ?>
