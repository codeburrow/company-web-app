<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->e($title) ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();><?= $this->e($title) ?></a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>About</a>
        </li>
        <li>
            <a href="#services" onclick=$("#menu-close").click();>Night's Watch</a>
        </li>
        <li>
            <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
        </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <div id="header2">
            <h1><?= $this->e($title) ?></h1>
            <h3><?= $this->e($randomQuote) ?></h3>
            <br>
        </div>
        <br>
        <a href="#about" class="btn btn-default btn-lg"><strong>Find Out More</strong></a>
    </div>
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>We are coders by day, hackers by night. </h2>

                <p class="lead">Winter is coming | <a target="_blank"
                                                      href="https://github.com/Hub-IT">HubIT GitHub</a>.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2> Meet The Team</h2>
                <hr class="small">
                <div class="row">
                    <?php foreach ($users as $user): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?= $user->getAvatar() ?>" class="img-circle" style="width: 150px; height: 150px;"
                                     alt="Circular Image"/>
                                <h4>
                                    <strong><?= $this->e($user->getFName() . ' ' . $user->getLName()) ?></strong>
                                </h4>

                                <p><?= $this->e($user->getRole()) ?></p>
                                <a href="<?= $this->e($user->getWebsite()) ?>" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Check out a Sample of our Work</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="http://itpedia.apphb.com/">
                                <img class="img-portfolio img-responsive" src="img/itpedia.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="http://ashoka.students.acg.edu/Coursework/php/index.php">
                                <img class="img-portfolio img-responsive" src="img/judge.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="http://hubit-gazette.herokuapp.com/">
                                <img class="img-portfolio img-responsive" src="img/gazette.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="https://github.com/PadawanTony/DereeAmbassadors/tree/master">
                                <img class="img-portfolio img-responsive" src="img/ambassadors.png">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
<!--                ToDo: Create CodeBurrow organization in GitHub-->
<!--                <a href="#" class="btn btn-dark">View More Items</a>-->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Call to Action -->
<aside class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>If you are interested in working with us you can drop us a line below.
	                <hr>
	                <small style="color: #fff"> We will get back to you in less than 24 hours </small>
                </h2>
            </div>
        </div>
    </div>
</aside>


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">

                <h3> You can email us or contact support at &nbsp
                    <a href="tel:+306949464934">(+30) 694 94 64 934 <i class="fa fa-phone-square fa-fw"></i> </a>
                </h3>
	            <hr class="small">

	            <form action="/" method="POST">
		            <div class="form-group row">
			            <label for="name" class="col-sm-2 form-control-label text-right"> Name: </label>
			            <div class="col-sm-10">
				            <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Your Full Name">
			            </div>
			        </div>
		            <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 form-control-label text-right"> Email:</label>
			            <div class="col-sm-10">
				            <input type="email" class="form-control form-control-lg" name="inputEmail3" id="inputEmail3" placeholder="Your Email">
			            </div>
		            </div>
		            <div class="form-group row">
			            <label for="message" class="col-sm-2 form-control-label text-right"> Message:</label>
			            <div class="col-sm-10">
			                <textarea class="form-control form-control-lg" name="message" id="message" placeholder="Your Message" rows="5"></textarea>
				        </div>
		            </div>
		            <div class="form-group row">
			            <div class="col-sm-offset-2 col-sm-10">
				            <button type="submit" class="pull-left btn btn-large btn-primary text-uppercase"> <i class="fa fa-envelope-o fa-fw"></i> Send Message </button>
			            </div>
		            </div>
	            </form>

                <hr>
                <p class="text-muted">Copyright &copy; CodeBurrow.com 2016 </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>

</html>
