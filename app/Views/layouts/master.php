<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title><?= $this->section('title'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="codeburrow, web, software, development, design, startup">
    <meta name="description" content="">

    <link rel="shortcut icon" href="/img/logo_trans.png">

    <style>
        <?= file_get_contents('build/above-the-fold.min.css'); ?>
    </style>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<!--<section class="preloader">-->
<!---->
<!--    <div class="sk-rotating-plane"></div>-->
<!--</section>-->


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

<script>
    function initTinymce() {
        tinymce.init({
            selector: '.mytextarea',
            theme: 'modern',
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullpage fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor'
            ],
            content_css: 'css/content.css',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
            entity_encoding : 'raw'
        });
    }
</script>
<script src="build/master.min.js" async onload="initTinymce()"></script>
</body>
</html>

