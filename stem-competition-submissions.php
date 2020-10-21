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
                            "title": "Submission",
                            "img": "https://via.placeholder.com/250x200",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "title": "Submission",
                            "img": "https://via.placeholder.com/250x200",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "title": "Submission",
                            "img": "https://via.placeholder.com/250x200",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "title": "Submission",
                            "img": "https://via.placeholder.com/250x200",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "title": "Submission",
                            "img": "https://via.placeholder.com/250x200",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "title": "Submission",
                            "img": "https://via.placeholder.com/250x200",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          }
                        ];
                        let compiledHtml = ``;
                            compiledHtml = submissions.map((sub, index) =>
                                `
                                <a href="#${sub.title}-${index}" data-toggle="modal" target="_blank" class="col-12 col-sm-4 col-md-2 archive-item">
                                  <div class="archive-image">
                                    <img src="${sub.img}?text=${sub.title}+${index}" class="img-fluid" width="100%">
                                  </div>
                                  <div class="archive-title">
                                      ${sub.title} ${index}
                                  </div>
                                </a>
                                <div class="modal fade" id="${sub.title}-${index}">
                                  <div class="modal-dialog modal-dialog-centered modal-lg">
                                      <div class="modal-content">
                                          <img src="${sub.img}?text=${sub.title}+${index}" class="img-fluid float-right mb-3 ml-3">
                                          <h2>${sub.title} ${index}</h2>
                                          <p>${sub.desc}</p>
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
