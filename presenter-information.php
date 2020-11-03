<?php
$title = 'Presenter Information';
include('include/header.php');
?>
<!-- title -->
<div class="title">
  <div class="container">
    <div class="row py-5">
      <div class="col py-4">
        <h1><?php echo $title; ?></h1>
        <div class="sub">
          <a href="pdfs/Presenter-information.pdf" target="_blank" class="presenter-pdf"><img src="img/presenter-pdf-virtual.jpg" alt="">Download <?php echo $title; ?> PDF</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- title -->
<!-- content -->
<div class="content">
  <div class="container">
    <div class="row py-5 presenter-info">
      <div class="col">
        <h2>Participation in COSPAR-2021-Hybrid: How it will it work.</h2>

        <h3 class="mt-3 mb-3">COSPAR-2021-Hybrid will be held from 28 January 2021 to 4 February 2021 and will be Hybrid – a blend of in-person in Sydney, Australia (both interactive and on-demand).</h3>

        <h2 class="mt-5 mb-3">COSPAR-2021-Hybrid, a true global Assembly</h2>
        <p>The Scientific Program for COSPAR-2021-Hybrid is the program for COSPAR 2020, shifted from August to 28 January - 4 February, the new dates of COSPAR-2021-Hybrid. The only difference, as explained below, is how the program will be offered so that COSPAR-2021-Hybrid will be a truly global Assembly with full participation in multiple time zones.</p>

        <p>The details below are intended to provide the required information to everyone associated with the Scientific Program for COSPAR-2021-Hybrid: the authors of all accepted abstracts, the Main Scientific Organizers (MSOs) and Deputy Organizers (DOs) of all scientific events, the Chairs of Scientific Commissions and Panels, and the COSPAR Program Committee. These details include instructions for how the Scientific Program for COSPAR-2021-Hybrid will be conducted, the opportunities and responsibilities of participating in the Scientific Program, and how to obtain the reduced registration rate in return for on-time delivery of pre-recorded presentations.</p>

        <h2 class="mt-5 mb-3">Event Schedule</h2>
        <p>There is no change in the program (themes, sessions, layout), now that COSPAR-2021 is COSPAR-2021-Hybrid. </p>
        <p>All presentations will be pre-recorded by presenters, with the duration consistent as per the original program timings. Presentations will need to be uploaded for inclusion in the Assembly delivery platform ( no later than 30 November 2020) and will be available at the beginning of the Assembly, searchable according to COSPAR Commissions and Panels, technical themes, and keywords, to registered delegates only.</p>

        <h2 class="mt-5 mb-3">When will the final program be available</h2>

        <p>For the overall program and details of your Scientific event, please consult the Assembly website at: <a href="https://www.cospar-assembly.org" target="_blank">https://www.cospar-assembly.org</a>.</p>

        <p>With the latest call for abstracts now closed and under review, the final program will be available to view after 31 October.</p>
        <h2 class="mt-5 mb-3">Time zones</h2>

        <p>The program schedule is designed to deliver the full program across global time zones. Each pre-recorded presentation will be scheduled to play twice.</p>
        <p>MSOs/DOs and Session Chairs will need to coordinate which of the two daily three-hour blocks they will Chair. It is our preference that at least one chair person should be in attendance to facilitate the live Q&A.</p>

        <p>The program for each day will be concentrated into a three-hour block early in the Australian/Asian day (suitable for the American time zones) and repeated again at the end of the Australian/Asian day and into the evening (suitable for
          the European, African and Middle-Eastern time zones). In this way, all time zones will be catered for. Outside these times, the presentations will be available on-demand until 31 December 2021.</p>

        <h2 class="mt-5 mb-3">Registration</h2>

        <p>All presenters are reminded to register before <strong>30 November 2020</strong>, the early bird Presenter Registration Deadline. In order to be eligible for the early bird presenter rate, presentations will need to be uploaded for inclusion in the Assembly delivery platform on or before ( no later than) 30 November 2020) .</p>

        <h2 class="mt-5 mb-3">Platform</h2>

        <p>Further information, including a tutorial video, will be sent to you in due course with instructions for accessing the COSPAR-2021 Hybrid Platform, for joining your session, participating in and managing live Q&A and more!</p>


      </div>
      <div class="col-md-3">
        <div class="row presenter-cards">

          <?php
          include('include/presenter-cards.php');
          ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- content -->
<?php
include('include/footer.php');
?>
