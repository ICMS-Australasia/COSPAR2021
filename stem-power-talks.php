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


                      <div class="row" id="power-cards">

                      </div>
                      <div id="power-modals">

                      </div>

                      <script type="text/javascript">
                        let ptalks = [
                          {
                            "speakers": [
                              {
                                "name": "Amelia Travers",
                                "img": "https://via.placeholder.com/200x250",
                              },
                            ],
                            "presentation": "From Woomera to Andoya, Launching Rockets in High School",
                            "time": "11:15am - 11:30am",
                            "desc": "Amelia is a science communicator and web developer who was the first Australian to attend European Space Camp. She’s passionate about space science, particularly rockets, and some of the awesome opportunities available for young people at Science Camps. Amelia will be talking about her journey from a Space Camp in Woomera, Central Australia to launching a sounding rocket in Northern Norway. She’ll discuss some of the impacts these adventures had on her career, some of the amazing opportunities they led to and how she’s using all those experiences now as an adult and communicator with her project Avid Research!"
                          },
                          {
                            "speakers": [
                              {
                                "name": "Amelia Travers",
                                "img": "https://via.placeholder.com/200x250",
                              },
                            ],
                            "presentation": "From Woomera to Andoya, Launching Rockets in High School",
                            "time": "11:15am - 11:30am",
                            "desc": "Amelia is a science communicator and web developer who was the first Australian to attend European Space Camp. She’s passionate about space science, particularly rockets, and some of the awesome opportunities available for young people at Science Camps. Amelia will be talking about her journey from a Space Camp in Woomera, Central Australia to launching a sounding rocket in Northern Norway. She’ll discuss some of the impacts these adventures had on her career, some of the amazing opportunities they led to and how she’s using all those experiences now as an adult and communicator with her project Avid Research!"
                          },
                          {
                            "speakers": [
                              {
                                "name": "Amelia Travers",
                                "img": "https://via.placeholder.com/200x250",
                              },
                            ],
                            "presentation": "From Woomera to Andoya, Launching Rockets in High School",
                            "time": "11:15am - 11:30am",
                            "desc": "Amelia is a science communicator and web developer who was the first Australian to attend European Space Camp. She’s passionate about space science, particularly rockets, and some of the awesome opportunities available for young people at Science Camps. Amelia will be talking about her journey from a Space Camp in Woomera, Central Australia to launching a sounding rocket in Northern Norway. She’ll discuss some of the impacts these adventures had on her career, some of the amazing opportunities they led to and how she’s using all those experiences now as an adult and communicator with her project Avid Research!"
                          },
                          {
                            "speakers": [
                              {
                                "name": "Amelia Travers",
                                "img": "https://via.placeholder.com/200x250",
                              },
                            ],
                            "presentation": "From Woomera to Andoya, Launching Rockets in High School",
                            "time": "11:15am - 11:30am",
                            "desc": "Amelia is a science communicator and web developer who was the first Australian to attend European Space Camp. She’s passionate about space science, particularly rockets, and some of the awesome opportunities available for young people at Science Camps. Amelia will be talking about her journey from a Space Camp in Woomera, Central Australia to launching a sounding rocket in Northern Norway. She’ll discuss some of the impacts these adventures had on her career, some of the amazing opportunities they led to and how she’s using all those experiences now as an adult and communicator with her project Avid Research!"
                          },
                          {
                            "speakers": [
                              {
                                "name": "Amelia Travers",
                                "img": "https://via.placeholder.com/200x250",
                              },
                            ],
                            "presentation": "From Woomera to Andoya, Launching Rockets in High School",
                            "time": "11:15am - 11:30am",
                            "desc": "Amelia is a science communicator and web developer who was the first Australian to attend European Space Camp. She’s passionate about space science, particularly rockets, and some of the awesome opportunities available for young people at Science Camps. Amelia will be talking about her journey from a Space Camp in Woomera, Central Australia to launching a sounding rocket in Northern Norway. She’ll discuss some of the impacts these adventures had on her career, some of the amazing opportunities they led to and how she’s using all those experiences now as an adult and communicator with her project Avid Research!"
                          },
                        ];

                        let cards = ptalks.map((pt,index) =>
                          `<a href="#pt-${index}" data-toggle="modal" class="col-md-6 mb-4">
                            <h3 class="mb-2">${pt.presentation}</h3>
                            <p><b>${pt.time}</b></p>
                            <div class="row">
                              ${pt.speakers.map(speaker =>
                                `
                                  <div class="col-md-3 text-center">
                                    <img src="${speaker.img}" class="img-fluid mx-auto d-block" width='80'>
                                    <p>${speaker.name}</p>
                                  </div>
                                `
                              ).join(``)}
                            </div>
                          </a>`
                        ).join(``);

                        let modals = ptalks.map((pt,index) =>
                          `
                          <div class="modal fade" id="pt-${index}">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                  <div class="modal-content">
                                    <h2>${pt.presentation}</h2>
                                    <h3>${pt.time}</h3>
                                    <div class="row ">
                                      <div class="col-md-4 d-flex align-items-center">
                                        <img src="${pt.speakers[0].img}" width="80" class="img-fluid ml-0 mr-3">
                                        <p>${pt.speakers[0].name}</p>
                                      </div>
                                    </div>
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
