<?php
header('Location: https://cospar2021.org/program-glance');
exit;
?>
        <!-- title -->
        <div class="title">
            <div class="container">
                <div class="row py-5">
                    <div class="col py-4">
                        <h1><?php echo $title; ?></h1>
                        <!--div class="sub"></div-->
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col">

                        <table cellpadding="10">
                            <tr>
                                <td><a href="COSPAR2021-week-at-a-glance.pdf" target="_blank"><img src="img/pdf-program.jpg"></a></td>
                                <td><a href="COSPAR2021-week-at-a-glance.pdf" target="_blank">Download the COSPAR 2021 Week at a Glance</a></td>
                            </tr>
                        </table>

     </div>
                </div>
            </div>
        </div>
        <!-- content -->

        <!-- image break -->
        <div class="imagebreak">
            <div class="container-fluid">
                <div class="row">
                    <div class="col mb-5">
                        <img src="img/program-updated.jpg" class="img-fluid mb-5">
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->


            <?php
            include('include/footer.php');
            ?>
