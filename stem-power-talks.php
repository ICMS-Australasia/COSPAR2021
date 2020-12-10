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


                      <div id="power-cards">

                      </div>
                      <div id="power-modals">

                      </div>

                      <script type="text/javascript">
                        let ptalks = [
                          {
                            "Day": "Friday 29th Jan",
                            "talks":
                            [
                              {
                                "id": 3,
                                "speakers": "Amelia Travers",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Amelia Travers",
                                      "img": "./img/cospark/powertalks/amelia.travers.jpg"
                                    }
                                  ],
                                "affiliation": "Avid Research",
                                "presentation": "From Woomera to Andoya, Launching Rockets in High School",
                                "startTime": "11:15am",
                                "endTime": "11:30am",
                                "desc": "Amelia is a science communicator and web developer who was the first Australian to attend European Space Camp. She?s passionate about space science, particularly rockets, and some of the awesome opportunities available for young people at Science Camps. Amelia will be talking about her journey from a Space Camp in Woomera, Central Australia to launching a sounding rocket in Northern Norway. She?ll discuss some of the impacts these adventures had on her career, some of the amazing opportunities they led to and how she?s using all those experiences now as an adult and communicator with her project Avid Research!"
                              },
                              {
                                "id": 4,
                                "speakers": "Dana Quick",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Dana Quick",
                                      "img": "./img/cospark/powertalks/dana.quick.jpg"
                                    }
                                  ],
                                "affiliation": "Chatswood High School",
                                "presentation": "Engaging Year 8 Students to Design Sustainable Life on Mars!",
                                "startTime": "11:30am",
                                "endTime": "11:45am",
                                "desc": "Dana introduced and leads whole-school STEM learning at Chatswood High School, a large and dynamic High School on Sydney?s lower north shore. In this session she will outline the Year 8 Mars Project ? an immersive, inclusive Project Based Learning event for ~280 students who work in collaborative teams to design sustainable life on Mars. The talk will trans-disciplinary projects, harnessing industry expertise and the purposeful inclusion of key technologies including robotics, CAD, electrical systems and multimedia."
                              },
                              {
                                "id": 5,
                                "speakers": "Anneli Cole",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Anneli Cole",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Questacon",
                                "presentation": "Space Junk Clean Up",
                                "startTime": "11:45am",
                                "endTime": "12:00pm",
                                "desc": ""
                              },
                              {
                                "id": 6,
                                "speakers": "Michael Myers",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Michael Myers",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Re-engineering Australia Foundation Ltd",
                                "presentation": "Design for Human Habitation in Space",
                                "startTime": "1:30pm",
                                "endTime": "1:45pm",
                                "desc": "Twelve months after the failed Apollo 13 mission, the commander, Jim Lovel, came to Australia and spoke a group of year 12 physics students. I was one of those students. The story he told of problem-solving, resilience, determination and courage was etched in my mind. To solve such monumental problems in such a tiny space, in such a short period, was an inspiration beyond belief. While I knew that I would never go into space, it cemented in my mind the desire to be a problem solver, to be an Engineer. It provided the inspiration that gave birth to the Space in Schools program."
                              },
                              {
                                "id": 7,
                                "speakers": "Harrison Verrios",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Harrison Verrios",
                                      "img": "./img/cospark/powertalks/harrison.verrios.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "Monash Nova Rover - Students Building Robots",
                                "startTime": "1:45pm",
                                "endTime": "2:00pm",
                                "desc": "Monash Nova Rover is an engineering student team from Monash University, Melbourne, that develops rovers for international competitions. Founded in 2017, the team has competed against teams from across the world at the University Rover Challenge, held in the US, and have been the only team from Australia and the southern hemisphere to compete, placing 9th in 2019! The team comprises of students from all areas of science; from robotics to geology, to programming. This presentation gives an insight into their team's history and how just a small dream of being in the space industry can become a reality."
                              },
                              {
                                "id": 8,
                                "speakers": "Heather Catchpole",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Heather Catchpole",
                                      "img": "./img/cospark/powertalks/heather.catchpole.jpg"
                                    }
                                  ],
                                "affiliation": "Refraction Media",
                                "presentation": "5 Surprising Frontiers",
                                "startTime": "2:00pm",
                                "endTime": "2:15pm",
                                "desc": "Heather Catchpole founded STEM-specialist digital media company Refraction Media in 2013 with a view to creating a smarter future ? one in which everyone has access to the skills they need to make a better planet. Specialising in STEM communications for 20 years for the ABC, Cosmos, CSIRO, Discovery Channel and more, Heather has worked with Google, Facebook and Pixar on virtual reality expeditions, created a virtual tour of a nuclear reactor, and reaches 2 million students across the USA, Australia and New Zealand each year through the Careers with STEM brand."
                              }
                            ]
                          },
                          {
                            "Day": "Saturday 30th Jan",
                            "talks":
                            [
                              {
                                "id": 9,
                                "speakers": "Laura Betz",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Laura Betz",
                                      "img": "./img/cospark/powertalks/laura.betz.jpg"
                                    }
                                  ],
                                "affiliation": "NASA",
                                "presentation": "A Telescope Like a Time machine - NASA's James Webb Space Telescope",
                                "startTime": "10:00am",
                                "endTime": "10:15am",
                                "desc": "NASA's James Webb Space Telescope will explore every phase of cosmic history: from the formation of the very first galaxies in the early universe to our cosmic backyard of the Solar System. NASA Webb will be the biggest and most complex telescope that NASA has ever built.?This year Webb will make its journey about one million miles from Earth. This amazing telescope isÿbeing built to answer some of the biggest questions in astronomy today. Questions like, where did we come from? How did we get here? Are we alone in the universe? ??ÿÿ"
                              },
                              {
                                "id": 10,
                                "speakers": "Jess McCarthy",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Jess McCarthy",
                                      "img": "./img/cospark/powertalks/jess.mccarthy.jpg"
                                    }
                                  ],
                                "affiliation": "Mosman High School",
                                "presentation": "Out of this WORLD!",
                                "startTime": "10:15am",
                                "endTime": "10:30am",
                                "desc": "How can we travel out of this world in our own classrooms? By combining the power of virtual reality game design and the creation of 3D worlds, students in Year 10ÿiSTEMÿhave recreated the experience of what life on Mars could be like. Join me to find out more!"
                              },
                              {
                                "id": 11,
                                "speakers": "Daniel Ricardo",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Daniel Ricardo",
                                      "img": "./img/cospark/powertalks/daniel.ricardo.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "Student Pathways and Opportunities for a Career in Space",
                                "startTime": "10:30am",
                                "endTime": "10:45am",
                                "desc": "I've wanted to work in the space industry ever since I started watching Star Trek as a kid. Since highschool, I've taken many steps towards this career and want to share my knowledge and advice with others who are interested in taking the same path.ÿ I?ll be discussing my experience as being part of the first student team to represent Australia at the University Rover Challenge in America, Payload scientist for a student rock team, co-director and founder of the inaugural Australian Rover Challenge and time as a NASA intern."
                              },
                              {
                                "id": 12,
                                "speakers": "Matt Dodds",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Matt Dodds",
                                      "img": "./img/cospark/powertalks/matt.dodds.jpg"
                                    }
                                  ],
                                "affiliation": "Farrer Memorial Agricultural High School",
                                "presentation": "The Benefits of Challenging Students Through the Teaching of Rocket Science",
                                "startTime": "11:15am",
                                "endTime": "11:30am",
                                "desc": "Matt Dodds is a High School Science Teacher specialising in Physics and using practical activities to make learning more engaging and rewarding. Recently Matt shared his passion for rocketry and space exploration with his senior physics students. His students embarked on a rocketry build project where they designed and built their own solid-fuel rockets. The students then drew up their rockets in rocketry simulator software to test their stability and predicted the maximum height the rockets would reach. Launch day arrived and the class eagerly watched on as the countdown was started and the rockets took off into the sky. Join Matt to learn more about rocketry and practical physics!"
                              },
                              {
                                "id": 13,
                                "speakers": "Christopher Capon",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Christopher Capon",
                                      "img": "./img/cospark/powertalks/christopher.capon.jpg"
                                    }
                                  ],
                                "affiliation": "UNSW Canberra Space / Space Services Australia",
                                "presentation": "How to Start a Space Company",
                                "startTime": "11:30am",
                                "endTime": "11:45am",
                                "desc": "Graduating from the University of Queensland with a degree in Mechanical and Aerospace Engineering, Chris obtained his PhD from UNSW Canberra, where he?s been working as part of Australia?s largest space research team building and launching Australian nanosatellites. Inspired by his work and experience with UNSW Canberra, Chris co-founded Space Services Australia with the goal of making satellite design simpler and more collaboration easier."
                              },
                              {
                                "id": 14,
                                "speakers": "Kevin Simmons",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Kevin Simmons",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team",
                                "presentation": "BLUE-SKY Learning: The Wolverine and Wolfpack CubeSat Teams (2015-2020)",
                                "startTime": "11:45am",
                                "endTime": "12:00pm",
                                "desc": "The Wolverine CubeSat Development Team (WCDT) employs a ?BLUE-SKY Learning? philosophy. Young students have the potential and resources to accomplish remarkable technical feats - even launching their own spacecraft. The WCDT remains the only middle school (grades 6th-8th) program in the U.S. to have successfully launched a CubeSat mission with NASA?s CubeSat Launch Initiative (CSLI). Following the 2018 launch 2018 of their first CubeSat, the WeissSat-1, they were selected for a second satellite, the CapSat-1 by NASA in 2019. The WCDT leverages the excitement of young people towards aerospace and the accessibility of CubeSats to engage the new generation STEM workforce."
                              },
                              {
                                "id": 15,
                                "speakers": "Jim Christensen",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Jim Christensen",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Aldrin Family Foundation",
                                "presentation": "Giant Moon and Mars Maps in the Classroom",
                                "startTime": "1:30pm",
                                "endTime": "1:45pm",
                                "desc": ""
                              },
                              {
                                "id": 16,
                                "speakers": "Shawna Christenson",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Shawna Christenson",
                                      "img": "./img/cospark/powertalks/shawna.christenson.jpg"
                                    }
                                  ],
                                "affiliation": "Aerospace Public Policy Institute",
                                "presentation": "Forming a Science Identity in Primary Education",
                                "startTime": "1:45pm",
                                "endTime": "2:00pm",
                                "desc": "Shawna L. Christenson is the 2020 National Speech and Debate MiddleÿSchool Coach of the Year, a Space Foundation Teacher Liaison, and the K-12 STEM Outreach Officer for the AIAA Palm Beach Section. She is aÿFlorida certified English teacher (grades 6-12) and holds endorsements inÿGifted, Reading and ESOL. Ms. Christenson has been teaching for twenty two years with a focus on English and Debate. She is currently the secretary of the Palm Beach Middle School Forensic League and is aÿnationally recognized Diamond coach. Her current passion is publicÿpolicy, taking debate outside the classroom and into the real world by participating inÿlegislative blitzes as well as working with students on resolutions at the state and nationalÿlevel. From this passion, the Aerospace Public Policy Institute was developed in order to helpÿother students, teachers, and schools to communicate, educate, advocate and legislate forÿtheir own STEM interests. Shawna is a graduate of the University of Central Florida (BS, SecondaryÿEnglish Education) and Florida Atlantic University (MS, Curriculum and Instruction)"
                              },
                              {
                                "id": 17,
                                "speakers": "Joshua Chou",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Joshua Chou",
                                      "img": "./img/cospark/powertalks/joshua.chou.jpg"
                                    }
                                  ],
                                "affiliation": "UTS - Senior Lecturer",
                                "presentation": "How to Survive in Space and Treat Disease on Earth",
                                "startTime": "2:00pm",
                                "endTime": "2:15pm",
                                "desc": "Dr. Joshua Chou is currently a Senior Lecturer in the School of Biomedical Engineering at the University of Technology Sydney (UTS). Dr. Chou is on the advisory committee for Space Medicine & Life Sciences at the Australian Space Agency. Dr. Chou?s presentation will showcase his team?s development on different technologies and tools to understand the response from the cellular to tissue level the effects and the exciting field of space mechanobiology. Only by understanding the mechanisms of the human body?s response can we develop the necessary countermeasures.  Dr. Chou will also be the first to launch Australia?s space biology research mission to the International Space Station in 2021. ÿ"
                              }
                            ]
                          },
                          {
                            "Day": "Sunday 31st Jan",
                            "talks":
                            [
                              {
                                "id": 18,
                                "speakers": "Scott Sleap",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Scott Sleap",
                                      "img": "./img/cospark/powertalks/scott.sleap.jpg"
                                    }
                                  ],
                                "affiliation": "STEM Industry School Partnership Program",
                                "presentation": "STEM Industry School Partnerships (SISP) Program - Space Education Programs",
                                "startTime": "10:00am",
                                "endTime": "10:15am",
                                "desc": "The STEM Industry School Partnerships (SISP) program leader Dr Scott Sleap will discuss how schools can engage young people in Space STEM activities and the exciting opportunities there are for students to pursue careers in Space. Dr Sleap will discuss how to engage with SISP program initiatives and the ?Design for Space? unit out of the innovative iSTEM course. He will discuss what resources are available to support schools and how to stay in touch with exciting new developments."
                              },
                              {
                                "id": 19,
                                "speakers": "Caeden Dooner and Owen Welch",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Caeden Dooner",
                                      "img": ""
                                    },
                                    {
                                      "name": "Owen Welch",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Aerospace Public Policy Institute",
                                "presentation": "The Use of Electric and Magnetic Fields to Mitigate Dust in a Lunar Environment",
                                "startTime": "10:15am",
                                "endTime": "10:30am",
                                "desc": ""
                              },
                              {
                                "id": 20,
                                "speakers": "Jim Christensen",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Jim Christensen",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Aldrin Family Foundation",
                                "presentation": "We Came in Peace - The Apollo Visitor Complex Project",
                                "startTime": "10:30am",
                                "endTime": "10:45am",
                                "desc": ""
                              },
                              {
                                "id": 21,
                                "speakers": "Barath Kumar",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Barath Kumar",
                                      "img": "./img/cospark/powertalks/barath.kumar.jpg"
                                    }
                                  ],
                                "affiliation": "College Of Agricultural Technology, Theniheni",
                                "presentation": "Asteroid - Introduction, Sampling, Impacts and Prevention",
                                "startTime": "11:15am",
                                "endTime": "11:30am",
                                "desc": "I am a student studying agriculture from India. I am interested in exploring the universe and that?s why I enjoy studying astrophysics. In my Power Talk I am going to talk about asteroids, their prevention, impact and their detailed classification. I want to explore something new to the people and introduce them to the techniques and its classification. We will explore the whole universe together."
                              },
                              {
                                "id": 22,
                                "speakers": "Ariel Elbaum",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Ariel Elbaum",
                                      "img": "./img/cospark/powertalks/ariel.elbaum.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "Why You Shouldn't Give Up on Your Dream to be an Astronaut",
                                "startTime": "11:30am",
                                "endTime": "11:45am",
                                "desc": "Ariel Elbaum is about to begin his second year studying engineering at Monash University, he works in education support at a school, and he is part of the Monash Nova Rover team where he helps design the robotic arm. Too often the dream of being an astronaut is portrayed as childish dream, but through his talk Ariel hopes to inspire the next generation with the same enthusiasm that he has for everything space. Come join Ariel as he explores the wonder of space and his experience studying and practicing STEM."
                              },
                              {
                                "id": 23,
                                "speakers": "John Kiss",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "John Kiss",
                                      "img": "./img/cospark/powertalks/john.kiss.jpg"
                                    }
                                  ],
                                "affiliation": "Univ. North Carolina-Greensboro",
                                "presentation": "Why We Need Plants to Go to Mars",
                                "startTime": "11:45am",
                                "endTime": "12:00pm",
                                "desc": "Dr. John Z. Kiss is the Dean of the College of Arts and Sciences at the University of North Carolina-Greensboro, and his academic appointment is as Professor of Biology. He had served as Dean of the Graduate School at the University of Mississippi from 2012-16.ÿ  Dr. Kiss was on the faculty of Miami University (1993-2012) where he was a University Distinguished Professor and Chair of the Botany Department. He has mentored 60 independent research projects by undergraduates and has served as major professor for 14 M.S. students, 8 doctoral students, and 7 post-doctoral scholars. The research of Dr. Kiss focuses on the gravitational and space biology of plants, and he has published 118 peer-reviewed papers. He also has been invited to present seminars based on his research at universities throughout the US and in another 12 countries. He served as PI on grants from NASA, USDA, NSF, and the NIH as well as PI on eight spaceflight experiments on the Space Shuttle and the International Space Station. In 2014, he received the NASA Outstanding Public Leadership Medal ?for exceptional contributions in spaceflight research in the fundamental biology of plants in support of NASA?s exploration mission.?"
                              },
                              {
                                "id": 24,
                                "speakers": "Dean Hannah & Brian Barter",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Dean Hannah",
                                      "img": ""
                                    },
                                    {
                                      "name": "Brian Barter",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Excite and Educate",
                                "presentation": "AAVC Bottle Rockets and Student Engagement",
                                "startTime": "1:30pm",
                                "endTime": "1:45pm",
                                "desc": "The whole team is very excited to be both attending and presenting at COSPAR-K 2021!This exciting presentation is focussed on the use of the bottle rocket launcher and its ability to demonstrate some difficult to understand engineering concepts like centre of mass/centre of pressure/moment of inertia/ pressure versus volume/ lift, drag and thrust.The student is able to launch their models for no cost to enable them to apply, test and refine their understanding to improve their design.\nThe making of bottle rocket is done in a project based learning environment to maximise student centred outcomes while still allowing the classroom teacher to be a technology mentor. This dual student and teacher presentation will give unique perspectives on the way STEM can be implemented and experienced in the classroom."
                              },
                              {
                                "id": 25,
                                "speakers": "Samer Elhoushy and Theodore Ouyang",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Samer Elhoushy",
                                      "img": ""
                                    },
                                    {
                                      "name": "Theodore Ouyang",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team",
                                "presentation": "CapSat-1 and FlipSat-1: Novel Student-Built CubeSat Missions",
                                "startTime": "1:45pm",
                                "endTime": "2:00pm",
                                "desc": "As a 9th grade student currently, I'm incredibly excited to share the lessons that I have learned while developing a CubeSat mission, and I am thrilled to have the opportunity to share that knowledge on such a high-level stage! In November of 2018, the CapSat-1 and FlipSat-1 CubeSats were submitted to NASA?s CubeSat Launch Initiative (CSLI) program. In March of 2019, the CSLI announced 16 missions selected for that program, one of which being the CapSat-1, which was submitted through the Wolverine CubeSat Development Team (WCDT): the only middle school program nationwide to have developed and launched a CubeSat. This presentation covers the perspectives of two young students in developing CubeSat missions and their backgrounds, the necessary ambition in today?s youth for STEM, and the lessons learned from a CubeSat development perspective with regards to teamwork and time management."
                              },
                              {
                                "id": 26,
                                "speakers": "Georgia Alexakis, Amelia Chung Stephanie Nguyen & Alexandra Ventura",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Georgia Alexakis, Amelia Chung, Stephanie Nguyen & Alexandra Ventura",
                                      "img": "./img/cospark/powertalks/georgia.alexakis.amelia.chung.stephanie.nguyen.alexandra.ventura.jpg"
                                    }
                                  ],
                                "affiliation": "Students of Sydney Catholic School",
                                "presentation": "Creating a Research Facility for Titan",
                                "startTime": "2:00pm",
                                "endTime": "2:15pm",
                                "desc": "This power talk will be given by four high school students from Bethlehem College. They have participated in a 12 week innovation challenge run by Brain STEM. During this challenge they have investigated Saturn's moon Titan, and how best to build a research facility there. During this challenge they were mentored by Bonnie Teece, an astrobiologist and science communicator from the Australian Centre for Astrobiology, UNSW. Bonnie is also the co-founder of Praxical, and education initiative built on the premise of learning science through doing science."
                              }
                            ]
                          },
                          {
                            "Day": "Monday 1st Feb",
                            "talks":
                            [
                              {
                                "id": 27,
                                "speakers": "Michael Beiharz",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Michael Beiharz",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Knox Grammar School",
                                "presentation": "Beyond Earth, Populating Space",
                                "startTime": "10:00am",
                                "endTime": "10:15am",
                                "desc": ""
                              },
                              {
                                "id": 28,
                                "speakers": "Cran Middlecoat",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Cran Middlecoat",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "It's Rocket Science Adventures",
                                "presentation": "Why Rocket Science is Not Just for Rocket Scientists",
                                "startTime": "10:15am",
                                "endTime": "10:30am",
                                "desc": "When airline pilot and aerospace geek Cran Middlecoat designed the It?s Rocket Science Adventures water rocket launch system, it was not to create more rocket scientists, but to ignite human curiosity and a passion for STEM that comes from making things fly?in real life. Witnessing the power of rockets to extend all types of learners, Cran talks about how genuine fair testing can challenge students with fundamental principles of scientific, technological, engineering and mathematical thinking. While the pandemic may have changed the way we access education, it has not changed the type of thinkers we want to nurture."
                              },
                              {
                                "id": 29,
                                "speakers": "Jim Christensen",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Jim Christensen",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "Aldrin Family Foundation",
                                "presentation": "Home on the Moon with the Aldrin Family Foundation",
                                "startTime": "10:30am",
                                "endTime": "10:45am",
                                "desc": ""
                              },
                              {
                                "id": 30,
                                "speakers": "Paul Kiesling",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Paul Kiesling",
                                      "img": "./img/cospark/powertalks/paul.kiesling.jpg"
                                    }
                                  ],
                                "affiliation": "BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team",
                                "presentation": "Increasing Awareness of NASA?s CubeSat Launch Initiative to Enhance STEM Opportunities for All",
                                "startTime": "11:15am",
                                "endTime": "11:30am",
                                "desc": "The world is lacking diversity amongst aerospace workforce. To close this gap, hands-on learning opportunities should be more widely available in early education, which are the formidable years to ignite the dream. The Wolverine CubeSat Development Team engages students as young as ten years old in designing and building CubeSats, thus developing student confidence and creating a desire to pursue a future in STEM.ÿ As the first Middle School team in America to be selected by NASA?s CubeSat Launch Initiative, these students advocate on behalf of NASA?s educational programs so that similar learning opportunities are available for all.ÿ"
                              },
                              {
                                "id": 31,
                                "speakers": "Rebecca Muir and Daniel Ricardo",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Rebecca Muir",
                                      "img": ""
                                    },
                                    {
                                      "name": "Daniel Ricardo",
                                      "img": "./img/cospark/powertalks/daniel.ricardo.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "Developing and Integrating the First Life Detection Payload on the 2018 Monash Nova Rover",
                                "startTime": "11:30am",
                                "endTime": "11:45am",
                                "desc": "Daniel Ricardo (one of the Monash Nova Rover Team's payload scientists) and Rebecca Muir (the current Team Lead), will be discussing the life detection payload that was designed and developed by the team for the 2018 and 2019 University Rover Challenge held at the Mars Desert Research Station, in Utah. The life detection payload is capable of detecting the presence or absence of life from soil samples in under 30 minutes, and whether the organisms detected are still active or not."
                              },
                              {
                                "id": 32,
                                "speakers": "Matt Scott",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Matt Scott",
                                      "img": "./img/cospark/powertalks/matt.scott.jpg"
                                    }
                                  ],
                                "affiliation": "NSW Department of Education",
                                "presentation": "Space Camp Activities in the Classroom",
                                "startTime": "11:45am",
                                "endTime": "12:00pm",
                                "desc": "Matt Scott is the Secondary STEM Coordinator for the NSW Department of Education, Space Camp alumni and has a passion for all things aerospace. He will share a range of space-themed STEM activities that he participated in while at Space Camp for Educators in Huntsville, Alabama during 2018. Activities like these make a great entry point for teachers who wish to introduce space as a theme to engage their students in authentic STEM learning opportunities and are easily accessible online without having to travel to Space Camp!"
                              },
                              {
                                "id": 33,
                                "speakers": "Paul Hepplewhite",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Paul Hepplewhite",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "NSW Treasury",
                                "presentation": "Space is For Everyone",
                                "startTime": "1:30pm",
                                "endTime": "1:45pm",
                                "desc": ""
                              },
                              {
                                "id": 34,
                                "speakers": "Luke Steller",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Luke Steller",
                                      "img": "./img/cospark/powertalks/luke.steller.jpg"
                                    }
                                  ],
                                "affiliation": "UNSW (PhD Student)",
                                "presentation": "Is There Anybody Out There? An Astrobiologist's Search for Life in the Universe",
                                "startTime": "1:45pm",
                                "endTime": "2:00pm",
                                "desc": "Have you ever wondered if were alone in the universe? Or how life might have started on Earth? In this talk, Luke the Astrobiologist will tell you about how he is trying to answer these big questions by looking at hot spring pools from around the world! Learn how new discoveries made in these little bubbling pools are helping us understand how life might have formed on Earth, maybe showing us where to find life in the universe!"
                              },
                              {
                                "id": 35,
                                "speakers": "Lloyd Godson",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Lloyd Godson",
                                      "img": "./img/cospark/powertalks/lloyd.godson.jpg"
                                    }
                                  ],
                                "affiliation": "Hastings Secondary College Westport Campus",
                                "presentation": "Underwater Habitats as Space Analog Stations",
                                "startTime": "2:00pm",
                                "endTime": "2:15pm",
                                "desc": "In 2007, Lloyd Godson developed and managed The BioSUB Project, which was the world's first self-sufficient underwater habitat. During his 12 days living underwater, he communicated with thousands of students worldwide who followed his progress over the Internet, along with the international media who covered his experiment extensively. He also hosted six high school students and their teacher from Cascade, Idaho, who developed, built and installed his unique plant-based life support system. In his Space STEM Power Talk, Lloyd will share his Underwater Space Analog journey, beginning with his attendance at the NASA sponsored Habitation conference in Orlando, Florida and the connections he made with Space STEM experts from around the world.?"
                              }
                            ]
                          },
                          {
                            "Day": "Tuesday 2nd Feb",
                            "talks":
                            [
                              {
                                "id": 36,
                                "speakers": "Harrison Verrios",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Harrison Verrios",
                                      "img": "./img/cospark/powertalks/harrison.verrios.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "Monash Nova Rover - Students Building Robots",
                                "startTime": "10:00am",
                                "endTime": "10:15am",
                                "desc": "Monash Nova Rover is an engineering student team from Monash University, Melbourne, that develops rovers for international competitions. Founded in 2017, the team has competed against teams from across the world at the University Rover Challenge, held in the US, and have been the only team from Australia and the southern hemisphere to compete, placing 9th in 2019! The team comprises of students from all areas of science; from robotics to geology, to programming. This presentation gives an insight into their team's history and how just a small dream of being in the space industry can become a reality."
                              },
                              {
                                "id": 37,
                                "speakers": "Anita Beck",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Anita Beck",
                                      "img": "./img/cospark/powertalks/anita.beck.jpg"
                                    }
                                  ],
                                "affiliation": "Questacon - The National Science And Technology Centre",
                                "presentation": "Mission to Mars - One Science Centres Response to the Coronavirus Pandemic",
                                "startTime": "10:15am",
                                "endTime": "10:30am",
                                "desc": "With COVID restrictions keeping us in our neighbourhoods, all we could do was look at the sky and dream.ÿ When Questacon, the National Science and Technology Centre re-opened after almost 16 weeks shutdown due to the Coronavirus pandemic, it opened with a brand new, innovative and immersive offering that took visitors on a fantastic journey to become the first people to land on Mars. Anita Beck, Senior Manager of Learning Experiences at Questacon, will walk you through the experience and explore how discovering the courage and bravery needed to explore space helped us to discover our resilience here on earth."
                              },
                              {
                                "id": 38,
                                "speakers": "Joel Murch-Shafer & John Helzer",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Joel Murch-Shafer",
                                      "img": ""
                                    },
                                    {
                                      "name": "John Helzer",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "BLUECUBE Aerospace / Wolfpack Cubesat Dev. Team",
                                "presentation": "The Nebraska Wolfpack CubeSat Team",
                                "startTime": "10:30am",
                                "endTime": "10:45am",
                                "desc": "For cubesats in orbit, the only means of power is the sun. However, half of earth?s orbit is spent in darkness, and many cubesats fail because their solar panels degrade over time. An emerging type of solar panel called perovskites are a thin alternative to silicon photovoltaics that offers higher efficiency and collection ability. Nebraska?s Big Red Satellite team will test perovskites? efficiency, lifetime, and light collection on the dark side of earth compared to silicon panels using a 1U cubesat. We also aim to engage middle/high school students with STEM and launch the first cubesat ever from Nebraska."
                              },
                              {
                                "id": 39,
                                "speakers": "Cynthia Nguyen",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Cynthia Nguyen",
                                      "img": "./img/cospark/powertalks/cynthia.nguyen.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "The Future of STEM Education in Australia From the Eyes of Pre-Service Teachers",
                                "startTime": "11:15am",
                                "endTime": "11:30am",
                                "desc": "Cynthia Nguyen is a pre-service Science teacher from Melbourne who is currently studying at Monash University.ÿShe will talk about her current experiences with STEM education and discuss what she believes the future of STEM education will look like in Australia. She will be sharing her perspectives as a teacher and student dipping her toes into the world of STEM. She has tips for students to create their own STEM club at school and will share advice as to where to begin trying STEM out at school. Come learn more about the exciting innovations of STEM in Australian classrooms!"
                              },
                              {
                                "id": 40,
                                "speakers": "Ian Preston",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Ian Preston",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "STEM Industry School Partnership Program",
                                "presentation": "How to Run a Bottle Rocket Activity in Your School",
                                "startTime": "11:30am",
                                "endTime": "11:45am",
                                "desc": "An experienced STEM teacher, Ian introduced iSTEM to Griffith High School in 2016. His interest in Bottle Rockets originated when he entered his students in the Aeronautical Velocity Challenge, winning the Riverina Region and currently reigning as National Champions! As Head Teacher, Ian implemented Aerodynamics into the Technology Mandatory and iSTEM syllabi at Griffith High school (now renamed Murrumbidgee Regional High School). Ian has 15 years? experience teaching Aeronautical Engineering as one of the 4 HSC modules in Engineering Studies. In his current role for the SISP Program, he has expanded the bottle rocket program to other primary schools and his talk will focus on how you can run these activities in your school using the iSTEM process and how to build confidence in staff to run a bottle rocket unit. The simple fact that kids can get engaged in this type of activity regardless of age, learn about sophisticated engineering concepts such as lift, thrust, drag and weight without realising they are doing rocket-science!!"
                              },
                              {
                                "id": 41,
                                "speakers": "Sarah Baker",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Sarah Baker",
                                      "img": ""
                                    }
                                  ],
                                "affiliation": "SA Department of Education",
                                "presentation": "Space Education in South Australia",
                                "startTime": "11:45am",
                                "endTime": "12:00pm",
                                "desc": ""
                              },
                              {
                                "id": 42,
                                "speakers": "Peta Kourbelis",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Peta Kourbelis",
                                      "img": "./img/cospark/powertalks/peta.kourbelis.jpg"
                                    }
                                  ],
                                "affiliation": "Hamilton Secondary College",
                                "presentation": "Exploring the Next Frontier",
                                "startTime": "1:30pm",
                                "endTime": "1:45pm",
                                "desc": "Peta is an educational leader. She has held various leadership positions within public education and is currently Principal of Hamilton Secondary College in South Australia which is a STEM focus school. Her dedication to STEM education led to the establishment of the Mike Roach Space Education Centre in 2017. The Centre leads STEM learning through the application Space education with a key program focusing on the Exploration of Mars. It is in this Centre that students obtain practical and unique skills by experiencing real-life Martian explorations while being challenged to reach evidence-based conclusions about Mars habitability."
                              },
                              {
                                "id": 43,
                                "speakers": "Andrew O'Brien and Matt Scott",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Andrew O'Brien",
                                      "img": ""
                                    },
                                    {
                                      "name": "Matt Scott",
                                      "img": "./img/cospark/powertalks/matt.scott.jpg"
                                    }
                                  ],
                                "affiliation": "NSW Department of Education",
                                "presentation": "The ProtoSat - A CubeSat Teaching Program",
                                "startTime": "1:45pm",
                                "endTime": "2:00pm",
                                "desc": "The ProtoSat is a STEM teaching program developed by the NSW Department of Education's Secondary Curriculum team in collaboration with UNSW Canberra Space and Thunderstruck Space. This presentation will highlight the industry-informed engineering design process steps students will follow to design, code, ground test and evaluate their own weather data gathering CubeSat."
                              },
                              {
                                "id": 44,
                                "speakers": "Shefin Mariya Joju and Daniella Conser",
                                "speakerProfiles":
                                  [
                                    {
                                      "name": "Shefin Mariya Joju",
                                      "img": "./img/cospark/powertalks/shefin.joju.jpg"
                                    },
                                    {
                                      "name": "Daniella Conser",
                                      "img": "./img/cospark/powertalks/daniella.conser.jpg"
                                    }
                                  ],
                                "affiliation": "Monash University Nova Rover Team",
                                "presentation": "The Life of a Space STEM Student",
                                "startTime": "2:00pm",
                                "endTime": "2:15pm",
                                "desc": "In this session, two STEM students will share their journeys and passion for STEM and about the world beneath us and the world above us, to inspire the younger generation who are interested in STEM. Shefin will be discussing her experience as a Space STEM student and about why she chose the path of space exploration and the projects she works on with rockets and rovers. Daniella will similarly discuss her involvement with the Monash Nova Rover team and other initiatives she?s been involved in, as well as her interest and love for the planet we live on and what led her to pursue studies in earth sciences."
                              }
                            ]
                          }
                        ];

                        let cards = ptalks.map((d,index) =>
                          `
                            <h2>${d.Day}</h2>
                              <div class="row mt-4">
                              ${d.talks.map((t,index,array) =>
                                `
                                <a href="#pt-${t.id}" data-toggle="modal" class="col-md-4 mb-4" style="text-decoration:none">
                                  <h3 class="mb-2">${t.presentation}</h3>
                                  <p class="mb-0"><b>${t.startTime} - ${t.endTime}</b></p>
                                  <p class="mt-0"><em>${t.speakers}</em></p>
                                </a>
                                `

                              ).join(``)}
                              </div>
                              <hr class="mb-5">
                              `
                        ).join(``);

                        let modals = ptalks.map((pt,index) =>
                          `
                          ${pt.talks.map((t, index, array) =>
                            `
                            <div class="modal fade" id="pt-${t.id}">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                      <h2>${t.presentation}</h2>
                                      <h3 class="mb-3">${t.affiliation}</h3>
                                      <h4 class="mt-0">${t.startTime} - ${t.endTime}</h4>
                                      <div class="row align-items-center">
                                      ${t.speakerProfiles.map((sp, array) =>
                                        `
                                        <div class="${t.speakerProfiles.length > 1 ? `col-md-3` : `col-md` } d-flex align-self-center">
                                        ${sp.img != "" ? `<img src="${sp.img}" width="80" class="ml-0 mr-3">`: ``}
                                        <p class='d-flex align-self-center mt-4'><b>${sp.name}</b></p>
                                        </div>
                                        `).join(``)}
                                        </div>
                                      <p>${t.desc}</p>
                                      <button type="button" class="close" data-dismiss="modal">x</button>
                                    </div>
                                </div>
                            </div>
                            `
                          ).join(``)}
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
