<?php
$title = 'System configuration requirements';
include('include/header.php');
?>
<!-- title -->
<div class="title">
  <div class="container">
    <div class="row py-5">
      <div class="col py-4">
        <h1><?php echo $title; ?></h1>
        <div class="sub">
          <a href="pdfs/System-configuration-requirements.pdf" target="_blank" class="presenter-pdf"><img src="img/presenter-pdf-pre.jpg" alt="">Download <?php echo $title; ?> PDF</a>
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

        <h2 class="mb-3">Platform Requirements: Hardware and Operations System Configurations for Attendees</h2>


        <p>If you are using older or unsupported versions of Windows, Unix, or Mac operating systems, you may experience difficulty in viewing and/or listening to the webcast. Below are the recommended system configurations:</p>

<ul>
  <li>2.3 Ghz, dual core</li>
  <li>4GB RAM</li>
  <li>1600x900 screen resolution</li>
  <li>Windows 7 or higher</li>
  <li>Apple Mac OS X 10.11 or higher</li>
</ul>

<h2 class="mt-5 mb-3">Internet Connection for Speakers’</h2>
<p>Before you access the event, you should ensure that your browser is configured to stream media. All webcasts require a broadband connection. For video streaming, an internet connection of 300Kbps or higher is recommended. Learn more about recommended bitrates here.</p>
<p>If you experience connectivity issues and are connecting via a VPN, please close your VPN software and connect directly to the internet. Some VPNs, proxy servers and other security tools can interfere with your ability to connect to Studio.</p>

<h2 class="mt-5 mb-3">Cookies and JavaScript For Speakers</h2>
<p>In order to access the event, your computer must have cookies and JavaScript enabled. If your operating system currently does not have cookies or JavaScript enabled, contact your network administrator or reference the help links located on the registration page.</p>

<h3>To enable Cookies support when using Mozilla Firefox, complete the following steps:</h3>

<ol>
  <li>Run Firefox</li>
  <li>Click on "Tools" on the menu at the top</li>
  <li>Click on "Options"</li>
  <li>Click on the "Privacy" icon on the left column</li>
  <li>Select the checkbox "Accept Cookies from Sites"</li>
  <li>Click "OK"</li>
</ol>
 
<h2 class="mb-3">PowerPoint Slides</h2>
<h3>Miscellaneous Information</h3>

<ul>
  <li>The maximum file size for a PowerPoint upload is 300MB</li>
  <li>Hidden slides do convert and display in Studio</li>
  <li>PowerPoint Slides are HTML5</li>
  <li>PowerPoint Slides will automatically advance when the webcast starts if "Use Timings" is enabled and timings are saved on any slide</li>
</ul>

<p>("Transitions" Tab>Advance Slide>"After" is checked and there is a number of seconds entered).</p>


<p>
  <img src="img/system-config.png" class="img-fluid">
</p>



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
