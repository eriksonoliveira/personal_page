<?PHP
require 'email.php';

$alert = '';

if(isset($_POST['name']) && !empty($_POST['name'])) {
  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $message = addslashes($_POST['message']);

  if(!empty($name) && !empty($email) && !empty($message)) {

    //Create an instance of Email() Class and run sendMessage Method
    $e = new Email();
    if($e->sendMessage($name, $email, $message)) {
      $alert = "Your message has been sent successfully";
    } else {
      $alert = "Unable to send. Please try again.";
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--  Custom CSS  -->
    <link rel="stylesheet" href="css/style.css"/>
    <!--  Bootstrap V4.1.1  -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,500,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="./vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <title>Erikson Oliveira - Web developer</title>
  </head>
  <body>

    <header class="menu menu-height">
      <span class="menu-logo menu-height">
        <span class="logo">Erikson Oliveira</span>
      </span>
      <span class="mobile-btn"></span>
      <nav class="menu-nav menu-height mobile-menu">
        <ul>
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    <div id="body">
      <section id="header">
        <div class="header-inner">
          <div id="header-title-wrapper" class="align-middle">
            <div class="">
              <img src="img/me.JPG" class="round-image mx-auto"/>
            </div>
            <div id="header-title">Erikson Oliveira</div>
            <div id="header-subtitle">Hi, I'm a junior Web Developer who specializes<br> in PHP and Javascript development</div>
          </div>
        </div>

        <div class="header-background">
          <div id="img-3" class="header-img">
          </div>
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
        <div class="container">
          <h2 class="text-center">About Me</h2>
          <div class="">
            <img src="img/about_me.JPG" class="round-image mx-auto my-3"/>
          </div>
          <div>
            <p>I'm a Full Stack developer who specializes in the development of web applications using PHP and Javascript languages.</p>

            <p>I started developing applications in 2016 while I was working as a meteorologist in Florianopolis, Brazil, and I realized that there were better ways to do the same work we were doing. I then decide to learn to code so I could build the tools that I had in my mind.</p>

            <p>Since then I became passionate about building tools that are simple to use and help people complete their tasks in a faster and more efficient way.</p>

            <p>When I'm not learning or working on a project, I'm usually spending time with my wife, at the gym, or playing video games.</p>
          </div>
        </div>
      </section>

      <section id="projects" class="animate">
        <div id="projects-inner">
          <h2 id="proj-header" class="text-center">See some of my projects</h2>
          <div class="row" style="margin: auto;">
            <div class="my-3 col-lg-4">
              <div class="proj-img d-flex justify-content-center">
                <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj01Modal">
                  <span class="proj-name">Weather Database</span>
                  <img class="img-responsive" src="./img/proj-01.JPG" />
                </div>
              </div>
              <div id="proj-desc" class="widget-desc"><p>This system was created to allow meteorologists at the weather office in the Santa Catarina State/Brazil to insert and manage data related to everyday weather events. The system was built with PHP, JS, MySQL, chart.js, and Bootstrap4.</p></div>
            </div>
            <div class="my-3 col-lg-4">
              <div class="proj-img d-flex justify-content-center">
                <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj02Modal">
                  <span class="proj-name">Local Weather</span>
                  <img class="img-responsive" src="./img/proj-02.JPG" />
                </div>
              </div>
              <div id="proj-desc" class="widget-desc">An app that shows the user's local weather information by making AJAX calls to OpenWeatherMap's API. The user can see current weather conditions such as temperature, wind, and cloudiness, as well as, 3 days forecast. </div>
            </div>
            <div class="my-3 col-lg-4">
              <div class="proj-img d-flex justify-content-center">
                <div class="proj-img-wrap d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#proj03Modal">
                  <span class="proj-name">Reminder App</span>
                  <img class="img-responsive" src="./img/proj-03.JPG" />
                </div>
              </div>
              <div id="proj-desc" class="widget-desc">A reminder app in which users can describe tasks and choose due dates and times. The app is written using the ReactJS framework and the Redux for state management. </div>
            </div>
          </div>
        </div>
      </section>
      <section id="skills" class="padding-y">
        <div class="container">
          <h2 class="skills-header text-center">Skills</h2>
          <div>
              <div class="skills-subheader mb-3 text-center">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons text-center">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-php"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-react"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-mysql"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-git"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-brackets"></i>
            </li>
          </ul>
          </div>
        </div>
      </section>
      <section id="contact" class="widget ">
        <h2 id="cont-header" class="text-center">Contact Me</h2>
        <h5 class="text-center">I'd love to hear from you</h5>
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
          </form>
          <div class="message-alert">
            <p><?PHP echo $alert; ?></p>
          </div>
        </div>
      </section>
      <section id="footer" class="text-white widget">
        <div class="about-desc widget-desc text-center">Erikson Oliveira - 2018</div>

        <div class="social-links">
          <ul id="links-1">
            <li class="facebook"><a  class="circle-icon" href="https://www.facebook.com/erikson.magno" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="linkedin"><a class="circle-icon" href="https://www.linkedin.com/in/erikson-de-oliveira-8b428977/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
</a></li>
            <li class="github"><a class="circle-icon" href="https://github.com/eriksonoliveira" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>
</a></li>
          </ul>
        </div>
      </section>
    </div>

    <!-- Modal -->
    <!--  Proj01  -->
    <div class="modal fade" id="proj01Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Weather Database</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-fluid" src="./img/proj-01.JPG"/>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--  Proj02  -->
    <div class="modal fade" id="proj02Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Local Weather</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-fluid" src="./img/proj-02.JPG"/>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--  Proj03  -->
    <div class="modal fade" id="proj03Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reminder App</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-fluid" src="./img/proj-03.JPG"/>

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
    <script src="js/script.js"></script>
  </body>
</html>
