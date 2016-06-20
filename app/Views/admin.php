<?= $this->layout('layouts/master'); ?>

<?php $this->start('title') ?>

Dashboard

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
                    <div class="section-title ">
                        <h5><?php echo $post['title']; ?></h5>
                        <form role="form" action="/admin.php" method="post">
                            <div style="text-align: left" class="form-group">
                                <label for="author">Author: </label>
                                <input class="form-control" type="text" name="author" id="author" value="<?php echo $post['author']; ?>">
                            </div>
                            <div style="text-align: left" class="form-group">
                                <label for="title">Title: </label>
                                <input class="form-control" type="text" name="title" id="title" value="<?php echo $post['title']; ?>">
                            </div>
                            <hr>
                            <div style="text-align: left" class="form-group">
                                <label for="content">Content: </label>
                                <input style="height: 400px;" class="form-control" type="text" name="content" id="content" value="<?php echo $post['content']; ?>">
                            </div>
                            <input type="submit" class="btn btn-large btn-success">
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
