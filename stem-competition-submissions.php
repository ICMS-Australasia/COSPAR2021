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
                            "title": "Emily",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9b398dd05d894c319e3e0f003ff78d90",
                            "desc": "My painting is of a mother and her child looking up up at the stars and seeing a shooting star which they call their Dad/Husband,who has passed away.Their belief is that when a loved one has passed away they come back in the form of a shooting star to watch over them.\n \n I have decided to name my painting ‘The shooting star’."
                          },
                          {
                            "title": "Jack and Rosie",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/7b2a1a0e00be4dcd90c1d90c1a2f5159",
                            "desc": "It was about the emu in the sky and we tried to do a traditional dot painting we also got inspiration form the shooting Star to represent that a love one has safely made it to the after life. We would like to pay respect to the Aboriginals of Australia."
                          },
                          {
                            "title": "Jaimie and Josie",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d35e65f594bd49da8c6342a30a44d935",
                            "desc": "This painting is inspired by the Emu in the sky along with the seven emu eggs.\n The colours in the background represent the stars and the galaxies. We wanted to incorporate dot painting so we included it in the emu eggs surrounding the Emu."
                          },
                          {
                            "title": "Juliette",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/67aabe732d41449182b6b146341e6116",
                            "desc": "My painting is about the ‘Emu in the sky’, it appears in the night sky around April and May at 8 pm it is a sign for the aboriginal tribe to go and collect the emu eggs. My painting is how the emu is sort of camouflage in the night sky."
                          },
                          {
                            "title": "Lily and Jemima",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5e7f0c5f2d0b4580a2cfd5907c430617",
                            "desc": "Our painting is about the shooting star. It represents the spirit making it to the after life."
                          },
                          {
                            "title": "Olivia and Stella",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/412ae55688b241e988b9c6b692537eba",
                            "desc": "This is our painting of the emu in the sky with the three eggs that represent the time to collect the eggs which is in April through to May. The colours around the area are all the stars and it shows how wonderful and colourful the sky is."
                          },
                          {
                            "title": "Skylar",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/39550e5c7deb4fe6b3a365151717b322",
                            "desc": "My painting represents the Emu in the sky. When you see the Emu in the sky it means it is time to go looking for emu eggs. It appears in the sky at around 8:00pm in April and May. The green in my painting represents the emu eggs and the orange represents the red earth where the emus live."
                          },
                          {
                            "title": "Amelie (Yr 7), Abigail (Yr 12), Marie (Yr 5), Chanaye (Kindy)",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/eea134a71d11492898928a75dad65c80",
                            "desc": "This term we focused on ‘Space’ as a theme for educational activities. We studied the Milky Way from the perspective of Aboriginal Australians.\n \n We spoke about the Milky Way via www.aboriginalastronomy.com.au/\n \n We emulated the Aboriginal symbol for stars through the technique of paper coiling using upcycled magazines."
                          },
                          {
                            "title": "Dylan, Year 3",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/aaeae67339854effa1050d04391234e9",
                            "desc": "The kangaroo had to feed her babies and she left milk out and that made the Milky Way.\n \n This is my own work."
                          },
                          {
                            "title": "Ryrie, Year 3",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/cf8d9f217c2444efa2ca5d3edd961b30",
                            "desc": "This is the story of two men who kill a kangaroo.\n \n This is my own work."
                          },
                          {
                            "title": "AL, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9b1a1a706637486dbc6e83e24829660f",
                            "desc": "The Peacock\n The mediums I used were: acrylic paint, washable paint and grey lead. It shows the peacock walking across the ground before turning into a constellation. The story is that the peacock was so arrogant it was sent to space to bring beauty to others. Work of AL."
                          },
                          {
                            "title": "CG, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/6a05e125f8334a629a1c603a230519f2",
                            "desc": "The Creation of the Stars \n This is my artwork of an eagle flying across the night sky. \n The mediums I used were: Acrylic Paints, Washable Paints and Graphite pencil. Every night, the eagle flies across the sky, shedding his silver feathers which turn into stars.\n Artwork created by CG."
                          }
                        ];
                        let compiledHtml = ``;
                            compiledHtml = submissions.map((sub, index) =>
                                `
                                <a href="#${index}" data-toggle="modal" target="_blank" class="col-12 col-sm-4 col-md-2 archive-item">
                                  <div class="archive-image">
                                    <img src="${sub.img}?text=${sub.title}" class="img-fluid" width="100%">
                                  </div>
                                  <div class="archive-title">
                                      ${sub.title}
                                  </div>
                                </a>
                                <div class="submission-popups">
                                  <div class="modal fade" id="${index}">
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
