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
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          },
                          {
                            "name": "Submission",
                            "date": "Tuesday, 20 October 2020",
                            "img": "https://via.placeholder.com/250x200"
                          }
                        ];
                        let compiledHtml = ``;
                            compiledHtml = submissions.map((sub, index) =>
                                `
                                <a href="#${sub.name}-${index}" data-toggle="modal" target="_blank" class="col-md-3 archive-item">
                                  <div class="archive-date">
                                    ${sub.date}
                                  </div>
                                  <div class="archive-image">
                                    <img src="${sub.img}" class="img-fluid">
                                  </div>
                                  <div class="archive-title">
                                      ${sub.name} ${index}
                                  </div>
                                </a>
                                <div class="modal fade" id="${sub.name}-${index}">
                                  <div class="modal-dialog modal-dialog-centered modal-lg">
                                      <div class="modal-content">
                                          <img src="https://via.placeholder.com/250x200" class="img-fluid float-right mb-3 ml-3">
                                          <button type="button" class="close" data-dismiss="modal">x</button>
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
