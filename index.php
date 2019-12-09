<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://html5-templates.com/" />
    <title>IoT project</title>
    <meta
      name="description"
      content="Simplified Bootstrap template with sticky menu"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/sticky-menu.css" rel="stylesheet" />
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
          <a class="navbar-brand page-scroll" href="#page-top">Welcome</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="hidden">
              <a class="page-scroll" href="#page-top"></a>
            </li>
            <li>
              <a class="page-scroll" href="#about">About</a>
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
            <h3>Light:</h3>
            <p>&nbsp;</p>
            <div class="row">
              <button class="btn btn-lg btn-warning pushme-light with-color" id="trigger">
                LIGHT OFF
              </button>
              <div class="row"></div>
            </div>

            <p>&nbsp;</p>
            <h3>Fan:</h3>
            <p>&nbsp;</p>

            <div class="row">
              <button class="btn btn-lg btn-warning pushme-fan with-color" id="trigger2">
                FAN OFF
              </button>
              <div class="row"></div>
            </div>
            <p>&nbsp;</p>
            <div class="row">
              <span>
                <a class="btn btn-primary page-scroll" href="#about"
                  >Click to see below</a
                >
                <div class="row"></div
              ></span>
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
