<?php
if ($home == true) {
?>
<!-- cards -->
<div class="cards">
    <div class="container">
        <div class="row pt-5">
            <a href="participation.php" class="col-md-4 pb-5">
                <div class="card">
                    <i class="fal fa-address-card circle-icon"></i>
                    <img class="img-fluid" src="img/tiles/participation.jpg">
                    <div class="card-body p-4">
                        <h3 class="card-title">Participation</h3>
                        <p class="card-text">We promise it will be worth the journey</p>
                    </div>
                </div>
            </a>
            <a href="destination.php" class="col-md-4 pb-5">
                <div class="card">
                    <i class="fal fa-map-marked-alt circle-icon"></i>
                    <img class="img-fluid" src="img/tiles/destination.jpg">
                    <div class="card-body p-4">
                        <h3 class="card-title">Destination</h3>
                        <p class="card-text">A bucket list opportunity to visit Australia
                        </p>
                    </div>
                </div>
            </a>
            <a href="things-to-see-and-do.php" class="col-md-4 pb-5">
                <div class="card">
                    <i class="fal fa-chart-network circle-icon"></i>
                    <img class="card-img-top" src="img/tiles/things2.jpg">
                    <div class="card-body p-4">
                        <h3 class="card-title">Things to see & do</h3>
                        <p class="card-text">Science meets lifestyle.  Your free time well spent</p>
                    </div>
                </div>
            </a>
            <a href="koala-competition.php" class="col-md-4 pb-5">
                <div class="card">
                    <i class="fal fa-camera-alt circle-icon"></i>
                    <img class="img-fluid" src="img/tiles/koala.jpg">
                    <div class="card-body p-4">
                        <h3 class="card-title">Koala Competition</h3>
                        <p class="card-text">Win a free registration and five nights’ accommodation</p>
                    </div>
                </div>
            </a>
            <a href="observatories.php" class="col-md-4 pb-5">
                <div class="card">
                    <i class="fal fa-meteor circle-icon"></i>
                    <img class="img-fluid" src="img/tiles/parkes.jpg">
                    <div class="card-body p-4">
                        <h3 class="card-title">Observatories</h3>
                        <p class="card-text">Continue the education journey and go regional
                        </p>
                    </div>
                </div>
            </a>
            <a href="stem.php" class="col-md-4 pb-5">
                <div class="card">
                    <i class="fal fa-satellite circle-icon"></i>
                    <img class="card-img-top" src="img/tiles/stem.jpg">
                    <div class="card-body p-4">
                        <h3 class="card-title">STEM COSPAR 2021</h3>
                        <p class="card-text">When the nation celebrates science throughout the country</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- cards -->
<?php } ?>
<?php
if ($home == true or $title == 'Venue') {
?>
<!-- map -->
<div class="map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.551044805421!2d151.19762071574533!3d-33.875459426837025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae38ab9a3ff3%3A0x19fc67061ce45a9!2sICC+Sydney!5e0!3m2!1sen!2sau!4v1560924660245!5m2!1sen!2sau" width="100%" height="375" frameborder="0" style="border:0; margin: 0; padding: 0; border: 0; display: block;" allowfullscreen></iframe>

</div>
<!-- map -->
<?php } ?>

<?php if ($cospark != true) {?>
<!-- eoi -->
<div class="eoi">
    <div class="container">
        <div class="row py-5 align-items-center">
            <div class="col-md-6">
                <h4>Keep up to date</h4>
                <span>If you would like to <strong>receive updates and information on the progress of COSPAR 2021</strong> which will be held in Sydney, please fill in details and select your interest for the conference.
                </span>
            </div>
            <div class="col-md-6">
                <a href="https://icmsaust.eventsair.com/cospar-2021/expressionofinterest" target="_blank" class="my-3">
                    <i class="far fa-envelope"></i>Join the mailing list</a>
            </div>
        </div>
    </div>
</div>
<!-- eoi -->
<!-- footer -->
<div class="footer">
    <div class="container py-2">
        <div class="row pb-4">
            <div class="col-md pt-4">
                <h4 class="mb-3">43rd COSPAR Scientific Assembly</h4>
                <p>COSPAR's objectives are to promote on an international level scientific research in space, with emphasis on the exchange of results, information and opinions, and to provide a forum, open to all scientists, for the discussion of problems that may
                    affect scientific space research.</p>
                <p>
                    These objectives are achieved through the organization of Scientific Assemblies, publications and other means.</p>

					<p class=mb-0><strong>COSPAR 2021 are grateful for the beautiful imagery and film on the site provided by:</strong></p>
<ul class="mt-2">
<li>Destination NSW</li>
<li>Tourism Australia</li>
<li>Wayne England – CSIRO Parkes</li>
<li>Josselin Cornou – Sydney Under the Milky Way</li>
<li>UNSW at Canberra – Creative Media Unit</li>
<li>Stefan Daniljchenko – Photographer at Large</li>
</ul>

            </div>
            <div class="col-md-4 pt-4 px-md-5 list">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <h4 class="mb-3">Participation</h4>
                        <a href="registration.php">Registration</a>
                        <a href="program.php">Program Overview</a>
                         <a href="speakers.php">Speakers</a>
                          <a href="preliminary-program.php">Preliminary Program</a>
                        <a href="koala-competition.php">Koala Competition</a>
                        <a href="accommodation.php">Accommodation</a>
                        <a href="visa-information.php">Visa information</a>
                        <a href="sponsorship-and-exhibition.php">Sponsorship & Exhibition</a>
                    </div>
                    <div class="col-md-12 mb-2">
                        <h4 class="mb-3">Destination</h4>
                        <a href="venue.php">Venue</a>
                        <a href="around-australia.php">Around Australia</a>
                        <a href="just-outside-sydney.php">Just outside Sydney</a>
                        <a href="helpful-information.php">Helpful Information</a>
                    </div>
                    <div class="col-md-12 mb-2">
                        <h4 class="mb-3">Things to see & do</h4>
                        <a href="must-dos-in-sydney.php">Must do's in Sydney</a>
                        <a href="dining-on-a-budget.php">Dining on a budget</a>
                        <a href="observatories.php">Observatories</a>
                        <a href="stem.php">STEM COSPAR 2021</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 pt-4">
                <h4 class="mb-3">COSPAR 2021 Secretariat</h4>
                <h5>General Enquiries</h5>
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <p>
                            <strong>Emma Bowyer</strong>
                            Managing Director<br>
                            <a href="mailto:director@cospar2021.org">director@cospar2021.org</a>
                        </p>
                    </div>
                    <div class="col-md-6 mb-1">
                        <p>
                            <strong>Selina Moscatt</strong>
                            Director Conferences<br>
                            <a href="mailto:enquiries@cospar2021.org">enquiries@cospar2021.org</a>
                        </p>
                    </div>
                    <div class="col-md-6 mb-1">
                        <h5>Sponsorship & Exhibitions</h5>
                        <p>
                            <strong>Emma Bowyer</strong>
                            <a href="mailto:sponsorship@cospar2021.org">sponsorship@cospar2021.org</a>
                        </p>
                    </div>
                    <div class="col-md-6 mb-1">
                        <h5>Marketing & Communication</h5>
                        <p>
                            <strong>Suellen Holland</strong>
                            <a href="mailto:marketing@cospar2021.org">marketing@cospar2021.org</a>
                        </p>
                    </div>
                    <div class="col-md-6 mb-1">
                        <h5>Accommodation</h5>
                        <p>
                            <strong>Adriane Pinto</strong>
                            <a href="mailto:accommodation@cospar2021.org">accommodation@cospar2021.org</a>
                        </p>
                    </div>
                    <div class="col-md-6 mb-1">
                        <h5>Registration</h5>
                        <p>
                            <strong>Jessica Moebus</strong>
                            <a href="mailto:registration@cospar2021.org">registration@cospar2021.org</a>
                        </p>
                    </div>
                </div>
                <p class="mt-2"><strong><a href="contact-us.php">See full Contact Information</a></strong></p>
				<p><a href="privacy-policy.php">
                    <strong>Privacy Policy</strong>
                </a></p>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php } ?>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php if ($cospark==true || $home == true){ ?>

  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 28, 2021 09:00:00").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var years = Math.floor(distance / (1000 * 60 * 60 * 24) / 365);
    var days = Math.floor(distance / (1000 * 60 * 60 * 24)) - years * 365;
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("countdown").innerHTML = days + " Days to COSPAR 2021 ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "";
    }
  }, 1000);
  </script>
<?php } ?>
</body>
</html>
