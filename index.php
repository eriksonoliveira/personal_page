<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="I am Erikson Oliveira, a web developer who specializes in Front End development with javascript and this is my personal web page.">

  <!--  Custom CSS  -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <!--  Bootstrap V4.1.1  -->
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,500,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome-all.min.css">
  <link href="./vendor/devicons/css/devicons.min.css" rel="stylesheet">
  <title>Erikson Oliveira - Web developer</title>
</head>

<body>
  <nav class="menu menu-height">
    <span class="menu-logo menu-height">
      <span class="logo">Erikson Oliveira</span>
    </span>
    <span class="mobile-btn"></span>
    <div class="menu-nav menu-height mobile-menu">
      <ul>
        <li><a href="#header">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- <div id="body"> -->
  <main>
    <section id="header">
      <header class="header">
        <div id="header-title-wrapper" class="align-middle">
          <img src="./assets/img/me.JPG" class="round-image mx-auto" alt="Photo: Erikson Oliveira - Web developer" />
          <div id="header-title">Erikson Oliveira</div>
          <div id="header-subtitle">Hi, I'm a Web Developer who specializes<br> in Javascript development</div>
        </div>
      </header>

      <div class="header-background">
        <div class="header-img"></div>
      </div>

      <div class="header-scroll-trigger mb-3">
        <div class="scroll-trigger btn">
          <a href="#about">
            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </section>

    <section id="about" class="padding-y">
      <h2 class="text-center">About Me</h2>
      <img src="./assets/img/about_me.JPG" class="round-image mx-auto my-5" alt="About me" />
      <article class="about-text">
        <p>
          I'm a Full Stack developer who specializes in the development of web applications using PHP and Javascript languages.
        </p>

        <p>
          I started developing applications in 2016 while I was working as a meteorologist in Florianopolis, Brazil, and I realized that there were better ways to do the same work we were doing. I then decide to learn to code so I could build the tools that I had in my mind.
        </p>

        <p>
          Since then I became passionate about building tools that are simple to use and help people complete their tasks in a faster and more efficient way.
        </p>

        <p>
          When I'm not learning or working on a project, I'm usually spending time with my wife, at the gym, or playing video games.
        </p>
      </article>
    </section>

    <section id="projects" class="animate padding-y">
      <div class="projects-container">
        <h2 class="projects-title text-center mb-4">See some of my projects</h2>
        <div class="d-flex flex-wrap mx-auto">
          <div class="my-3 col-lg-4 col-md-6">
            <div class="proj-img d-flex justify-content-center">
              <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj01Modal">
                <span class="proj-name">Weather Database</span>
                <img class="img-responsive" src="./assets/img/proj-01.JPG" alt="Project Weather Database" />
              </div>
            </div>
          </div>
          <div class="my-3 col-lg-4 col-md-6">
            <div class="proj-img d-flex justify-content-center">
              <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj02Modal">
                <span class="proj-name">Local Weather</span>
                <img class="img-responsive" src="./assets/img/proj-02.JPG" alt="Project Weather App" />
              </div>
            </div>
          </div>
          <div class="my-3 col-lg-4 col-md-6">
            <div class="proj-img d-flex justify-content-center">
              <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj03Modal">
                <span class="proj-name">Reminder App</span>
                <img class="img-responsive" src="./assets/img/proj-03.JPG" alt="Project Reminder App" />
              </div>
            </div>
          </div>
          <div class="my-3 col-lg-4 col-md-6">
            <div class="proj-img d-flex justify-content-center">
              <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj04Modal">
                <span class="proj-name">Clock App</span>
                <img class="img-responsive" src="./assets/img/proj-04.JPG" alt="Project Clock App" />
              </div>
            </div>
          </div>
          <div class="my-3 col-lg-4 col-md-6">
            <div class="proj-img d-flex justify-content-center">
              <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj05Modal">
                <span class="proj-name">Weather Map</span>
                <img class="img-responsive" src="./assets/img/proj-05.JPG" alt="Project Weather Map" />
              </div>
            </div>
          </div>
          <div class="my-3 col-lg-4 col-md-6">
            <div class="proj-img d-flex justify-content-center">
              <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj06Modal">
                <span class="proj-name">Lyrics Finder App</span>
                <img class="img-responsive" src="./assets/img/proj-06-3.JPG" alt="Project Lyrics Finder App" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="skills" class="padding-y">
      <div class="container">
        <h2 class="skills-header mb-4 text-center">Skills</h2>
        <div>
          <h5 class="skills-subheader subheader-font-weight mb-3 text-center">Programming Languages &amp; Tools I Use</h5>
          <ul class="list-inline text-center">
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-html5"></i>
              <p class="skills-item-label">HTML5</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-css3"></i>
              <p class="skills-item-label">CSS3</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-javascript"></i>
              <p class="skills-item-label">Javascript</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-react"></i>
              <p class="skills-item-label">ReactJS</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-jquery"></i>
              <p class="skills-item-label">JQuery</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-php"></i>
              <p class="skills-item-label">PHP</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-bootstrap"></i>
              <p class="skills-item-label">Bootstrap</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-git"></i>
              <p class="skills-item-label">Git</p>
            </li>
            <li class="skills-item list-inline-item">
              <i class="skills-item-icon devicons devicons-npm"></i>
              <p class="skills-item-label">npm</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="contact" class="widget">
      <h2 id="cont-header" class="text-center">Contact Me</h2>
      <h5 class="cont-subheader subheader-font-weight text-center">I'd love to hear from you</h5>
      <div id="wrapper-cont-form" class="animate container mt-5">
        <form id="cont-form" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-field form-control" name="name">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="form-field form-control" name="email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" maxlength="500" class="form-field form-control" name="message"></textarea>
          </div>
          <input id="send-btn" class="btn" type="submit" value="SEND">
          <span class="spinner hide">
            <i class="fas fa-spinner fa-spin"></i>
          </span>
        </form>
      </div>
    </section>
  </main>

  <footer id="footer" class="text-white widget">
    <div class="text-center">Erikson Oliveira - 2018</div>

    <div class="social-links">
      <ul id="links-1">
        <li class="facebook"><a class="circle-icon" href="https://www.facebook.com/erikson.magno" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
        <li class="linkedin">
          <a class="circle-icon" href="https://www.linkedin.com/in/erikson-de-oliveira-8b428977/" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i>
          </a>
        </li>
        <li class="github">
          <a class="circle-icon" href="https://github.com/eriksonoliveira" target="_blank"><i class="fab fa-github" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- </div> -->

  <!-- Modal -->
  <!--  Proj01  -->
  <div class="modal fade" id="proj01Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel1">Weather Database</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="./assets/img/proj-01.JPG" alt="Proj 01" />
          <div class="middle">
            <a href="https://eriksonoliveira.com/weather_database" target="_blank">
              <button class="btn btn-dark view-demo-btn">View Demo</button>
            </a>
          </div>
          <article class="proj-desc">
            <p>
              This system was created to allow meteorologists at the weather office in the Santa Catarina State/Brazil to insert and manage data related to everyday weather events. The system was built with PHP, JS, MySQL, chart.js, and Bootstrap4.
            </p>
          </article>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Proj02  -->
  <div class="modal fade" id="proj02Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel2">Local Weather</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="./assets/img/proj-02.JPG" alt="Proj 02" />
          <div class="middle">
            <a href="https://eriksonoliveira.com/weather_app" target="_blank">
              <button class="btn btn-dark view-demo-btn">View Demo</button>
            </a>
          </div>
          <article class="proj-desc">
            <p>
              An app that shows the user's local weather information by making AJAX calls to OpenWeatherMap's API. The user can see current weather conditions such as temperature, wind, and cloudiness, as well as, 3 days forecast.
            </p>
          </article>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Proj03  -->
  <div class="modal fade" id="proj03Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel3">Reminder App</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="./assets/img/proj-03.JPG" alt="Proj 03" />
          <div class="middle">
            <a href="https://eriksonoliveira.com/remind_me" target="_blank">
              <button class="btn btn-dark view-demo-btn">View Demo</button>
            </a>
          </div>
          <article class="proj-desc">
            <p>
              A reminder app in which users can describe tasks and choose due dates and times. The app is written using the ReactJS framework and the Redux for state management.
            </p>
          </article>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Proj04  -->
  <div class="modal fade" id="proj04Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel4">Clock App</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="./assets/img/proj-04.JPG" alt="Proj 04" />
          <div class="middle">
            <a href="http://eriksonoliveira.com/Clock_app/" target="_blank">
              <button class="btn btn-dark view-demo-btn">View Demo</button>
            </a>
          </div>
          <article class="proj-desc">
            <p>
              A timer app built with ReactJS that includes a countdown to a specific date, that can be changed by the user, a timer with minutes and seconds and a stopwatch.
            </p>
          </article>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Proj05  -->
  <div class="modal fade" id="proj05Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel5">Weather Map</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="./assets/img/proj-05.JPG" alt="Proj 05" />
          <div class="middle">
            <a href="https://eriksonoliveira.com/weather_map" target="_blank">
              <button class="btn btn-dark view-demo-btn">View Demo</button>
            </a>
          </div>
          <article class="proj-desc">
            <p>
              This app was created to be used by the meteorologists at Epagri in their everyday weather forecast presentations in video. Temperature forecast data is received from an API and allows meteorologists to modify the values before they are inserted to the map using Google Maps Javascript API. The app contains 3 sections. The first shows satellite animation from Epagri/Ciram's website. The second is an iframe from windy.com. And the third is the map with the temperatures.
            </p>
          </article>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="proj06Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel6">Lyrics Finder App</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="./assets/img/proj-06-3.JPG" alt="Proj 06" />
          <div class="middle">
            <a href="http://lyrics-finder-eriksonoliveira.herokuapp.com/" target="_blank">
              <button class="btn btn-dark view-demo-btn">View Demo</button>
            </a>
          </div>
          <article class="proj-desc">
            <p>
              A ReactJS app where users can search for lyrics. If the song can be found in the Spotify database, the user can also play the song while reads the lyrics.
            </p>
          </article>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Email alert  -->
  <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="confirmationMessage" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body" id="confirmationMessage">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Jquery  -->
  <script src="./vendor/jquery/jquery.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
  <!--  Bootstrap JS  -->
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--  Custom JS  -->
  <script src="./assets/js/script.js"></script>
</body>

</html>
