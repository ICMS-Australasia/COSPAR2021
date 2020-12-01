<?php
$cospark = true;
$title = 'Keynotes';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">


                      <h1 class="mt-3 mb-5">Spectacular Speakers Schedule</h1>

                      <h3>Pyrmont Theatre, ICC Sydney</h3>
                      <p>Our speaker line-up is truly amazing! We’ve curated this speaker program to highlight the importance of STEM and why a career in Space STEM is a future to seriously consider. We want you to be inspired, be challenged and be the future of Space STEM.</p>
                      <p>Thanks to our friends at Microsoft, no matter where you are on our beautiful Earth you can live-stream the entire COSPAR-K speakers program.</p>

                      <div class="row mt-5 speakers-schedule">
                        <a href="stem-keynotes" class=" col-12 col-sm-4 text-center">
                          <p class="icon m-0"><i class="fas fa-video"></i></p>
                          <h3 class="mb-0">Keynote Speakers</h3>
                          <p><em>30 minutes</em></p>
                          <p>Mix of speakers appearing live on-stage and virtual via video. Keynotes will be recorded and available on-demand for convenient viewing.</p>
                        </a>
                        <a class="disabled col-12 col-sm-4 text-center">
                          <p class="icon m-0"><i class="fas fa-chalkboard-teacher"></i></p>
                          <h3 class="mb-0">Power Talks</h3>
                          <p><em>15 minutes</em></p>
                          <p>Delivered in a mix of live on-stage and video presentations. Only available during the scheduled time.</p>
                        </a>
                        <a class="disabled col-12 col-sm-4 text-center">
                          <p class="icon m-0"><i class="fas fa-comments"></i></p>
                          <h3 class="mb-0">Panel Discussions</h3>
                          <p><em>60 minutes</em></p>
                          <p>Featuring leaders in STEM education from both government and industry.</p>
                        </a>
                      </div>

                      <div class="row my-4">
                        <div class="col-md-6 col-12">
                          <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-tickets/Site/Register" target="_blank" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>Book Your FREE In-Person Tickets Now!</b></span>
                            <span class="button-body my-0">Pyrmont Theatre, ICC Sydney</span>
                          </a>
                        </div>
                        <div class="col-md-6 col-12">
                          <a href="stem-tv" target="_blank" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>COSPAR-K TV <em class="mr-1">powered by Microsoft</em> <br> Bookings Bow Open!</b></span>
                          </a>
                        </div>
                      </div>

                      <!-- <hr class="my-5">

                      <h1>Speaker Program</h1>

                      <div class="row my-4" id="speaker-program-buttons">
                        <div class="col-md col-4">
                          <a href="#speaker-program-buttons" onclick="SetSpeakerProgram(1)" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>Friday</b></span>
                            <span class="button-body my-0"> 29th Jan</span>
                          </a>
                        </div>
                        <div class="col-md col-4">
                          <a href="#speaker-program-buttons" onclick="SetSpeakerProgram(2)" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>Saturday</b></span>
                            <span class="button-body my-0">30th Jan</span>
                          </a>
                        </div>
                        <div class="col-md col-4">
                          <a href="#speaker-program-buttons" onclick="SetSpeakerProgram(3)" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>Sunday</b></span>
                            <span class="button-body my-0">31st Jan</span>
                          </a>
                        </div>
                        <div class="col-md col-4">
                          <a href="#speaker-program-buttons" onclick="SetSpeakerProgram(4)" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>Monday</b></span>
                            <span class="button-body my-0">1st Feb</span>
                          </a>
                        </div>
                        <div class="col-md col-4">
                          <a href="#speaker-program-buttons" onclick="SetSpeakerProgram(5)" class="button-secondary mt-4 mt-md-0">
                            <span class="button-body mb-0"><b>Tuesday</b></span>
                            <span class="button-body my-0">2nd Feb</span>
                          </a>
                        </div>
                      </div> -->

                      <!-- <div id="speaker-program">

                      </div> -->

                      <script type="text/javascript">
                      let days = [
                        `
                        <table class="speakers-table mt-5" cellpadding="20" cellspacing="0" border="0" width="100%">
                            <colgroup>
                              <col width="18%">
                              <col width="15%">
                              <col width="60%">
                            </colgroup>
                            <tr>
                              <th colspan="3">Day 1 | Friday 29th Jan</th>
                            </tr>
                            <tr>
                              <td align="center">9:30am - 10:00am</td>
                              <td colspan="2">Arrival, Check-in & Welcome</td>
                            </tr>
                            <tr>
                              <td align="center">10:00am - 10:15am</td>
                              <td colspan="2">Official COSPAR-K Opening <br> <b>TBA</b> </td>
                            </tr>
                            <tr class="keynote">
                              <td align="center">10:15am - 10:45am</td>
                              <td>Keynote</td>
                              <td>
                                <b>Emily Calandrelli</b> <br>
                                TBA <br>
                                <em>The Space Gal</em>
                              </td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">10:45am - 11:00am</td>
                              <td>Power Talk</td>
                              <td><b>TBA</b></td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">11:00am - 11:15am</td>
                              <td>Power Talk</td>
                              <td><b>TBA</b></td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">11:15am - 11:30am</td>
                              <td>Power Talk</td>
                              <td>
                                <b>Amelia Travers  </b> <br>
                                From Woomera to Andoya, Launching Rockets in High School <br>
                                <em>Avid Research</em>
                              </td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">11:30am - 11:45am</td>
                              <td>Power Talk</td>
                              <td>
                                <b>Dana Quick  </b> <br>
                                Engaging Year 8 Students to Design Sustainable Life on Mars! <br>
                                <em>Chatswood High School</em>
                              </td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">11:45am - 12:00pm</td>
                              <td>Power Talk</td>
                              <td>
                                <b>Anneli Cole  </b> <br>
                                Space Junk Clean Up <br>
                                <em>Questacon</em>
                              </td>
                            </tr>
                            <tr class="break">
                              <td colspan="3"><b>Break</b></td>
                            </tr>
                            <tr>
                              <td align="center">1:00pm - 1:30pm</td>
                              <td colspan="2">Arrival, Check-in & Welcome</td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">1:30pm - 1:45pm</td>
                              <td>Power Talk</td>
                              <td>
                                <b>Michael Myers</b> <br>
                                Design for Human Habitation in Space <br>
                                <em>Re-engineering Australia Foundation Ltd</em>
                              </td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">1:45pm - 2:00pm</td>
                              <td>Power Talk</td>
                              <td>
                                <b>Harrison Verrios</b> <br>
                                Monash Nova Rover - Students Building Robots <br>
                                <em>Monash University Nova Rover team</em>
                              </td>
                            </tr>
                            <tr class="power-talk">
                              <td align="center">2:00pm - 2:15pm</td>
                              <td>Power Talk</td>
                              <td>
                                <b>Heather Catchpole</b> <br>
                                5 Surprising Frontiers <br>
                                <em>Refraction Media</em>
                              </td>
                            </tr>
                            <tr class="keynote">
                              <td align="center">2:15pm - 2:45pm</td>
                              <td>Keynote</td>
                              <td>
                                <b>Russell Boyce</b> <br>
                                TBA <br>
                                <em>UNSW Canberra Space</em>
                              </td>
                            </tr>
                            <tr class="panel">
                              <td align="center">2:45pm - 3:45pm</td>
                              <td>Panel Discussion 1</td>
                              <td>
                                <b>TBA</b> <br>
                                Future Workforce Panel <br>
                              </td>
                            </tr>
                          </table>
                        `,
                        `
                        <table class="speakers-table mt-5" cellpadding="20" cellspacing="0" border="0" width="100%">
                          <colgroup>
                            <col width="18%">
                            <col width="15%">
                            <col width="60%">
                          </colgroup>
                          <tr>
                            <th colspan="3">Day 2 | Saturday 30th Jan</th>
                          </tr>
                          <tr>
                            <td align="center">9:30am - 10:00am</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:00am  - 10:15am</td>
                            <td>Power Talk</td>
                            <td><b>Laura Betz</b> <br>
                              A Telescope Like a Time machine - NASA's James Webb Space Telescope  <br>
                              <em>NASA</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:15am - 10:30am</td>
                            <td>Power Talk</td>
                            <td><b>Jess McCarthy</b> <br>
                              Out of this WORLD! <br>
                              <em>Mosman High School</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:30am - 10:45am</td>
                            <td>Power Talk</td>
                            <td><b>Daniel Ricardo</b> <br>
                              Student Pathways and Opportunities for a Career in Space <br>
                              <em>Monash University Nova Rover Team</em></td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">10:45am - 11:15am</td>
                            <td>Keynote</td>
                            <td><b>Pam Melroy</b> <br>
                              TBA <br>
                              <em>Retired United States Air Force officer, NASA Astronaut, and Space Shuttle Commander</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:15am - 11:30am</td>
                            <td>Power Talk</td>
                            <td><b>Matt Dodds</b> <br>
                              The Benefits of Challenging Students Through the Teaching of Rocket Science <br>
                              <em>Farrer Memorial Agricultural High School</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:30am - 11:45am</td>
                            <td>Power Talk</td>
                            <td><b>Christopher Capon</b> <br>
                              How to Start a Space Company <br>
                              <em>UNSW Canberra Space / Space Services Australia</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:45am - 12:00pm</td>
                            <td>Power Talk</td>
                            <td><b>Kevin Simmons</b> <br>
                              BLUE-SKY Learning: The Wolverine and Wolfpack CubeSat Teams (2015-2020) <br>
                              <em>BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team</em></td>
                          </tr>
                          <tr class="break"><td colspan="3"><b>Break</b></td></tr>
                          <tr>
                            <td align="center">1:00pm - 1:30pm</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td></tr>
                          <tr class="power-talk">
                            <td align="center">1:30pm - 1:45pm</td>
                            <td>Power Talk</td>
                            <td><b>Jim Christensen</b> <br>
                              Giant Moon and Mars Maps in the Classroom <br>
                              <em>Aldrin Family Foundation</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:45pm - 2:00pm</td>
                            <td>Power Talk</td>
                            <td><b>Shawna Christenson</b> <br>
                              Forming a Science Identity in Primary Education <br>
                              <em>Aerospace Public Policy Institute</em></td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">2:00pm - 2:15pm</td>
                            <td>Power Talk</td>
                            <td><b>Joshua Chou</b> <br>
                              How to Survive in Space and Treat Disease on Earth <br>
                              <em>UTS - Senior Lecturer</em></td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">2:15pm - 2:45pm</td>
                            <td>Keynote</td>
                            <td><b>Christyl Johnson</b> <br>
                              TBA <br>
                              <em>NASA Goddard Space Flight Centre</em></td>
                          </tr>
                          <tr class="panel">
                            <td align="center">2:45pm - 3:45pm</td>
                            <td>Panel Discussion 2</td>
                            <td><b>Zeina Chalich and Sarah Weston</b> <br>
                              Investigations in M for STEM <br>
                              <em>NSW Department of Education</em></td>
                          </tr>
                        </table>
                        `,
                        `
                        <table class="speakers-table mt-5" cellpadding="20" cellspacing="0" border="0" width="100%">
                          <colgroup>
                            <col width="18%">
                            <col width="15%">
                            <col width="60%">
                          </colgroup>
                          <tr>
                            <th colspan="3">Day 3 | Sunday 31st Jan</th>
                          </tr>
                          <tr>
                            <td align="center">9:30am - 10:00am</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:00am - 10:15am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Scott Sleap</b> <br>
                              STEM Industry School Partnerships (SISP) Program - Space Education Programs <br>
                              <em>Stem Industry School Partnership Program</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:15am - 10:30am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Shawna Christenson</b> <br>
                              The Use of Electric and Magnetic Fields to Mitigate Dust in a Lunar Environment <br>
                              <em>Aerospace Public Policy Institute</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:30am - 10:45am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Jim Christensen</b> <br>
                              We Came in Peace - The Apollo Visitor Complex Project <br>
                              <em>Aldrin Family Foundation</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">10:45am - 11:15am</td>
                            <td>Keynote</td>
                            <td>
                              <b>Phil Bland</b> <br>
                              TBA <br>
                              <em>Space & Planetary Science at Curtin University</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:15am - 11:30am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Barath Kumar</b> <br>
                              Asteroid - Introduction, Sampling, Impacts and Prevention <br>
                              <em>College Of Agricultural Technology, Theniheni</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:30am - 11:45am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Ariel Elbaum</b> <br>
                              Why You Shouldn't Give Up on Your Dream to be an Astronaut <br>
                              <em>Monash University Nova Rover team</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:45am - 12:00pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>John Kiss</b> <br>
                              Why We Need Plants to Go to Mars <br>
                              <em>Univ. North Carolina-Greensboro</em>
                            </td>
                          </tr>
                          <tr class="break">
                            <td colspan="3"><b>Break</b></td>
                          </tr>
                          <tr>
                            <td align="center">1:00pm - 1:30pm</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:30pm - 1:45pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Dean Hannah & Brian Barter</b> <br>
                              AAVC Bottle Rockets and Student Engagement <br>
                              <em>Excite and Educate</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:45pm - 2:00pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Samer Elhoushy</b> <br>
                              CapSat-1 and FlipSat-1: Novel Student-Built CubeSat Missions <br>
                              <em>BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">2:00pm - 2:15pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Bonnie Teece</b> <br>
                              Creating a Research Facility for Titan <br>
                              <em>UNSW - PhD Student</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">2:15pm - 2:45pm</td>
                            <td>Keynote</td>
                            <td>
                              <b>Lisa Harvey-Smith</b> <br>
                              TBA <br>
                              <em>Australia's Women in STEM Ambassador</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">2:45pm - 3:15pm</td>
                            <td>Keynote</td>
                            <td>
                              <b>Adrian Brown</b> <br>
                              TBA <br>
                              <em>NASA</em>
                            </td>
                          </tr>
                        </table>
                        `,
                        `
                        <table class="speakers-table mt-5" cellpadding="20" cellspacing="0" border="0" width="100%">
                          <colgroup>
                            <col width="18%">
                            <col width="15%">
                            <col width="60%">
                          </colgroup>
                          <tr>
                            <th colspan="3">Day 4 | Monday 1st Feb</th>
                          </tr>
                          <tr>
                            <td align="center">9:30am - 10:00am</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:00am - 10:15am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Michael Beiharz</b> <br>
                              Beyond Earth, Populating Space <br>
                              <em>Knox Grammar School</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:15am - 10:30am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Cran Middlecoat</b> <br>
                              Why Rocket Science is Not Just for Rocket Scientists <br>
                              <em>It's Rocket Science Adventures</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:30am - 10:45am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Jim Christensen</b> <br>
                              Home on the Moon with the Aldrin Family Foundation <br>
                              <em>Aldrin Family Foundation</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">10:45am - 11:15am</td>
                            <td>Keynote</td>
                            <td>
                              <b>Corey Tutt</b> <br>
                              TBA <br>
                              <em>Deadly Science</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:15am - 11:30am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Paul Kiesling</b> <br>
                              Increasing Awareness of NASA’s CubeSat Launch Initiative to Enhance STEM Opportunities for All <br>
                              <em>BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:30am - 11:45am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Rebecca Muir</b> <br>
                              Developing and Integrating the First Life Detection Payload on the 2018 Monash Nova Rover <br>
                              <em>Monash University Nova Rover team</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:45am - 12:00pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Matt Scott</b> <br>
                              Space Camp Activities in the Classroom <br>
                              <em>NSW Department of Education</em>
                            </td>
                          </tr>
                          <tr class="break">
                            <td colspan="3"><b>Break</b></td>
                          </tr>
                          <tr>
                            <td align="center">1:00pm - 1:30pm</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:30pm - 1:45pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Paul Hepplewhite</b> <br>
                              Space is For Everyone <br>
                              <em>NSW Treasury</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:45pm - 2:00pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Luke Steller</b> <br>
                              Is There Anybody Out There? An Astrobiologist's Search for Life in the Universe <br>
                              <em>UNSW (PhD Student)</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">2:00pm - 2:15pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Lloyd Godson</b> <br>
                              Underwater Habitats as Space Analog Stations <br>
                              <em>Hastings Secondary College Westport Campus</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">2:15pm - 2:45pm</td>
                            <td>Keynote</td>
                            <td>
                              <b>TBA</b></td>
                          </tr>
                          <tr class="panel">
                            <td align="center">2:45pm - 3:45pm</td>
                            <td>Panel Discussion 3</td>
                            <td>
                              <b>See panels tab</b> <br>
                              NSW Space Industry Development Strategy <br>
                              <em>See panels tab</em>
                            </td>
                          </tr>
                        </table>
                        `,
                        `
                        <table class="speakers-table mt-5" cellpadding="20" cellspacing="0" border="0" width="100%">
                          <colgroup>
                            <col width="18%">
                            <col width="15%">
                            <col width="60%">
                          </colgroup>
                          <tr>
                            <th colspan="3">Day 5 | Tuesday 2nd Feb</th>
                          </tr>
                          <tr>
                            <td align="center">9:30am - 10:00am</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:00am - 10:15am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Harrison Verrios</b> <br>
                              Monash Nova Rover - Students Building Robots <br>
                              <em>Monash University Nova Rover team</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:15am - 10:30am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Anita Beck</b> <br>
                              Mission to Mars - One Science Centres response to the Coronavirus pandemic <br>
                              <em>Questacon - The National Science And Technology Centre</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">10:30am - 10:45am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Joel Murch-Shafer & John Helzer</b> <br>
                              The Nebraska Wolfpack CubeSat Team <br>
                              <em>BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">10:45am - 11:15am</td>
                            <td>Keynote</td>
                            <td>
                              <b>Andy Aldrin</b> <br>
                              TBA <br>
                              <em>Aldrin Family Foundation</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:15am - 11:30am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Cynthia Nguygen</b> <br>
                              The Future of STEM Education in Australia From the Eyes of Pre-Service Teachers <br>
                              <em>Monash University Nova Rover team</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:30am - 11:45am</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Ian Preston</b> <br>
                              How to Run a Bottle Rocket Activity in Your School <br>
                              <em>STEM Industry School Partnership Program</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">11:45am - 12:00pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Sarah Baker</b> <br>
                              Space Education in South Australia <br>
                              <em>SA Department of Education</em>
                            </td>
                          </tr>
                          <tr class="break">
                            <td colspan="3"><b>Break</b></td>
                          </tr>
                          <tr>
                            <td align="center">1:00pm - 1:30pm</td>
                            <td colspan="2">Arrival, Check-in & Welcome</td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:30pm - 1:45pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Peta Kourbelis</b> <br>
                              Exploring the Next Frontier <br>
                              <em>Hamilton Secondary College</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">1:45pm - 2:00pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Andrew O'Brien</b> <br>
                              The ProtoSat - A CubeSat Teaching Program <br>
                              <em>NSW Department of Education</em>
                            </td>
                          </tr>
                          <tr class="power-talk">
                            <td align="center">2:00pm - 2:15pm</td>
                            <td>Power Talk</td>
                            <td>
                              <b>Shefin Mariya Joju</b> <br>
                              The Life of a Space STEM Student <br>
                              <em>Monash University Nova Rover team</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">2:15pm - 2:45pm</td>
                            <td>Keynote</td>
                            <td>
                              <b>Andreas Antoniades</b> <br>
                              TBA <br>
                              <em>Sabre Astronautics</em>
                            </td>
                          </tr>
                          <tr class="keynote">
                            <td align="center">2:45pm - 3:15pm</td>
                            <td>Keynote</td>
                            <td>
                              <b>Rosa Doran</b> <br>
                              TBA <br>
                              <em>Nuclio</em>
                            </td>
                          </tr>
                        </table>
                        `
                      ];

                      function SetSpeakerProgram(day) {
                        document.getElementById('speaker-program').innerHTML = days[day-1];
                      }

                      document.getElementById('speaker-program').innerHTML = days[0];
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
