<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <!-- Template site title
   ================================================== -->
    <title><?= $this->section('title'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="codeburrow, web, software, development, design">
    <meta name="description" content="">

    <link rel="shortcut icon" href="img/logo_trans.png">
    <!--

    Template 2078 Adventure

    http://www.tooplate.com/view/2078-adventure

    -->
    <!-- Bootstrap CSS
   ================================================== -->
        <link rel="stylesheet" href="build/above-the-fold.min.css">

<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="css/animate.min.css">-->
<!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="css/et-line-font.css">-->
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bxslider.css">
    <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<section class="preloader">

    <div class="sk-rotating-plane"></div>

</section>


<!-- Content section
================================================== -->
<?= $this->section('content') ?>


<!-- Footer section
================================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <a style="color: #ffa400;" href="http://www.codeburrow.com"><h2 class="wow bounceIn">CodeBurrow</h2></a>
                <ul class="social-icon">
                    <li><a href="https://www.linkedin.com/company/codeburrow" class="fa fa-linkedin wow fadeIn"
                           data-wow-delay="0.3s"></a></li>
                    <li><a href="https://github.com/codeburrow" class="fa fa-github wow fadeIn"
                           data-wow-delay="1.3s"></a></li>
                </ul>
                <p>Copyright &copy; 2016 CodeBurrow

                    | Back To: <a rel="nofollow" href="#home" target="_parent">Top</a></p>

            </div>
        </div>
    </div>
</footer>

<script src="build/master.min.js" async onload="initTinymce"></script>
<script>
    function initTinymce() {
        tinymce.init({
            selector: '.mytextarea',
            plugins: 'advlist autolink link image lists charmap print preview'
        });
    }
</script>

</body>
</html>

