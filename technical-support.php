<?php
$title = 'Technical support';
include('include/header.php');
?>
<!-- title -->
<div class="title">
  <div class="container">
    <div class="row py-5">
      <div class="col py-4">
        <h1><?php echo $title; ?></h1>
        <!--div class="sub">
          <a href="#" target="_blank" class="presenter-pdf"><img src="https://via.placeholder.com/100x125" alt="">Download <?php echo $title; ?> PDF (64kb)</a>
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

        <h2 class=" mb-3">Technical support for virtual participants in COSPAR-2021-Hybrid.</h2>

        <p>The Professional Conference Organiser (PCO) for COSPAR-2021-Hybrid is ICMS Australasia (ICMSA). Our Digital Event Team will implement, manage and execute the complex and comprehensive communications systems that will be employed for COSPAR-2021-Hybrid.  We are here to help you every step of the way.</p>

        <h2 class="mt-5 mb-3">Presentation Check-List</h2>


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
            <td>
              <strong>How is content to be recorded</strong>
            </td>
            <td>
              Via Zoom
            </td>
          </tr>
          <tr>
            <td>
              <strong>How will content be supplied</strong>
            </td>
            <td>
              MP4 video files via YouTube
            </td>
          </tr>
          <tr>
            <td>
              <strong>How do I upload my files?</strong>
            </td>
            <td>
              Via Dropbox*
            </td>
          </tr>
          <tr>
            <td>
              <strong>Short Summary Presentation</strong>
            </td>
            <td>
              3 minutes for a 15-minute contributed talk<br> 3 minutes for a 20-minute solicited talk<br> 6 minutes for a 30-minute solicited review talk
            </td>
          </tr>
          <tr>
            <td>
              <strong>Duration of full length presentations as per program</strong>
            </td>
            <td>
              15-minute contributed talk<br> 20-minute and 30-minute solicited review talks
            </td>
          </tr>
          <tr>
            <td>
              <strong>Presenter deadline to upload </strong>
            </td>
            <td>
              30 November 2020
            </td>
          </tr>
          <tr>
            <td>
              <strong>Registration deadline</strong>
            </td>
            <td>
              30 November 2020
            </td>
          </tr>
          <tr>
            <td>
              <strong>Video File Specs</strong>
            </td>
            <td>
              <ul>
                <li>Video Dimensions: 1280x720</li>
                <li>Video Bitrate: 1600Kbps</li>
                <li>Video File Type: MP4</li>
                <li>Video Codec: H.264</li>
                <li>Video FPS: 30</li>
                <li>Audio Bitrate: 128Kbps</li>
                <li>Audio Specifications: 44100Hz</li>
                <li>Audio Codec: AAC</li>
              </ul>
              &nbsp;
              It is really important to follow the specifications, otherwise the file may not be useable.
            </td>
          </tr>
          <tr>
            <td>
              <strong>Dropbox System Requirements *</strong>
            </td>
            <td>
              Upload and save your files to dropbox so they can be sent.  Your files automatically save after you upload them. Your Dropbox folder acts as cloud storage, allowing access from anywhere in the world.  Take the file from its original
                location, select the file and drag it to your Dropbox folder.
            </td>
          </tr>
          <tr>
            <td>
              <strong>Supporting documents you should review</strong>
            </td>
            <td>
              <ul>
                <li>Framing, lighting and recording guidelines</li>
                <li>Platform Requirements: Hardware and Operations System Configurations for Attendees </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>
              <strong>Checklist</strong>
            </td>
            <td>
              <ul>
                <li>Speaker photo and biography</li>
                <li>ZARM Abstract acceptance letter</li>
                <li>Abstract (in word) or transcript </li>
                <li>Pre-recorded short video presentation – 3, 4.5 or 6 minutes (Video uploaded to YouTube)</li>
                <li>Transcript for pre-prepared presentations in Word document</li>
                <li>Full length pre-recorded video presentation – as per confirmed timings of program</li>
                <li>PowerPoint presentation file (slides)</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>
              <strong>Contact Us</strong>
            </td>
            <td>
              <strong>Speaker Enquiries</strong><br> For all enquiries regarding presentations<br> Emma McPartlan<br> Email: <a href="mailto:speaker@cospar2021.org">speaker@cospar2021.org</a>
            </td>
          </tr>
        </table>



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
