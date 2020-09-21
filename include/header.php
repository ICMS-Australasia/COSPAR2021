<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script defer src="https://temp.icmsaust.com.au/fa/all.js"></script>
        <link rel="stylesheet" href="style.css">
        <?php if ($cospark == true) { ?>
        <script language="javascript" type="text/javascript" src="starry-night/libraries/p5.min.js"></script>
        <script language="javascript" type="text/javascript" src="starry-night/Starry_night.js"></script>
        <?php } ?>
        <script src="articles.js" type="text/javascript"></script>
        <title>

          <?php
  if ($home !== true) {
      echo $title . " | 43rd COSPAR Scientific Assembly";
  } else {
      echo "43rd COSPAR Scientific Assembly";
  } ?>

        </title>
		 <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-75161696-32"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments)
            };
            gtag('js', new Date());
            gtag('config', 'UA-75161696-32');
        </script>

    </head>
    <body>
        <!-- header -->
        <div class="header">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col text-left text-md-right">
                            <a href="https://cosparhq.cnes.fr/" target="_blank">cosparhq.cnes.fr</a>
                            <a href="https://www.cospar-assembly.org/" target="_blank">cospar-assembly.org</a>
                            <a href="https://icmsaust.eventsair.com/cospar-2021/expressionofinterest" target="_blank">Join the mailing list</a>
                            <a href="contact-us.php">Contact us</a>
                            <!--a href="#" target="_blank" class="nounderline">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" target="_blank" class="nounderline">
                                <i class="fab fa-twitter"></i>
                            </a-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="logos">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-7 pt-4 mt-2"><a href="index.php"><img src="img/logo.png" width="620" class="img-fluid"></a></div>
                        <div class="col-md-4 pt-4 mt-2">
                            <img src="img/dates.png" width="340" class="mb-3 mb-md-2 img-fluid">
                            <!-- Countdown timer -->
                            <div id="countdown" class="mb-3 mb-md-0"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu mb-3 mt-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-0 ml-md-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index"><i class="fas fa-home"></i></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Invitation
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="invitation">From the Desk of the Chair</a>
                                                <a class="dropdown-item" href="committee">Committee</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Attending
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="registration">Registration</a>

                                                <a class="dropdown-item" href="accommodation.php">Accommodation</a>
                                                <a class="dropdown-item" href="social-functions.php">Social Functions</a>
                                                <a class="dropdown-item" href="visa-information.php">Visa Information</a>
												<a class="dropdown-item" href="media-centre.php">Media Centre</a>
                                                <a class="dropdown-item" href="privacy-policy.php">Privacy Policy</a>
                                                <a class="dropdown-item" href="faqs.php">FAQs</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Program
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="abstracts.php">Abstracts</a>
                                                <a class="dropdown-item" href="program.php">Program Overview</a>
                                                <a class="dropdown-item" href="speakers.php">Speakers</a>
                                                <a class="dropdown-item" href="cross-disciplinary-workshops.php">Cross-disciplinary Workshops</a>
                                                <a class="dropdown-item" href="koala-competition.php">Koala Competition</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="program-glance">Full Program</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sponsorship-and-exhibition.php">Sponsorship</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="venue.php">Venue</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Australia
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="around-australia.php">Around Australia</a>
                                                <a class="dropdown-item" href="observatories.php">Observatories</a>
                                                <a class="dropdown-item" href="helpful-information.php">Helpful Information</a>
                                                <a class="dropdown-item" href="visa-information.php">Visa Information</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sydney
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="must-dos-in-sydney.php">Must do's in Sydney</a>
                                                <a class="dropdown-item" href="dining-on-a-budget.php">Dining on a budget</a>
                                                <a class="dropdown-item" href="just-outside-sydney.php">Just outside Sydney</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link cospark-link" href="stem#cospark"><img src="img/cospark/menu-cospark.png" width="15">COSPAR-K</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submenu">
                <div class="container">
                    <div class="row">
                        <a href="participation.php" class="col-md-4">
                            <div class="icon row align-items-center justify-content-md-center">
                                <div class="icon-image">
                                    <i class="fal fa-address-card circle-icon"></i>
                                </div>
                                <div class="icon-text">Participation</div>
                            </div>
                        </a>
                        <a href="destination.php" class="col-md-4">
                            <div class="icon row align-items-center justify-content-md-center">
                                <div class="icon-image">
                                    <i class="fal fa-map-marked-alt circle-icon"></i>
                                </div>
                                <div class="icon-text">Destination</div>
                            </div>
                        </a>
                        <a href="things-to-see-and-do.php" class="col-md-4">
                            <div class="icon row align-items-center justify-content-md-center">
                                <div class="icon-image">
                                    <i class="fal fa-chart-network circle-icon"></i>
                                </div>
                                <div class="icon-text">Things to see & do</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header -->
