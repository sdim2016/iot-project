<?php
require_once 'authenticate.php';
 ?>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://html5-templates.com/" />
    <title>IoT project</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/sticky-menu.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/custom.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-ex1-collapse"
          >
            <span class="sr-only">Toggle menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">IoT Smart Home Project</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="hidden">
              <a class="page-scroll" href="#page-top"></a>
            </li>
            <li>
              <a class="page-scroll" href="#about">About</a>
            </li>
            <li>
              <a class="page-scroll" href="logout.php">Logout</a>
            </li>
            <!--                     <li>
                        <a class="page-scroll" href="#whatwedo">What We Do</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> -->
          </ul>
        </div>
        <!-- .navbar-collapse -->
      </div>
      <!-- .container -->
    </nav>
    <!-- Welcome   -->
    <section id="welcome" class="welcome-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>IoT Project Dashboard</h1>
            <h4>
              This dashboard is a control panel for some real devices: fan,
              light, etc. You can open it on your phone too.
            </h4>
            <br/>
            <br/>
            <div class="container-fluid">
              <div class="row">
    <div class="col-md-3">
  <div class="card shadow mb-5">
    <div class="card-header py-3">
      <p class="text-primary m-0 font-weight-bold">Lamp controller</p>
    </div>
    <div class="card-body">
            <h3 class="imp">Light:</h3>
            <div class="row">
              <button class="btn btn-lg btn-danger pushme-light with-color" id="trigger">
                LIGHT OFF
              </button>
              <div class="row"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
    <div class="card shadow mb-5">
      <div class="card-header py-3">
        <p class="text-primary m-0 font-weight-bold">Fan controller</p>
      </div>
      <div class="card-body">
            <h3 class="imp">Fan:</h3>
            <div class="row">
              <button class="btn btn-lg btn-danger pushme-fan with-color" id="trigger2">
                FAN OFF
              </button>
              <div class="row"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
    <div class="card shadow mb-5">
      <div class="card-header py-3">
        <p class="text-primary m-0 font-weight-bold">Motion sensor</p>
      </div>
      <div class="card-body">
              <h4 class="imp">State:</h3>
              <h3 id="motion">Loading...</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3">
        <div class="card shadow mb-5">
          <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Temperature and humidity</p>
          </div>
          <div class="card-body">
                  <h4 class="imp">State:</h3>

                  </div>
                </div>
              </div>
  </div>
            <p>&nbsp;</p>
            <div class="row">
              <span> <br/>
                <a class="btn btn-primary page-scroll" href="#about">Click to see below</a>
                <div class="row"></div>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>About</h1>
            <p>&nbsp;</p>
            <h3>Made by:</h3>
            <h2>Dmitrii Slepnev</h2>
            <h2>Edward Brovkin</h2>
            <h2>Alexander Shchilkin</h2>
          </div>
        </div>
      </div>
    </section>

    <a id="back2Top" title="Back to top" href="#">&#10148;</a>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sticky-menu.js"></script>

    <!-- Buttons behavior-->
    <script src="js/button.js"></script>
  </body>
</html>
