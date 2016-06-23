<?= $this->layout('layouts/master'); ?>

<?php $this->start('title') ?>

Blog

<?php $this->stop() ?>

<!-- Navigation section
================================================== -->
<section style="background-color: indianred;" class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <a href="http://www.codeburrow.com">
                <div id="logo" class="smoothScroll navbar-brand"></div>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll">TOP</a></li>
                <li><a href="#contact" class="smoothScroll">CONTACT</a></li>
            </ul>
        </div>

    </div>
</section>


<div style="margin-bottom: 150px;" id="top" class="parallax-section">
</div>

<!-- Articles section
================================================== -->
<section style="margin-top: 150px;" id="articles" class="parallax-section">
    <div class="container">
        <div class="row">

            <?php foreach ($posts as $post) { ?>
                <!-- Section title
                ================================================== -->
                <div class="col-sm-12">
                    <div class="section-title">
                        <h5 class="wow bounceIn"><?php echo $post['author']; ?></h5>
                        <h1 class="heading"><?php echo $post['title']; ?></h1>
                        <hr>
                        <p><?php echo $post['content']; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">

            <!-- Section title
            ================================================== -->
            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                <div class="section-title">
                    <?php if (isset($messageSuccess)) { ?>
                        <h2 style="color: forestgreen;">
                            <?php echo $messageSuccess; ?>
                        </h2>
                    <?php } elseif (isset($messageError)) { ?>
                        <h2 style="color: tomato;">
                            <?php echo $messageError; ?>
                        </h2>
                    <?php } else { ?>
                        <h5 class="wow bounceIn">THE FIRST STEP</h5>
                        <h1 class="heading">CONTACT US</h1>
                        <hr>
                        <p>We promise to get back to you in less than a day.</p>
                        <p>(Except if it's Sunday <i class="fa fa-smile-o" aria-hidden="true"></i> )</p>
                    <?php } ?>
                </div>
            </div>

            <!-- Contact form section
            ================================================== -->
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <form action="/#contact" method="POST" class="wow fadeInUp" data-wow-delay="0.6s">
                    <div class="col-md-4 col-sm-6">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" placeholder="Message" rows="7" name="message" id="message"></textarea>
                    </div>
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <input type="submit" class="form-control" value="SHOOT MESSAGE">
                    </div>
                </form>
            </div>

            <!-- Contact detail section
            ================================================== -->
            <div class="contact-detail col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
                    <p>support@codeburrow.com</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> CEO PHONE</h3>
                    <p>+30 694 94 64 934</p>
                </div>
            </div>

        </div>
    </div>
</section>

