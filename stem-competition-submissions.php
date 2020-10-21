<?php
$cospark = true;
$title = 'COSPAR-K Competition Submissions';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">

                      <h1 class="mt-3 mb-5">COSPAR-K Paint the Sky Competition Submissions</h1>

                      <div class="stem-news mt-5">
                        <div class="row mb-4" id="submissions">
                        </div>
                      </div>


                      <script type="text/javascript" async>
                        let submissions = [
                          {
                            "title": "John",
                            "img": "https://via.placeholder.com/1200x800",
                            "desc": "John's Description"
                          },
                          {
                            "title": "David",
                            "img": "https://via.placeholder.com/1200x800",
                            "desc": "David's Description"
                          },
                          {
                            "title": "Robert",
                            "img": "https://via.placeholder.com/1200x800",
                            "desc": "Robert's Description"
                          }
                        ];
                        let compiledHtml = ``;
                            compiledHtml = submissions.map((sub, index) =>
                                `
                                <a href="#${sub.title}" data-toggle="modal" target="_blank" class="col-12 col-sm-4 col-md-2 archive-item">
                                  <div class="archive-image">
                                    <img src="${sub.img}?text=${sub.title}" class="img-fluid" width="100%">
                                  </div>
                                  <div class="archive-title">
                                      ${sub.title} ${index}
                                  </div>
                                </a>
                                <div class="submission-popups">
                                  <div class="modal fade" id="${sub.title}">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <!-- modal content -->
                                        <div class="row p-0 m-0">
                                          <div class="col-md p-0 m-0">
                                            <img src="${sub.img}" class="img-fluid">
                                          </div>
                                          <div class="col-md-3 p-5 m-0 d-flex align-items-center">
                                            <div>
                                              <a type="button" class="close" data-dismiss="modal">&times;</a>
                                              <span class="pop-title">${sub.title}</span>
                                              <p class="pop-description">${sub.desc}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end modal content -->
                                    </div>
                                  </div>
                                </div>
                                `
                            ).join(``);
                        document.getElementById('submissions').innerHTML = compiledHtml;
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
