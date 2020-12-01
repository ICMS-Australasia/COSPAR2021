<?php
$cospark = true;
$title = 'Media';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">


                      <h1 class="mt-3 mb-5">Media</h1>

                      <h2>Thank you to our Media Partners</h2>
                      <div class="row my-4 align-items-center">
                        <div class="col-md-4">
                          <a href="https://spaceaustralia.com/" target="_blank"><img src="./img/cospark/space-australia.png" class='img-fluid'></a>
                        </div>
                        <div class="col-md-8">
                          <h3 class="mb-0">Rami Mandow</h3>
                          <p><b>Founding Director</b> <br>
                            <b>M:</b> 0416 853 250 <br>
                            <b>E:</b> <a href="mailto:Rami@spaceaustralia.com">Rami@spaceaustralia.com</a> <br>
                            <b>W:</b> <a href="http://www.spaceaustralia.com" target="_blank">www.spaceaustralia.com</a> <br>
                            <i class="fab fa-twitter mr-2"></i><a href="https://twitter.com/SpaceAusDotCom" target="_blank">@SpaceAusDotCom</a> / <a href="https://twitter.com/CosmicRami" target="_blank">@CosmicRami</a></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row my-4 align-items-center">
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12">
                              <a href="https://www.refractionmedia.com.au/" target="_blank"><img src="./img/cospark/refraction-media.png" class='img-fluid w-75 mx-auto d-block'></a>
                            </div>
                            <div class="col-md-12">
                              <a href="https://careerswithstem.com.au/" target="_blank"><img src="./img/cospark/careers-with-stem.png" class='img-fluid  w-75 mx-auto d-block mt-5'></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h3 class="mb-0">Heather Catchpole & Karen Taylor-Brown</h3>
                          <p><b>CEO/Head of Content | CEO/Publisher</b> <br>
                            PO Box 38 | Strawberry Hills NSW 2012 | Australia <br>
                            <b>M:</b> 0401 068 975 | 0414 218 575 <br>
                            <b>E:</b> <a href="mailto:heather@refractionmedia.com.au">heather@refractionmedia.com.au</a> | <a href="mailto:karen@refractionmedia.com.au">karen@refractionmedia.com.au</a> <br>
                            <b>W:</b> <a href="https://www.refractionmedia.com.au/" target="_blank">Refraction Media</a>. The STEM specialist content company. <br>
                            <b>W:</b> <a href="http://careerswithstem.com.au/" target="_blank">Careers with STEM</a> provides educators, students and parents with news about future jobs, career pathways and inspiring and diverse people who share their career journey.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row my-4 align-items-center">
                        <div class="col-md-4">
                          <a href="https://inspiringnsw.org.au/" target="_blank"><img src="./img/cospark/inspiring-australia.gif" class='img-fluid'></a>
                        </div>
                        <div class="col-md-8">
                          <h3 class="mb-0">Jackie Randles</h3>
                          <p>Manager, Inspiring Australia (NSW) <br>
                            Faculty of Science</p>
                          <p><b>The University of Sydney</b> <br>
                            F07 – Carslaw Building | The University of Sydney | NSW | 2006 | Australia <br>
                            <b>M:</b> +61 (0) 481 006 158 <br>
                            <b>E:</b> <a href="mailto:jackie.randles@sydney.edu.au">jackie.randles@sydney.edu.au</a> <br>
                            <b>W:</b> <a href="http://inspiringnsw.org.au" target="_blank">http://inspiringnsw.org.au</a></p>
                        </div>
                      </div>
                      <hr class="mb-4">

                      <p>Catch up on all the stories here or <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-eoi/Site/Register" target="_blank">join our mailing list</a> to receive these updates direct from space! </p>

                      <div class="stem-news mt-5">
                        <div class="row mb-4" id="archive">
                        </div>
                      </div>

                      <script src="articles.js" type="text/javascript"></script>
                      <script type="text/javascript" async>
                        let compiledHtml = ``;
                            compiledHtml = latestNews.items.map(items =>
                                `
                                <a href="${items.link}" target="_blank" class="col-md-3 archive-item">
                                  <div class="archive-date">
                                    ${items.date}
                                  </div>
                                  <div class="archive-image">
                                    <span>${items.type}</span>
                                    <img src="img/cospark/news/${items.image}" class="img-fluid">
                                  </div>
                                  <div class="archive-title">
                                      ${items.title}
                                  </div>
                                </a>
                                `
                            ).join(``);
                        document.getElementById('archive').innerHTML = compiledHtml;
                      </script>



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
