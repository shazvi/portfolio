<?php
if($_SERVER["HTTP_HOST"] != "localhost") {
    if( !isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && ($_SERVER["HTTP_X_FORWARDED_PROTO"] != "https") ) {
        header('Location: https://shazvi.com');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/favicon.png">

    <title>Shazvi's Portfolio</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- MYWOT VERIFICATION -->
    <meta name="wot-verification" content="c31c14fa48c44a3df9ff"/>

    <!-- GA VERIFICATION -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-38573950-5', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Shazvi Ahmed</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <!--
                    <li class="page-scroll">
                        <a href="mailto:shazvi@outlook.com" target="_blank">Contact Me</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Shazvi Ahmed</span>
                        <hr class="star-light">
                        <span class="skills">Programmer - Tech Enthusiast</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/memento.png" class="img-responsive" style="height:;" alt="">
                    </a>
                </div> -->

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/azan.png" class="img-responsive" alt="">
                    </a>
                </div>
                
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/chrome.png" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Azan App Screen2.png" style="height:260px; width:360px;" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Hello world. My name is Shazvi Ahmed and I'm from Sri Lanka (that little island south of India, for those unfamiliar). I'm <?php echo(floor((time() - strtotime("1989-04-27"))/31556926));//current age?> years old and while I have a background in accounting, I'm a tech enthusiast at heart with a passion for programming. </p>
                </div>
                <div class="col-lg-4">
                    <p>I work as a software developer by profession and work on my own software projects in my spare time. I primarily focus on mobile development, web development and nodejs. That's about all there is to know about me.</p>
                </div>
                <!-- <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently.
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4 col-md-offset-2">
                        <h3>Talk to me</h3>
                        <p><a target="_blank" href="mailto:shazvi@outlook.com">shazvi@outlook.com</a> </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/shazvi.ahmed" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/117183548329016181720/posts" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/cybertox544" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://lk.linkedin.com/pub/shazvi-ahmed/a1/b0/a10" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="footer-col col-md-4">
                        <h3>Where to find me</h3>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2013-<?php echo date("Y");?> Shazvi Ahmed
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><a href="#!">Memento</a></h2>
                            <hr class="star-primary">
                            <a href="#!"><img src="img/portfolio/memento.png" class="img-responsive img-centered" alt=""></a>
                            <p>I started this site as part of my final project for <a target="_blank" href="https://www.edx.org/courses/HarvardX/CS50x/2012/about">CS50x</a> and have been maintaining it as a hobby ever since. It's a website written in php that saves notes, memos, reminders in an SQL database which also demonstrates the use of <a target="_blank" href="https://mailgun.com">Mailgun</a> and cron jobs to send the reminders as an email on the due date. The main page displays the notes, which can be stored in multiple notebooks and sorted by any category thanks to Kryogenix's <a target="_blank" href="http://www.kryogenix.org/code/browser/sorttable/">sorttable</a> plugin. The aesthetics are powered by <a target="_blank" href="http://getbootstrap.com/2.3.2/index.html">Twitter Bootstrap</a> and <a target="_blank" href="http://jqueryui.com">Jquery ui</a> while the calendar view allows the user to see all the notes/entries for the month in an organized table. Furthermore, the site also has an instant search feature that allows you to search through all your notes while typing or by tags, with <a target="_blank" href="http://bartaz.github.io/sandbox.js/jquery.highlight.html">text highlighting</a>. The standard title banners are generated by <a target="_blank" href="http://www.textfx.co/">Textfx</a> and <a target="_blank" href="http://neswork.com/logo-generator/twitter-font">Twitter Font</a>.</p>
                            <ul class="list-inline item-details">
                                <li>Frameworks:
                                    <strong>Bootstrap2, jQueryui, CodeIgniter</strong>
                                </li>
                                <li>Source:
                                    <strong><a href="https://github.com/shazvi/memento" target="_blank">Github</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><a href="https://azan.shazvi.com/" target="_blank">Azan</a></h2>
                            <hr class="star-primary">
                            <a href="https://azan.shazvi.com/" target="_blank"><img src="img/portfolio/azan.png" class="img-responsive img-centered" alt=""></a>

                            <p>A website that shows accurate Azan times based on hard-coded times. Currently only Colombo times are supported, but any city can be added by simply including a json file with time values. This site has also been turned into an app using the <a target="_blank" href="http://nwjs.io/">NW.js</a> framework.</p>
                            <ul class="list-inline item-details">
                                <li>Frameworks:
                                    <strong>Bootstrap2, Node.js, Node-Webkit</strong>
                                </li>
                                <li>Source:
                                    <strong><a href="https://github.com/shazvi/azan" target="_blank">Github</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><a target="_blank" href="https://chrome.shazvi.com">Chrome Bookmarks</a></h2>
                            <hr class="star-primary">
                            <a target="_blank" href="https://chrome.shazvi.com"><img src="img/portfolio/chrome.png" class="img-responsive img-centered" alt=""></a>
                            <p>Allows you to access your chrome bookmarks from anywhere in the world whether you're at a friend's computer, a net cafe, or halfway across the world. The site uses a custom API to access your chrome's 'Bookmark' file through cloud syncing. Details will be explaned on the site.</p>
                            <ul class="list-inline item-details">
                                <li>Frameworks:
                                    <strong>Bootstrap3</strong>
                                </li>
                                <li>Source:
                                    <strong><a href="https://github.com/shazvi/chrome" target="_blank">Github</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <a href="https://play.google.com/store/apps/details?id=com.shazvi.azan" target="_blank"><h2>Azan Notifier for Android</h2></a>
                            <hr class="star-primary">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.shazvi.azan"><img src="img/portfolio/Azan App Screen.png" class="img-responsive img-centered" alt=""></a>
                            <p>A minimal app that shows perfectly accurate Azan times based on hard-coded times. Currently only Colombo times are supported, but any city can be added by simply including a json file with time values.</p>
                            <ul class="list-inline item-details">
                                <li>Source:
                                    <strong><a href="https://github.com/shazvi/azan-android" target="_blank">Github</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
