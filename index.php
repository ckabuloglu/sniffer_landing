<?php

$_host = "localhost";
$_username = "root";
$_password = "fre_abRu4U";
$_dbname = "snifferLanding";

mysql_connect($_host, $_username, $_password) or die(mysql_error());
mysql_select_db($_dbname) or die (mysql_error());
mysql_set_charset('utf8');

if (isset($_POST['signup'])){

    $email = $_POST['email'];

    $sql = "INSERT INTO mail_list (email) VALUES ('$email') ";
    $query = mysql_query($sql);

    $message = "<div class='alert alert-success'>
                        <strong> THANK YOU </strong>
                    </div>";
}

include_once("analyticstracking.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sniffer GPS">
    <meta name="author" content="Can Kabuloglu">

    <title>Sniffer GPS</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <script src="https://use.fortawesome.com/d76bceb1.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/func.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-83049204-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body id="page-top" class="index">

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MDGD47"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDGD47');</script>
    <!-- End Google Tag Manager -->

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Sniffer GPS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#product">Product</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <video autoplay="" loop="" class="fillWidth fadeIn animated" id="video-background">
          <source src="video/movie.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading" style="media (min-width: 768px) {color: #414141;}"> Making the world a safer place for man's best friend</div></br></br></br></br></br>
                <h2 style="media (min-width: 768px) {color: #414141;}"> Sign up to receive information about becoming a beta tester! </h2>
                <?php echo $message; ?>
            <div> <form method="POST"> <input type="email" class="form" name="email" placeholder="Your Email"></div></br></br>
                <button type="submit" class="page-scroll btn btn-lg" name="signup"> Sign-Up </button>
            </form>
            </div>
        </div>
    </header>

    <!-- About Grid -->
    <section id="product" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What's Sniffer?</h2>
                    <h3 class="section-subheading text-muted">Learn all about our product</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 portfolio-item">
                    <img class="img-responsive" src="img/about/collar.png">
                </div>
                <div class="col-md-6 col-sm-12 portfolio-item">
                </br></br></br>
                    <p class="info"> The Sniffer GPS dog collar allows you to track your pet on any device, anywhere,
                    any time. Sniffer gives you piece of mind knowing that your dog is safe at home,
                    and if your dog somehow does get out, Sniffer alerts you, and allows you to track your dog
                    in real time. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="features" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <h3 class="section-subheading text-muted">Much more than a collar... </h3>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-12 col-md-4 feature-box">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Cross Platform</h4>
                    <p class="text-muted">You can track your best friend on your phone, tablet or laptop wherever, whenever you want.</p>
                </div>
                <div class="col-sm-12 col-md-4 feature-box">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-battery-full fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Long Battery Life</h4>
                    <p class="text-muted">Using different technologies, Sniffer makes sure your battery lasts as long as possible</p>
                </div>
                <div class="col-sm-12 col-md-4 feature-box">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tint fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Durable and IP68 Water Resistant</h4>
                    <p class="text-muted">Sniffer will not let you down even if your best friend runs away in woods, goes for a swim or rolls in mud.</p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-12 col-md-4 feature-box">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Wherever, Whenever...</h4>
                    <p class="text-muted">Sniffer allows you to track your dog, any time, anywhere, no matter where they may wonder.</p>
                </div>
                <div class="col-sm-12 col-md-4 feature-box">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-paw fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Self Recharging</h4>
                    <p class="text-muted">Sniffer uses your pet's endless energy to help power the collar. This makes sure the power is always on when you need Sniffer the most.</p>
                </div>
                <div class="col-sm-12 col-md-4 feature-box">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Sleek Design</h4>
                    <p class="text-muted">With its top-notch design and looks, Sniffer will make your best friend the most popular dog in your neighborhood. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us?</h2>
                    <h3 class="section-subheading text-muted">Get to know us a little bit</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 portfolio-item">
                </br>
                    <p class="info2"> The idea that started Sniffer GPS was conceived by Reid after he saw
                        his boss's GPS dog collar sitting on its charging cradle. Reid then brought the idea
                        before a class he was taking called Startup Lab. Co-founders, Austin and Can, joined Reid,
                        and the team collectively worked together over the course of the semester to do customer
                        discovery, and refine the idea. </p>
                    <p class="info2"> While working over the semester, the team saw the potential
                        for Sniffer GPS to become a full fledged startup. The team applied, and was accepted into two
                        programs at Georgia Tech designed to help students get their startups off the ground, Idea2Prototype,
                        and Startup Summer. </p>
                    <p class="info2">In January 2016 the Sniffer GPS team was awarded the Richard M. Cribb Innovation
                        scholarship for their performance in Startup Lab.</p>
                </div>
                <div class="col-md-6 col-sm-12 portfolio-item">
                    <img class="img-responsive" src="img/about/logo.png">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Awesome Team</h2>
                    <h3 class="section-subheading text-muted">Who made Sniffer possible.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/reid.jpg" class="img-responsive img-circle">
                        <h4>Reid Kersey</h4>
                        <p class="text-muted">CEO, Co-Founder</p>
                        <p> Reid is an innovative and  passionate entrepreneur who has had a lifelong dream to own his own company
                            and a fierce desire to build, design and engineer state of the art electronic products.  To help meld these
                            two passions together, Reid studied  everything he could find on electronics from an early age and attended Georgia Tech
                            where he studied Business Administration.  During his time at GA Tech, he lead the GA Tech Solar Racing  electrical
                            team where he honed his leadership skills.  He now guides the electronic design of our dog collar and is leading the
                            company to future success. </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.linkedin.com/in/reidkersey"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/austin.jpg" class="img-responsive img-circle">
                        <h4>Austin Morgan</h4>
                        <p class="text-muted">CTO, Co-Founder</p>
                        <p> Austin grew up outside of Atlanta and has enjoyed building and tinkering for as long as he can remember. Having his
                            heart set on engineering right out of high school, Austin attended the Georgia Institute of Technology, focusing heavily
                            on manufacturing processes and product design. Now after graduating, He is ready to hone and utilize his skills as a mechanical
                            engineer to pursue all new projects that come his way.  Austin currently handles the manufacture of all Sniffer products and is the
                            lead on designing a durable casing that can hold off even the roughest, rowdiest pooch. </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.linkedin.com/in/austinmm"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/can.jpg" class="img-responsive img-circle" alt="">
                        <h4>Can Kabuloglu</h4>
                        <p class="text-muted">CIO, Co-Founder</p>
                        <p> Born in Istanbul, Turkey, Can finished high school in Turkey and came to US for his undergraduate education. Being a
                            junior in Georgia Institute of Technology, he is majoring in Computer Engineering and minoring in Computer Science.
                            Besides coding and building, he enjoys playing the drums, cooking from different cuisines and sailing over the weekends.
                            In Spring 2016, he studied abroad in Georgia Tech's Lorraine, France campus in order to experience different cultures while
                            continuing his studies. </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.linkedin.com/in/can-kabuloglu"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center contact-us">
                    <h2 class="section-heading">Contact Us</h2>
                </div> </br></br>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 contact-box">
                                <h3> Want to tell us something? </h3></br>
                                <b> Email: </b> contact@sniffergps.com </br>
                                <b> Phone: </b> (678) 736-0899 </br></br>
                                <p> or </p> </br>
                                <p> start tracking your best friend <b><a href="https://app.sniffergps.com"> here! </a> <b/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Sniffer GPS 2016</span>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <script src="js/func.js"></script>
</body>

</html>
