<?php
$cospark = true;
$title = 'Power Talks';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">
                       <h1 class="mt-3 mb-5">Power Talks</h1>
                      <!-- <a href="mailto:stem@cospar2021.org" target="_blank" class="button-secondary mb-4 mt-5">
                          <span class="button-head">Space STEM Power Talks Submissions Have Now Closed!</span>
                          <span class="button-body">Contact Mission Control for more info</span>
                      </a>

                      <img src="img/cospark/power-talks-1.jpg" class="img-fluid float-md-right d-block ml-md-4 mx-auto mb-4">
                      <p>COSPAR-K has a stellar opportunity for you, the teachers and leaders of the next generation of space superstars to showcase your Space STEM knowledge through a 15-minute Space STEM Power Talk.</p>
                      <p>If you have a passion for Space STEM, COSPAR-K has created this platform specifically to amplify your message. This is your chance to inspire and excite the next generation to pursue a career in Space STEM. Share your enthusiasm, knowledge and expertise of space and STEM to an audience of engaged students and teachers across Australia.</p>
                      <p><em>“The Power Talks at COSPAR-K provide a fantastic opportunity for the teachers and industry professionals of today to inspire the generation of tomorrow.” Professor Russell Boyce, International Space Research Assembly Chair </em></p>
                      <h2 class="mt-5 mb-3">What do I need to prepare?</h2>
                      <p>Prepare for submission by formulating a 200-word summary of your talk, keeping in mind that all Power Talks will run for 15-minutes. Make sure you bring the energy and tell us why your Power Talk should be included in the COSPAR-K Program as only the best and most innovative submissions will be chosen.</p>
                      <p><a href="https://icmsaust.eventsair.com/cospar-2021/call-for-space-stem-power-talks" target="_blank">I’m ready, transport me to the Space STEM Power Talk submission portal.</a></p>

                      <h2 class="mt-5 mb-3">Do you have any questions?</h2>
                      <p>COSPAR-K Mission Control are here to help, contact us at <a href="mailto:stem@cospar2021.org">stem@cospar2021.org</a></p>
                      <div class="row my-4">
                          <div class="col-md-12 mb-3 mb-md-0">
                             <img src="img/cospark/power-talks-2.jpg" class="img-fluid">
                          </div>
                      </div> -->


                      <div class="row text-center" id="power-cards">

                      </div>
                      <div id="power-modals">

                      </div>

                      <script type="text/javascript">
                        let ptalks = [
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          },
                          {
                            "fname": "FirstName",
                            "lname": "LastName",
                            "affiliation": "Affiliation",
                            "img": "https://via.placeholder.com/200x250",
                            "desc": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                          }
                        ];
                        let cards = ptalks.map((pt,index) =>
                          `<a href="#${pt.lname}-${index}" data-toggle="modal" class="col-md-3 mb-4">
                            <img src="${pt.img}" class="img-fluid mb-3">
                            <h3 class="mb-2">${pt.fname} ${pt.lname}</h3>
                            <p><b>${pt.affiliation}</b></p>
                          </a>`
                        ).join(``);

                        let modals = ptalks.map((pt,index) =>
                          `
                          <div class="modal fade" id="${pt.lname}-${index}">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                  <div class="modal-content">
                                      <img src="${pt.img}" width="200">
                                      <h2>${pt.fname} ${pt.lname}</h2>
                                      <h3>${pt.affiliation}</h3>
                                      <p>${pt.desc}</p>
                                      <button type="button" class="close" data-dismiss="modal">x</button>
                                  </div>
                              </div>
                          </div>
                          `
                        ).join(``);

                        document.getElementById('power-cards').innerHTML = cards;
                        document.getElementById('power-modals').innerHTML = modals;

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
