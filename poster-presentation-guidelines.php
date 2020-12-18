<?php
$title = 'Poster presentation guidelines';
include('include/header.php');
?>
<!-- title -->
<div class="title">
  <div class="container">
    <div class="row py-5">
      <div class="col py-4">
        <h1><?php echo $title; ?></h1>
        <!--div class="sub">
          <a href="" target="_blank" class="presenter-pdf"><img src="" alt="">Download <?php echo $title; ?> PDF</a>
        </div-->
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

        <h2 class="mb-3">Congratulations on being accepted to present at COSPAR-2021-HYBRID!</h2>

        <p>Please see below the following instructions for setting up, creating and submitting your Poster Presentation.</p>

        <h3 class="mt-3 mb-3">Author Guidelines</h3>

<p>Poster presenters are expected to submit a short summary video and PDF Poster for the Assembly. Only those submissions that accompany a paid registration will be included within the virtual platform.</p>
<p class="mb-5">Deadline for submission of the short summary video, and registration for presenters, is <strong>now</strong>.</p>

<h3 class="mt-3 mb-3">Virtual Presentation Details</h3>

<p>All virtual presentations will be delivered <strong>via pre-recorded</strong> webcast and will be accessed and viewed via the COSPAR-2021-Hybrid Assembly virtual platform.</p>

<p>Please <a href="presenter-information">refer to the website</a> for suggested guidelines for presenting with a webcam- tips and best practices, and Framing & Lighting guidelines.</p>

<h3 class="mt-3 mb-3">Virtual Platform Preparation</h3>

<p>More specific information regarding presenter access and navigation within the COSPAR-2021-Hybrid platform as well as instructions on when to arrive at your session etc. will be sent to you in due course.</p>


<h3 class="mt-3 mb-3">Technical Summary</h3>

<table border="0" cellspacing="0" cellpadding="0" width="0" class="table">
  <tr>
    <td width="35%">
      <strong>Presentation source</strong>
    </td>
    <td>
      Webcam
    </td>
  </tr>
  <tr>
    <td><strong>How will content be supplied?</strong></td>
    <td>MP4 Video files</td>
  </tr>

  <tr>
    <td><strong>How do I upload my files?</strong></td>
    <td>Via Dropbox</td>
  </tr>

<tr>
  <td><strong>Short Summary Presentation</strong></td>
  <td>3 minutes for a poster presentation</td>
</tr>

<tr>
  <td><strong>Poster Format</strong></td>
  <td>A standard single screen PowerPoint (or equivalent) slide in poster size. In order to upload your designed poster, you will need to save your PowerPoint slide as a PDF</td>
</tr>

<tr>
  <td><strong>Presenter registration deadline</strong></td>
  <td>Due now</td>
</tr>

<tr>
  <td><strong>Early bird registration deadline</strong></td>
  <td>30 December 2020</td>
</tr>

</table>

<h2 class="mt-3 mb-3">Presentation FAQs</h2>

<h3 class="mt-3 mb-3">How long is my summary video?</h3>
<p>The length of each summary videos is 3 minutes for a poster presentation.</p>

<h3 class="mt-3 mb-3">How do I record my summary video?</h3>
<p>You will need a laptop with a webcam or desktop computer. A detailed presentation filming sheet can be found on the <a href="presenter-information">COSPAR-2021-Hybrid website</a>.</p>

<h3 class="mt-3 mb-3">What are the size requirements for my PDF Poster?</h3>
<p>Posters are to be a single slide PowerPoint (or equivalent) in Poster size.</p>

<p>Specifications for size setting are:</p>
  <ul>
    <li>84.1cms - Width</li>
    <li>118.9cms - Height</li>
  </ul>

<h3 class="mt-3 mb-3">What else do I need to include?</h3>
<p>As an accepted Poster presenter, you are required to submit the below files:</p>
<ul>
  <li>Short summary video MP4</li>
  <li>Speaker biography – short 100-word maximum</li>
  <li>Speaker photo – high resolution (min 600 dpi)</li>
  <li>ZARM Acceptance Letter</li>
  <li>Copy of Abstract (in a Word Doc)</li>
  <li>Poster PDF</li>
</ul>

<h3 class="mt-3 mb-3">What do I do with my files once created?</h3>
<p>Presenters must upload and save their files to a file sharing service (Dropbox or WeTransfer or equivalent) so they can be sent through the presentation portal.</p>

<p>Your Dropbox (or equivalent) folder acts as cloud storage, allowing access from anywhere in the world. Take the file from its original location, select the file, and drag it to your Dropbox folder.</p>

<h3 class="mt-3 mb-3">How do I name my files?</h3>
<p>Once your files are in Dropbox you should rename them to follow the File Naming Protocol:</p>
<ul>
  <li>Date of presentation</li>
  <li>COSPARid (Scientific event number as per acceptance letter)</li>
  <li>Presenter name</li>
  <li>File type</li>
</ul>

<p>For example,</p>
<ul>
  <li>Date of presentation: TUES2FEB</li>
  <li>COSPAR 2021 scientific event number (COSPARid): A3.1-6-21</li>
  <li>Presenter Name: JANEDOEFULLPRERECORDEDVIDEO</li>
  <li>The file name should look like this: TUES2FEB A3.1-6-21 JANEDOEFULLPRERECORDEDVIDEO</li>
</ul>

<h3 class="mt-3 mb-3">Where do I upload my files?</h3>
<p>Submissions are to be made through the COSPAR 2021 Presentation Portal using the below link:</p>

<a href="https://icmsaust.eventsair.com/cospar-2021/presenter-portal" class="button-main my-4" target="_blank">Presenter Portal</a>

<h3 class="mt-3 mb-3">When is the submission deadline?</h3>
<p>Presenters must submit their short summary video now.</p>
<p>They can then have until 30 December 2020, if necessary, to upload their full PDF Poster.</p>

<h3 class="mt-3 mb-3">For all enquiries regarding speaker papers, presentation formats, or presentation submissions:</h3>

<p>Emma McPartlan<br />
  <a href="mailto:speaker@cospar2021.org">speaker@cospar2021.org</a></p>





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
