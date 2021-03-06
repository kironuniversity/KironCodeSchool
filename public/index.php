<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Kiron CodeSchool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="icon" type="image/png" href="/img/favicon/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">

    <meta name="keywords" content="Education,Integration,refugee,help,job"/>
    <meta name="description" content="Kiron CodeSchool is a Brussels based startup education program. We work with companies to educate refugees in software development and help them find jobs."/>


    <meta property="og:type"      content="website">
    <meta property="og:title"     content="Teaching Software Development for Integration" />
    <meta property="og:site_name" content="Kiron CodeSchool" />
    <meta property="og:url"       content="https://codeschool.kiron.ngo">
    <meta property="og:image"     content="https://codeschool.kiron.ngo/img/fb_1.png?t=12345?" />
    <meta property="fb:app_id"    content="937824876298597"/>
    <meta property="og:description" content="Kiron CodeSchool is a professional education program that helps refugees' integration by transforming them into successful software developers">

    <link href="css/themify-icons.css"                rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css"                rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.min.css?version=asdf"   rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme.css?version=asdf’"          rel="stylesheet" type="text/css" media="all" />
    <link href="css/share.css"                        rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css?version=asdf1"         rel="stylesheet" type="text/css" media="all" />

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700" rel="stylesheet" type="text/css">
    <link href="css/font-oswald.css" rel="stylesheet" type="text/css">

  </head>



  <body class="boxed-layout">
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '937824876298597',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php include('navbar.html'); ?>


      <div style="position: fixed; top: 25vh; left: 2vw; z-index: 1000">
        <div  class="fb-like" data-share="true" data-width="450" data-show-faces="true" data-layout="box_count"> </div>
      </div>

    <div class="intro-header">
      <div class="intro-super"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="intro-message">
              <h1 class="mb-xs-16 ">Kiron CodeSchool: Bootstrap your new life now</h1>
              <p class="lead mb40">We help refugees' integration by transforming them into successful software developers</p>
              <div class="row">
                <a id="" class="btn btn-lg subscribe-button text-center" href="/apply"> Apply </a>
              </div>
              <div class="row">
                <a id="donate-button" class="btn btn-lg subscribe-button text-center" href="mailto:codeschool@kiron.ngo"> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-container">
      <?php include('./index/meetsies.html'); ?>
      <section id="The Program" class="pb64 pb-xs-40">
        <div id="The Program" class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h4 class="uppercase mb16">The Program</h4>
              <p class="lead mb64">
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="feature feature-2 filled text-center">
                <div class="text-center">
                  <i class="fa fa-university icon-sm"></i>
                  <h5 class="uppercase">Learn</h5>
                </div>
                <p>
                  By participating you will be trained by our partners Udacity and CareerFoundry in state of the art programming curricula with one-on-one mentoring.
                </p>
              </div>

            </div>
            <div class="col-sm-4">
              <div class="feature feature-2 filled text-center">
                <div class="text-center">
                  <i class="fa fa-cogs icon-sm"></i>
                  <h5 class="uppercase">Participate</h5>
                </div>
                <p>Now that you have skills you can put them to use by working on real projects in collaboration with local startups.</p>
              </div>

            </div>
            <div class="col-sm-4">
              <div class="feature feature-2 filled text-center">
                <div class="text-center">
                  <i class="fa fa-user icon-sm"></i>
                  <h5 class="uppercase">get a job</h5>
                </div>
                <p>
                  Now you are hot goods, skilled software developers are highly required and get over the average salaries in any market.</p>
              </div>

            </div>
          </div>

        </div>

      </section>

      <?php include('./index/team.html'); ?>
      <section id="timeline" class="pb64 pb-xs-40">
        <div id="theProgram" class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h4 class="uppercase mb16">Your Path</h4>
              <p class="lead mb64">
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-24 col-sm-6 col-xm-12">
              <div class="feature feature-2 filled text-center timeline-box">
                <div class="text-center timeline-head">
                  <div class="timeline-logo rocket timeline-logo-icon"></div>
                  <h5 class="timeline-title">Apply</h5>
                  <p class="path_time"></p>
                </div>
                <p class="text-justify p-x-1 timeline-text">
                  By applying we will assess your experience and needs. We will find the best way to introduce you into the program: like which track better suits you and how can you take advantage of the large range of services already offered to Kiron students.
                </p>
              </div>
            </div>

            <div class="col-md-2 col-md-24 col-sm-6 col-xm-12 ">
              <div class="feature feature-2 filled text-center timeline-box">
                <div class="text-center timeline-head">
                  <div class="timeline-logo class  timeline-logo-icon"></div>
                  <h5 class="timeline-title">Study</h5>
                  <p class="path_time text-center background-blue">
                    4 months
                  </p>
                </div>
                <p class="text-justify timeline-text">
                  You will follow the courses online and meet with our mentors a few times per week to keep you motivated and speed up your learning. Studying online allows you to proceed at your own pace and to tailor the program around you and not other way around.
                </p>
              </div>

            </div>
            <div class="col-md-2 col-md-24 col-sm-6 col-xm-12">
              <div class="feature feature-2 filled text-center timeline-box">
                <div class="text-center timeline-head">
                  <div class="timeline-logo project  timeline-logo-icon"></div>
                  <h5 class="timeline-title">project</h5>
                  <p class="path_time text-center background-blue">
                    4 months
                  </p>
                </div>
                <p class="text-justify timeline-text">
                  Congratulations, now you know how to code. But there is still some way to go! It is time to prove what you have learned and to sharpen your skills by developing an app or website alone or with others. If you like it you can even enter <a href="http://www.kironventures.com" target="_blank">KironVentures</a> and start your own company.
                </p>
              </div>

            </div>
            <div class="col-md-2 col-md-24 col-sm-6 col-xm-12">
              <div class="feature feature-2 filled text-center timeline-box">
                <div class="text-center timeline-head">
                  <div class="timeline-logo intership timeline-logo-icon"></div>
                  <h5 class="timeline-title ">Internship</h5>
                  <p class="path_time text-center background-blue">
                    2 months
                  </p>
                </div>
                <p class="text-justify timeline-text">
                  It is time to face the real world and to become experienced developers. What better environment than in real companies and with experienced professionals? This phase allows you to do an internship in a growing startup or a mature company we select for you.
                </p>
              </div>

            </div>
            <div class="col-md-2 col-md-24 col-sm-6 col-xm-12">
              <div class="feature feature-2 filled text-center timeline-box">
                <div class="text-center timeline-head">
                  <div class="timeline-logo job  timeline-logo-icon"></div>
                  <h5 class="timeline-title"> Get a job </h5>
                  <p class="path_time"></p>
                </div>
                <p class="text-justify timeline-text">
                  Now we say goodbye. Many of you might be offered positions where you did your internships. For the rest we will work hard with you to find you a job that will make you happy and secure for the days to come.
                </p>
              </div>

            </div>
          </div>

        </div>

      </section>

      <section id="Contact" class="image-square left blue_back">
        <div class="col-md-6 image">
          <div style="background-color: transparent; background-image: url(&quot;img/guy.jpg&quot;); background-repeat: repeat; background-attachment: scroll; background-position: initial; background-clip: border-box; background-origin: padding-box; background-size: auto auto;"
          class="background-image-holder fadeIn">
            <img style="display: none;" alt="image" class="background-image" src="img/guy.jpg">
          </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content white_text">
          <h3 class="uppercase white_text">Want to Help
            <spam style="font-size: 110%">?</spam>
          </h3>
          <h3 class="uppercase white_text">Get In Touch!</h3>
          <h4 class="white_text" style="margin-bottom: 0">
            If you want to become a mentor, volunteer or donate laptops, space or WiFi contact us at</h4>
          <a style="font-size: 16px" href: "mailto:codeschool@kiron.ngo">codeschool@kiron.ngo</a>
          <h4></h4>
          <h4 class="white_text">
            If you want to donate:
          </h4>
          <a id="subscribe-button" class="btn btn-primary white_text" target="_blank" href="https://www.betterplace.org/de/projects/36608-ermogliche-gefluchteten-ein-studium/donations/new#eft">DONATE</a>
        </div>
      </section>

      <?php include('./index/courses.html'); ?>


      <footer class="footer-2 bg-dark text-center-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <a href="#">
                <img class="image-xxs fade-half" alt="Pic" src="img/logo.png">
              </a>
            </div>

            <div class="col-sm-4 text-center">
              <span class="fade-half">
                © Copyright 2015 kiron - All Rights Reserved
              </span>
            </div>

            <div class="col-sm-4 text-right text-center-xs">
              <ul class="list-inline social-list">
                <li><a href="https://twitter.com/KironEducation"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="https://www.facebook.com/KironOpenHigherEducation"><i class="ti-facebook"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scripts.js"></script>

  </body>

</html>
